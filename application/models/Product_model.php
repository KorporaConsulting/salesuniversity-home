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
        $this->db->or_where('postmeta.meta_key', '_thumbnail_id');
        // $this->db->or_where('postmeta.meta_key', '_wp_attached_file');

        // di grup deh
        $this->db->group_by('postmeta.post_id');

        $datah = $this->db->get()->result();

        $no = 0;
        foreach ($datah as $data) {
            $mekey = explode(", ", $data->meta_key);
            $meval = explode(", ", $data->meta_value);
            $meta  = array_combine($mekey, $meval);
            $image =

                $post['id_post']       = $data->id_post;
            $post['judul']         = $data->judul;
            $post['slug_post']     = $data->slug_post;
            $post['tanggal_post']  = $data->tanggal_post;
            $post['kategori']      = $data->kategori;
            $post['slug_kategori'] = $data->slug_kategori;
            $post['diskon']        = $data->diskon;
            $post['sale_price']    = $meta['_sale_price'] ?? null;
            $post['regular_price'] = $meta['_regular_price'];
            // $post['img'] = $this->db->get('posts');
            $hasil[$no] = $post;
            $no++;
        }

        return ($hasil);
    }
}
