<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketQueryMod extends CI_Model {

    function get_id_md($id_md)
    {
        $query = $this->db->query(" SELECT
                                        A.id_member
                                    FROM
                                        tbl_member A
                                    WHERE
                                        md5(A.id_member) = '$id_md'
                                        ")->row();
        return $query;
    }

    public function get_all_product($limit)
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
                                    LIMIT $limit
                                        ")->result_array();
            return $query; 
    }

    public function get_id_product($title_slug)
    {
        $this->db->select('id_product');
        $query = $this->db->get_where('eyemarket_product', array('title_slug' => $title_slug))->row();
        return $query; 
    }

    public function get_product($id_product)
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
                                        A.stok,
                                        A.berat,
                                        A.keterangan,
                                        A.ongkir,
                                        A.status_publish,
                                        A.created_date,
                                        B. nama as toko,
                                        C. nama as kategori,
                                        D.id,
                                        D.S,
                                        D.M,
                                        D.L,
                                        D.XL,
                                        D.XXL,
                                        D.XXXL,
                                        D.custom,
                                        E.id as id_image,
                                        E.image1,
                                        E.image2,
                                        E.image3,
                                        E.image4,
                                        E.image5
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN 
                                        eyemarket_toko B        on A.id_toko = B.id
                                    INNER JOIN
                                        eyemarket_category C    on A.id_kategori = C.id
                                    LEFT JOIN
                                        eyemarket_size D        on A.id_product = D.id_product
                                    LEFT JOIN
                                        eyemarket_images E      on A.id_product =  E.id_product
                                    WHERE
                                        A.id_product = '$id_product'
                                        AND
                                        status_publish != 2
                                    ORDER BY 
                                        A.id_product DESC
                                        ")->result_array();
            return $query; 
    }

    public function get_product_lain($id_product)
    {
        $query = $this->db->query(" SELECT
                                        A.*,
                                        B.image1,
                                        C.nama as toko
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN
                                        eyemarket_images B on B.id_product = A.id_product
                                    LEFT JOIN
                                        eyemarket_toko C on C.id = A.id_toko
                                    WHERE
                                        A.id_product != '$id_product'
                                        AND
                                        A.status_publish = 1
                                    LIMIT
                                        4
                                        ")->result_array();
        return $query; 
    }

    public function add_keranjang($data)
    {
        $this->db->insert('eyemarket_keranjang', $data);
        
        return $this->db->insert_id();
    }

    public function get_keranjang($id_member)
    { 
        $query = $this->db->query(" SELECT
                                        A.*,
                                        B.nama,
                                        B.title_slug,
                                        B.harga_sebelum,
                                        B.harga,
                                        B.diskon,
                                        B.berat,
                                        B.keterangan,
                                        C.nama as toko,
                                        E.id as id_image,
                                        E.image1,
                                        E.image2,
                                        E.image3,
                                        E.image4,
                                        E.image5,
                                        F.nama as nama_rumah,
                                        F.kode,
                                        F.alamat
                                    FROM
                                        eyemarket_keranjang A
                                    LEFT JOIN
                                        eyemarket_product B     on B.id_product = A.id_product
                                    LEFT JOIN
                                        eyemarket_toko C        on C.id = B.id_toko
                                    LEFT JOIN
                                        eyemarket_images E      on A.id_product =  E.id_product
                                    LEFT JOIN
                                        eyemarket_address F      on A.id_alamat =  F.id
                                    WHERE 
                                        md5(A.id_member) = '$id_member'
                                        AND
                                        A.status = 0
                                    ORDER BY
                                        A.id ASC
                                        ")->result_array();
        return $query;
    }

    public function get_total_harga($id_member)
    { 
        $query = $this->db->query(" SELECT
                                        sum(total) as total_all
                                    FROM
                                        eyemarket_keranjang
                                    WHERE
                                        md5(id_member) = '$id_member'
                                        AND
                                        status = 0
                                        ")->row();
        return $query;
    }

    public function get_count_keranjang($id_member)
    {
        $query = $this->db->query(" SELECT
                                        count(id) as jumlah
                                    FROM
                                        eyemarket_keranjang
                                    WHERE
                                        md5(id_member) = '$id_member'
                                        AND
                                        status = 0
                                        ")->row();
        return $query;
    }

    public function delete_keranjang($id)
    {
        $this->db->delete('eyemarket_keranjang', array('id' => $id));

        return $this->db->affected_rows();;
    }
}