<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/query/MarketQueryMod.php');

class EyemarketMod extends MarketQueryMod {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {


    parent::__construct();

    }
 
    function __market(){
 
        $data['prodlist'] = $this->get_all_product('5');
        $html = $this->load->view($this->__theme().'eyemarket/ajax/prodlist',$data,true);
        $data = array('xClass'=> 'reqmarket','xHtml' => $html);
        $this->tools->__flashMessage($data);
      

    }

    function __market_home(){
 
        $data['prodlist'] = $this->get_all_product('40');
        $html = $this->load->view($this->__theme().'eyemarket/ajax/market_home',$data,true);
        $data = array('xClass'=> 'reqmarket','xHtml' => $html);
        $this->tools->__flashMessage($data);

    }

    function __market_detail()
    {
        $data["slug"] = $this->input->post('slug');
        
        $id_product = $this->get_id_product($data["slug"]);
        $data["product"] = $this->get_product($id_product->id_product);
        $data["ex_product"] = $this->get_product_lain($id_product->id_product);
        $data['username']       = $this->session->userdata('username');
        $data['id_member']      = $this->session->userdata('id_member');

        $html = $this->load->view($this->__theme().'eyemarket/ajax/market_detail',$data,true);
        $data = array('xClass'=> 'reqdetail','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

}


