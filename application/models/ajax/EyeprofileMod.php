<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyeprofileMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __eyeprofile()
    {
	$query = array('page'  => 1, 'limit' => 5);
	$data['profile'] = $this->excurl->remoteCall($this->__xurl().'profile', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'home/ajax/eyeprofile', $data, true);
	
	$data =array('xClass'=>'reqprofile','xHtml'=> $html);
	$this->tools->__flashMessage($data);
    }

    function __klublist(){
		$competition = urldecode($this->input->post('slug'));

		if($competition == 'Non Liga'){
			$competition = 'SSB / Akademi Sepakbola';
		}
		
		$page = ($this->session->userdata('pageklub')) ? $this->session->userdata('pageklub') : 1;
		if($this->input->post('paging') == 'next'){
			if($this->session->userdata('pagetotalklub') > $this->session->userdata('pageklub')){
				$page += 1;
			}
		} else {
			if($this->session->userdata('pageklub') >= 2){
				$page -= 1;
			}
		}
		
		$this->session->set_userdata(array('pageklub' => $page));
		
        $query = array('page'  => $this->session->userdata('pageklub'), 'limit' => 24, 
					   'league' => '', 'competition' => $competition);
		
		$data['slug'] = $competition;
		$data['klublist'] = $this->excurl->remoteCall($this->__xurl().'profile-club', $this->__xkey(), $query);
		$data['klubcount'] = $this->excurl->remoteCall($this->__xurl().'profile-club', $this->__xkey(), 
							 array_merge($query, ['count' => true]));
		
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/klublist', $data, true);
		
		$data =array('xClass'=>'reqklublist','xHtml'=> $html, 
					 'xUrlhash' => base_url().'eyeprofile/klub/'.$competition.'/'.$page);
		$this->tools->__flashMessage($data);
    }
	
	function __clubcount(){
		$competition = urldecode($this->input->post('slug'));
		$data['submenu'] = urldecode($this->input->post('submenu'));

		if($competition == 'Non Liga'){
			$competition = 'SSB / Akademi Sepakbola';
		}
        $query = array('page'  => 1, 'limit' => 9, 'league' => '', 'competition' => $competition, 'count' => true);
		$data['klublist'] = $this->excurl->remoteCall($this->__xurl().'profile-club', $this->__xkey(), $query);
		$clubcount = $this->load->view($this->__theme().'eyeprofile/ajax/clubcount', $data, true);
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/clubcount', $data, true);
	
		$data =array('xClass'=>'reqklublist','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
	
	function __competition(){
		$competition = $this->input->post('slug');
		$data['submenu'] = $this->input->post('submenu');

        $query = array('page'  => 1, 'limit' => 8);
		$data['competitionlist'] = $this->excurl->remoteCall($this->__xurl().'competition', $this->__xkey(), $query);
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/competitionlist', $data, true);
	
		$data =array('xClass'=>'reqcompetition','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
	
	function __matchlist(){
		$competition = $this->input->post('slug');
		$date = date('Y-m-d');
		$newdate = strtotime ( '-5 month' , strtotime ( $date ) ) ;
		$startdate = date ( 'Y-m-d' , $newdate );
		$event = 'non liga';
		if($competition == 'Liga Indonesia 1'){
			$event = 'Go-Jek Traveloka Liga 1 - 2017';
		}else if($competition == 'Liga Indonesia 2'){
			$event = 'Liga 2 Go-Jek Traveloka - Play Off';
		}else if($competition == 'Liga Indonesia 3'){
			$event = 'Liga Indonesia 3 Wilayah Jawa Barat';
		}
        $query = array('page'  => 1, 'limit' => 2, 'sortby' => 'newest', 'event' => $event, 'startdate' => '', 'enddate' => '');
		$data['matchlist'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/matchlist', $data, true);
	
		$data =array('xClass'=>'reqmatchlist','xHtml'=> $html);
		$this->tools->__flashMessage($data);
		
		$_SESSION['klublistpage'] = 1;
    }
}
