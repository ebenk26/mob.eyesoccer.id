<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyenewsMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __trending()
    {
	$query = array('page' => 1, 'limit' => 5, 'sortby' => 'newest');
	$data['news'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/trending', $data, true);
	
	$data = array('xClass' => 'reqtrend', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
    function __onelist()
    {
	$page  = $this->input->post('page');
	$limit = $this->input->post('limit');
	$desc = $this->input->post('desc');
	$query = array('page' => $page, 'limit' => $limit, 'sortby' => 'newest', 'description' => $desc);
	$data['list'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/onelist', $data, true);
	
	$data = array('xClass' => 'reqonelist', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
    function __tabnews()
    {
	$query = array('page' => 1, 'limit' => 6, 'description' => 'true', 'sortby' => 'mostview');
	$data['popular'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$query = array('page' => 1, 'limit' => 6, 'description' => 'true', 'recommended' => true);
	$data['recommended'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$query = array('page' => 1, 'limit' => 6, 'description' => 'true', 'youngage' => true);
	$data['youngage'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/tabnews', $data, true);
	
	$data = array('xClass' => 'reqtabnews', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
    function __newscat()
    {
	$data['newscat'] = $this->excurl->remoteCall($this->__xurl().'news-category', $this->__xkey(), []);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/category', $data, true);
	
	$data = array('xClass' => 'reqcat', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
	function __detail_news()
    {
		$slug = $this->input->post("slug");
		$query = array('related' => true);
		$data['newsdetail'] = $this->excurl->remoteCall($this->__xurl().'news/'.$slug,$this->__xkey(),$query);
		
		$html = $this->load->view($this->__theme().'eyenews/ajax/detail_news', $data, true);
		$related = $this->load->view($this->__theme().'eyenews/ajax/related_news', $data, true);
		
		$data = array('xClass' => 'reqdetail', 'xHtml' => $html, 
					  'xSplit' => true, 'xData' => ['reqterkait' => $related]);
		$this->tools->__flashMessage($data);
    }
    
    function __categorylist()
    {
	$query = array('page' => 1, 'limit' => 12, 'category' => $this->input->post('slug'));
	$data['catlist'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/categorylist', $data, true);
	
	$data = array('xClass' => 'reqcatlist', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
	
	function __related_news()
    {
		$page  = $this->input->post('pg');
        $cat = $this->input->post('cat');
		$query = array('page' => $page,'limit' => 5, 'sortby' => 'newest','category' => $cat);
		$data['newslist'] = $this->excurl->remoteCall($this->__xurl().'news',$this->__xkey(),$query);
		
		$html = $this->load->view($this->__theme().'eyenews/ajax/newslist', $data, true);
		
		$data = array('xClass' => 'reqterkait', 'xHtml' => $html, 'xAppend' => true);
		$this->tools->__flashMessage($data);
    }

	function __homenewslist()
    {
		$page  = $this->input->post('page');
        $limit = $this->input->post('limit');
        $desc = $this->input->post('desc');
		$query = array('page' => $page, 'limit' => $limit, 'sortby' => 'newest', 'description' => $desc);
		$data['homenewslist'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
		
		$html = $this->load->view($this->__theme().'eyenews/ajax/homenewslist', $data, true);
		
		$data = array('xClass' => 'reqhomenewslist', 'xHtml' => $html);
		$this->tools->__flashMessage($data);
    }
}
