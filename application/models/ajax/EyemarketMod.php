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
        $member = @$this->session->userdata("member");
        $this->id_member = $member["id"];
        $this->username = $member["username"];
        $this->name = $member["name"];
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
        $data['slug'] = $this->input->post('slug');
        
        $id_product = $this->get_id_product($data["slug"]);
        $data['product'] = $this->get_product($id_product->id_product);
        $data['ex_product'] = $this->get_product_lain($id_product->id_product);
        $data['username'] = $this->username;
        $data['id_member'] = $this->id_member;

        $html = $this->load->view($this->__theme().'eyemarket/ajax/market_detail',$data,true);
        $data = array('xClass'=> 'reqdetail','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __set_cart()
    {
        $id_member = $this->id_member;
        $id_membernya = $this->get_id_md($id_member);

        $id_product = $this->input->post('id_product');
        $jumlah = $this->input->post('jumlah');
        $catatan = $this->input->post('catatan');

        $this->db->select('harga,berat');
        $produk = $this->db->get_where('eyemarket_product', array('id_product' => $id_product))->row();
        
        $total  = $produk->harga * $jumlah;
        $berat  = $produk->berat * $jumlah;

        $data       = array(
            'id_product'    => $id_product,
            'id_member'     => $id_membernya->id_member,
            'jumlah'        => $jumlah,
            'total'         => $total,
            'berat'         => $berat,
            'catatan'       => $catatan,
            'created_date'  => date("Y-m-d H:i:s"),
        );

        $insert     = $this->add_keranjang($data);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Keranjang berhasil ditambah','xDirect'=> base_url().'eyemarket/keranjang/'.$id_member);
        $this->tools->__flashMessage($data);

    }

    function __view_cart()
    {
        $data['username'] = $this->username;
        $data['id_member'] = $this->id_member;

        $data['model']      = $this->get_keranjang($data['id_member']);
        $data['total_all']  = $this->get_total_harga($data['id_member']);
        $data['jumlah']     = $this->get_count_keranjang($data['id_member']);

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_cart',$data,true);
        $data = array('xClass'=> 'reqcart','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __delete_cart()
    {
        $id_member = $this->id_member;

        $id_product = $this->input->post('id');
        $query     = $this->delete_keranjang($id_product);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Produk berhasil dihilangkan dari keranjang','xDirect'=> base_url().'eyemarket/keranjang/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __edit_cart()
    {
        $id_member = $this->id_member;
        $id_keranjang = $this->input->post('idcart');
        $jumlah = $this->input->post('jumlah');

        $harga_satuan   = $this->get_harga_satuan($id_keranjang);
        $berat_satuan   = $this->get_berat($id_keranjang);

        $total          = $jumlah * $harga_satuan->harga;
        $berat          = $jumlah * $berat_satuan->berat;

        $data = array(
                'jumlah' => $jumlah,
                'total' => $total,
                'berat' => $berat,
        );

        $update                 = $this->edit_keranjang($data,$id_keranjang);
        $total_all_update       = $this->get_total_harga($id_member);

        $total_all_updatenya    = $total_all_update->total_all;

        $total_sub = "Rp. ".number_format($total,0,',','.');
        $total_cart = "Rp. ".number_format($total_all_updatenya,0,',','.');

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $total_sub, $this->input->post('dest_total') => $total_cart));
        $this->tools->__flashMessage($data);
    }

    function __view_address()
    {
        $data['id_member']  = $this->id_member;
        $data['member']     = $this->get_member($data['id_member']);
        $data['address']    = $this->get_address($data['id_member']);
        $data['provinsi']   = $this->get_all_provinsi();
        $data['jumlah']     = count($data['address']);

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_address',$data,true);
        $data = array('xClass'=> 'reqaddress','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __get_kota()
    { 
        $data["kota"]   = $this->get_kota($this->input->post('provinsi'));

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_kota',$data,true);

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $html));
        $this->tools->__flashMessage($data);
    }

    function __get_kecamatan()
    { 
        $data["kecamatan"]   = $this->get_kecamatan($this->input->post('kota'));

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_kecamatan',$data,true);

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $html));
        $this->tools->__flashMessage($data);
    }

    function __set_address()
    { 
        $id_member = $this->input->post('id_member');
        $id_membernya = $this->get_id_md($id_member);

        $nama_alamat = $this->input->post('nama_alamat');
        $penerima = $this->input->post('penerima');
        $hp = $this->input->post('hp');
        $alamat = $this->input->post('alamat');
        $kodepos = $this->input->post('kodepos');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kecamatan');

        $kode_jne   = $this->get_kode_jne($kota,$kecamatan);

        $input = array(
            'id_member'     => $id_membernya->id_member,
            'nama'          => $nama_alamat,
            'penerima'      => $penerima,
            'hp'            => $hp,
            'alamat'        => $alamat,
            'kodepos'       => $kodepos,
            'provinsi'      => $provinsi,
            'kota'          => $kota,
            'kecamatan'     => $kecamatan,
            'kode'          => $kode_jne->kode,
            'created_date'  => date("Y-m-d H:i:s"),
        );

        $insert = $this->tambah_address($input);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Alamat baru berhasil ditambah','xDirect'=> base_url().'eyemarket/set_alamat/'.$id_member);
        $this->tools->__flashMessage($data);

    }

    function __order_address()
    {
        $id_member = $this->input->post('id_member');
        $id_alamat = $this->input->post('pilih_alamat');

        $input = array(
            'id_alamat'     => $id_alamat,
        );

        $update_cart = $this->update_cart_address($id_member,$input);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Alamat pengiriman berhasil diatur','xDirect'=> base_url().'eyemarket/set_kurir/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __view_delivery()
    {
        $data['id_member'] = $this->id_member;
        $data['member'] = $this->get_member($data['id_member']);

        $data['berat'] = $this->get_total_berat($data['id_member']);
        $berat = $data['berat']->berat_all;

        $model = $this->get_keranjang($data['id_member']);
        $kode_tujuan = $model[0]['kode'];
        $data['alamat'] = $model[0]['alamat'];

        $this->load->helper('my');

        $get_ongkir = getOngkir($kode_tujuan,$berat);
        $jmlh_service = count($get_ongkir->price);
        $data['ctc'] = '';
        $data['reg'] = '';
        $data['yes'] = '';
        $data['ctcyes'] = '';

        for ($i = 0; $i < $jmlh_service ; $i++)
        {
            if ($get_ongkir->price[$i]->service_display == "CTC")
            {
                $data['ctc'] = $get_ongkir->price[$i]->price;
            }
            else
            if ($get_ongkir->price[$i]->service_display == "REG")
            {
                $data['reg'] = $get_ongkir->price[$i]->price;
            }
            else
            if ($get_ongkir->price[$i]->service_display == "YES")
            {
                $data['yes'] = $get_ongkir->price[$i]->price;
            }
            else
            if ($get_ongkir->price[$i]->service_display == "CTCYES")
            {
                $data['ctcyes'] = $get_ongkir->price[$i]->price;
            }
        }

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_delivery',$data,true);
        $data = array('xClass'=> 'reqkurir','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

}


