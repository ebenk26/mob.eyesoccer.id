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
                    $arr = array('xClass'=> 'errmsg','xHtml'=> $res->message);
                }
            }
        }

        $this->tools->__flashMessage($arr);

    }
	

}
