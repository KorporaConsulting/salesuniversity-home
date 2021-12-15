<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function get_product()
    {
        $select = '
        posts.id as id_post,
        posts.post_title as judul,
        posts.post_name as slug_post,
        posts.post_date as tanggal_post,
        terms.name as kategori,
        terms.slug as slug_kategori,
        wc_product_meta_lookup.onsale as diskon,
       
        ';

        $this->db->select($select, false);
        $this->db->from('posts');

        // biar di ambil produk woocomerce aja
        $this->db->join('wc_product_meta_lookup', 'posts.id = wc_product_meta_lookup.product_id');


        // ambil kategori
        $this->db->join('term_relationships', 'posts.id = term_relationships.object_id');
        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');

        // ambil yang produk woo saja
        $this->db->where('terms.term_id != 2');
        $this->db->where('terms.term_id != 8');


        $datah = $this->db->get()->result();

        $no = 0;
        foreach ($datah as $data) {

            $sale_price = $this->get_sale_price($data->id_post);
            $reg_price  = $this->get_regular_price($data->id_post);
            $images     = $this->get_images($data->id_post);

            $post['id_post']       = $data->id_post;
            $post['judul']         = $data->judul;
            $post['slug_post']     = $data->slug_post;
            $post['tanggal_post']  = $data->tanggal_post;
            $post['kategori']      = $data->kategori;
            $post['slug_kategori'] = $data->slug_kategori;
            $post['diskon']        = $data->diskon;
            $post['sale_price']    = $sale_price;
            $post['regular_price'] = $reg_price;
            $post['img']           = $images;
            $hasil[$no]            = $post;
            $no++;
        }

        return ($hasil);
    }

    public function get_sale_price($id_post)
    {
        $this->db->select('postmeta.meta_value');
        $this->db->from('postmeta');

        $this->db->join('posts', 'postmeta.post_id = posts.id');

        $this->db->where('postmeta.post_id', $id_post);
        $this->db->where('postmeta.meta_key', '_sale_price');
        $hasil = $this->db->get()->row();
        return $hasil->meta_value ?? null;
    }

    public function get_regular_price($id_post)
    {
        $this->db->select('postmeta.meta_value');
        $this->db->from('postmeta');

        $this->db->join('posts', 'postmeta.post_id = posts.id');

        $this->db->where('postmeta.post_id', $id_post);
        $this->db->where('postmeta.meta_key', '_regular_price');
        $hasil = $this->db->get()->row();
        return $hasil->meta_value ?? null;
    }

    public function get_images($id_post)
    {
        $this->db->select('posts.guid');
        $this->db->from('postmeta');

        $this->db->join('posts', 'postmeta.meta_value = posts.id');

        $this->db->where('postmeta.post_id', $id_post);
        $this->db->where('postmeta.meta_key', '_thumbnail_id');
        $hasil = $this->db->get()->row();
        return $hasil->guid;
    }
}
