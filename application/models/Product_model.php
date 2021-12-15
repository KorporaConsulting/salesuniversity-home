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
        GROUP_CONCAT(wpkv_postmeta.meta_key SEPARATOR ",") as meta_key,
        GROUP_CONCAT(wpkv_postmeta.meta_value SEPARATOR ",") as meta_value,
        ';

        $this->db->select($select, false);
        $this->db->from('posts');

        // biar di ambil produk woocomerce aja
        $this->db->join('wc_product_meta_lookup', 'posts.id = wc_product_meta_lookup.product_id');

        // nah price ama saleprice ada disini pokoknya
        $this->db->join('postmeta', 'postmeta.post_id = wc_product_meta_lookup.product_id');

        // ambil kategori
        $this->db->join('term_relationships', 'posts.id = term_relationships.object_id');
        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');

        // ambil yang produk woo saja
        $this->db->where('terms.term_id != 2');
        $this->db->where('terms.term_id != 8');

        // ambil harga reguler ama price
        $this->db->where('postmeta.meta_key', '_regular_price');
        $this->db->or_where('postmeta.meta_key', '_sale_price');

        // di grup deh
        $this->db->group_by('postmeta.post_id');

        return $this->db->get()->result_array();
    }
}
