<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __loginact()
    {

        
        $refer = $this->input->get('from');
        $refer = ($refer === null || $refer === '' ? 'member': str_replace('-', '/', $refer));
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');
        $query = array('email'=> $email, 'password'=> $pass);
        $res   = $this->excurl->remoteCall($this->__xurl().'login', $this->__xkey(), $query);
        $res   = json_decode($res);
    
        $arr  = [];
        if($res AND is_array($res->data))
        {
            if($res->status == 'Error')
            {
                if($res->message == 'Validation')
                {
                    $arr = array_merge($arr, array('xSplit' => true, 'xData' => array()));
                    foreach ($res->data as $key => $value) {
                        $arr['xData'] = array_merge($arr['xData'], array('msg'.$value->param => $value->msg));
                    }
                    
                } else {
                    $arr = array('xCss'=> 'boxfailed','xMsg'=> $res->message,'xAlert'=> true);
                }
            }
        } else {
            #echo $res->data->username;
           $v = $res->data;
           $sess = array(
                    'id'=> $v->id,
                    'username' => $v->username,
                    'name'=> $v->name,
                    'url_pic' => $v->url_pic,
                    'url'     => $v->url,
                    'active'  => $v->active,
                    'verification' => $v->verification
                );
           $this->session->member   = $sess;

           #redirect(mMEMBERAREA,'refresh');
           $arr = array('xDirect'=> base_url().$refer,'xCss'=> 'boxsuccess','xMsg'=> $res->message,'xAlert'=> true);
           $this->tools->__flashMessage($arr);
        }
        
        $this->tools->__flashMessage($arr);
	}

    function __regact(){

        $name = $this->input->post('name');
        $uname = $this->input->post('username');
        $email= $this->input->post('email');
        $pass = $this->input->post('password');
        $cpass= $this->input->post('passconfirm');
        $query= array(
                'name'  => $name,
                'username' => $uname,
                'email' => $email,
                'password' => $pass,
                'passconfirm'=> $cpass);
        $res  = $this->excurl->remoteCall($this->__xurl().'register',$this->__xkey(),$query);
        $res = json_decode($res);

        $arr  = [];
        if($res AND is_array($res->data))
        {
            if($res->status == 'Error')
            {
                if($res->message == 'Validation')
                {
                    $arr = array_merge($arr, array('xSplit' => true, 'xData' => array()));
                    foreach ($res->data as $key => $value) {
                        $arr['xData'] = array_merge($arr['xData'], array('msg'.$value->param => $value->msg));
                    }
                } else {
                    $arr = array('xCss'=> 'boxfailed','xMsg'=> $res->message,'xAlert'=> true);
                }
            }
        }

        $arr = array('xDirect'=> base_url(),'xCss'=> 'boxsuccess','xMsg'=> 'Silahkan Cek Email <br> Untuk aktifasi akun anda','xAlert'=> true);

        $this->tools->__flashMessage($arr);

    }
	
	function profile_upload(){
		if ($_FILES['pic']['size'] > 10485760) {
            $return = 'Gambar terlalu besar. Maksimum besar gambar adalah 1MB.';
			$arr = array('xCss'=> 'boxfailed','xMsg'=> $return,'xAlert'=> true);

			$this->tools->__flashMessage($arr);
        } else {
            $allowed = array('gif', 'png', 'jpg', 'jpeg');
            $filename = file_name('pic');
			$return = 'Success.';
			$caption = "Profile Picture";
			$lat = $_POST['lat'];
			$lon = $_POST['lon'];
			$date = date("Y-m-d H:i:s");
			$pic = "foto-" . $filename;
			$path = ($_SERVER['SERVER_NAME'] == 'localhost') ? pathUrl() . "img/img_storage/" : IMGSTORAGE . '/';
			move_uploaded_file($_FILES['pic']['tmp_name'], $path . 'ori_' . $pic);
			$last_id = $this->session->member['id'];
			$post_data = array(
				'title' => $caption,
				'tags' => 'profil',
				'pic' => $pic,
				'thumb1' => $pic,
				'lat' => $lat,
				'lon' => $lon,
				'upload_date' => date("Y-m-d H:i:s"),
				'publish_by' => 'member',
				'publish_type' => 'public',
				'upload_user' => $last_id
			);
			$cmd = $this->db->insert("tbl_gallery", $post_data);
			$this->db->trans_complete();
			$pic_id = $this->db->insert_id();

			$this->db->query("UPDATE tbl_member SET profile_pic='" . $pic_id . "' WHERE id_member='" . $_SESSION["member_id"] . "'");
			if ($this->db->affected_rows() > 0) {
				$arr = array('xDirect'=> base_url(),'xCss'=> 'boxsuccess','xMsg'=> 'Upload Foto Profil Sukses.','xAlert'=> true);

				$this->tools->__flashMessage($arr);
			} else {
				$arr = array('xCss'=> 'boxfailed','xMsg'=> 'Upload Foto Profil Gagal.','xAlert'=> true);

				$this->tools->__flashMessage($arr);
			}
        }
	}

}
