<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMod extends CI_Model
{
    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
    }

    function __trending()
    {
        $query = array('page' => 1, 'limit' => 4, 'sortby' => 'mostview');
        $data['news'] = $this->excurl->remoteCall($this->__xurl() . 'news', $this->__xkey(), $query);
        $data['video'] = $this->excurl->remoteCall($this->__xurl() . 'video', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'home/ajax/trending', $data, true);

        $data = array('xClass' => 'reqtrend', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __match_schedule()
    {
        $data["kemarin"] = get_date("-1");
        $data["hari_ini"] = get_date("+0");
        $data["besok"] = get_date("+1");

        // ===== kemarin
        $query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["kemarin"]["tanggalnya"], 'enddate' => $data["kemarin"]["tanggalnya"]);
        $data['match_yest'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

        // ===== hari ini
        $query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["hari_ini"]["tanggalnya"], 'enddate' => $data["hari_ini"]["tanggalnya"]);
        $data['match_today'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

        // ===== besok
        $query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["besok"]["tanggalnya"], 'enddate' => $data["besok"]["tanggalnya"]);
        $data['match_tomorrow'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'home/ajax/match_schedule', $data, true);

        $data = array('xClass' => 'reqmatch', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __klasemen()
    {
        $html = $this->load->view($this->__theme() . 'home/ajax/klasemen', '', true);

        $data = array('xClass' => 'reqklasemen', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __list_event()
    {
        $data['oke'] = 'oke';

        $html = $this->load->view($this->__theme() . 'home/ajax/klasemen', $data, true);

        $data = array('xClass' => 'reqklasemen', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
}
