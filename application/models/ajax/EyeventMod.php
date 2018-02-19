<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyeventMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }

    function __match_schedule()
    {
    	$data["kemarin"] = get_date("-1");
    	$data["hari_ini"] = get_date("+0");
    	$data["besok"] = get_date("+1");

    	// ===== kemarin
    	$query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["kemarin"]["tanggalnya"], 'enddate' => $data["kemarin"]["tanggalnya"]);
    	$data['match_yest'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	// ===== hari ini
    	$query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["hari_ini"]["tanggalnya"], 'enddate' => $data["hari_ini"]["tanggalnya"]);
    	$data['match_today'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	// ===== besok
    	$query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["besok"]["tanggalnya"], 'enddate' => $data["besok"]["tanggalnya"]);
    	$data['match_tomorrow'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	$html = $this->load->view($this->__theme().'eyevent/ajax/match_schedule', $data, true);
    	
    	$data = array('xClass' => 'reqmatch', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __klasemen()
    {
    	$html = $this->load->view($this->__theme().'eyevent/ajax/klasemen', '', true);
    	
    	$data = array('xClass' => 'reqklasemen', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __event_list()
    {
        $page = $this->input->post('page');
        $limit = $this->input->post('limit');

    	$query = array('page' => 1, 'limit' => $limit, 'sortby' => 'mostview', 'category' => '');
    	$data['event_list'] = $this->excurl->remoteCall($this->__xurl().'event', $this->__xkey(), $query);

        if ($page == 'home')
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/home_event_list', $data, true);            
        }
        else
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/event_list', $data, true);
        }

    	
    	$data = array('xClass' => 'reqevent', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __event_detail()
    {
        $data['slug'] = $this->input->post("slug");
        
        $query = array('page' => 1, 'limit' => 6, 'related' => 'true');
        $data['detail'] = $this->excurl->remoteCall($this->__xurl().'event/'.$data['slug'], $this->__xkey(), $query);
        
        $html = $this->load->view($this->__theme().'eyevent/ajax/detail_vent', $data, true);
        
        $data = array('xClass' => 'reqdetail', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

}
