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
 
      $data['prodlist'] = $this->get_all_product();
      $html = $this->load->view($this->__theme().'eyemarket/ajax/prodlist',$data,true);
      $data = array('xClass'=> 'reqmarket','xHtml' => $html);
      $this->tools->__flashMessage($data);
      

    }

}


