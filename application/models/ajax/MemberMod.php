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
    

        if($res->status == 'Success'){
            #echo $res->data->username;
           $v = $res->data;
           $this->session->username = $v->username;
           #redirect(mMEMBERAREA,'refresh');
           $arr = array('xDirect'=> base_url().$refer);
           echo json_encode($arr);
        }
        else{

            $arr   = array('xClass'=> 'errmsg','xHtml'=> 'username atau password salah','new'=> @$_GET['from'],'status'=> $res->status);
            echo json_encode($arr);

        }
        
    	
	}
	

}
