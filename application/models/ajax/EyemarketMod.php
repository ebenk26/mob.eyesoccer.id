<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/query/MarketQueryMod.php');

class EyemarketMod extends MarketQueryMod {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
<<<<<<< HEAD

    parent::__construct();

    }
 
    function __market(){
     # p($this->get_all_product());
      $data['prodlist'] = $this->get_all_product();
      $html = $this->load->view($this->__theme().'eyemarket/ajax/prodlist',$data,true);
      $data = array('xClass'=> 'reqmarket','xHtml' => $html);
      $this->tools->__flashMessage($data);
      #echo APPPATH.'/models/query/MarketQueryMod.php';

=======
        parent::__construct();
    }
 
    function get_all_product()
    {
        $query = $this->db->query(" SELECT
                                        A.id_product,
                                        A.id_kategori,
                                        A.id_toko,
                                        A.nama,
                                        A.title_slug,
                                        A.harga_sebelum,
                                        A.harga,
                                        A.diskon,
                                        A.status_publish,
                                        A.created_date,
                                        B. nama as toko,
                                        C. nama as kategori,
                                        E.id as id_image,
                                        E.image1,
                                        F.nama as nama_region
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN 
                                        eyemarket_toko B on A.id_toko = B.id
                                    INNER JOIN
                                        eyemarket_category C on A.id_kategori = C.id
                                    LEFT JOIN
                                        eyemarket_images E on A.id_product =  E.id_product
                                    INNER JOIN
                                        eyemarket_parent_cat F on A.id_kategori = F.id
                                    WHERE
                                        status_publish = 1
                                    ORDER BY 
                                        A.id_product DESC
                                    LIMIT 5
                                        ")->result_array();
        
        return $query; 
    }
    
    function __market()
    {
        # p($this->get_all_product());
        $data['prodlist'] = $this->get_all_product();
        
        $html = $this->load->view($this->__theme().'eyemarket/ajax/prodlist', $data, true);
        
        $data = array('xClass' => 'reqmarket', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
>>>>>>> 154d614bbb5659387a34db9eb4bfd5fb8f2f4489
    }

}


