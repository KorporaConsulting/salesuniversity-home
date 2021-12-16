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
        terms.*,
       
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

    public function get_featured_product()
    {
        $select = '
        posts.id as id_post,
        posts.post_title as judul,
        posts.post_name as slug_post,
        posts.post_date as tanggal_post,
        wc_product_meta_lookup.onsale as diskon,
        ';

        $this->db->select($select, false);
        $this->db->from('posts');

        // biar di ambil produk woocomerce aja
        $this->db->join('wc_product_meta_lookup', 'posts.id = wc_product_meta_lookup.product_id');


        // ambil kategori
        $this->db->join('term_relationships', 'posts.id = term_relationships.object_id');
        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');

        // ambil yang produk featured saja
        // $this->db->where('terms.term_id != 2');
        $this->db->where('terms.term_id', '8');


        $datah = $this->db->get()->result();

        $no = 0;
        foreach ($datah as $data) {

            $sale_price = $this->get_sale_price($data->id_post);
            $reg_price  = $this->get_regular_price($data->id_post);
            $images     = $this->get_images($data->id_post);
            $kategori   = $this->get_kategori($data->id_post);

            $post['id_post']       = $data->id_post;
            $post['judul']         = $data->judul;
            $post['slug_post']     = $data->slug_post;
            $post['tanggal_post']  = $data->tanggal_post;
            $post['kategori']      = $kategori->kategori;
            $post['slug_kategori'] = $kategori->slug_kategori;
            $post['diskon']        = $data->diskon;
            $post['sale_price']    = $sale_price;
            $post['regular_price'] = $reg_price;
            $post['img']           = $images;
            $hasil[$no]            = $post;
            $no++;
        }

        return ($hasil);
    }

    public function get_product_by_category($term_id)
    {
        $select = '
        posts.id as id_post,
        posts.post_title as judul,
        posts.post_name as slug_post,
        posts.post_date as tanggal_post,
        wc_product_meta_lookup.onsale as diskon,
        ';

        $this->db->select($select, false);
        $this->db->from('posts');

        // biar di ambil produk woocomerce aja
        $this->db->join('wc_product_meta_lookup', 'posts.id = wc_product_meta_lookup.product_id');


        // ambil kategori
        $this->db->join('term_relationships', 'posts.id = term_relationships.object_id');
        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');

        // ambil yang produk featured saja
        // $this->db->where('terms.term_id != 2');
        $this->db->where('terms.term_id', $term_id);


        $datah = $this->db->get()->result();

        $no = 0;
        foreach ($datah as $data) {

            $sale_price = $this->get_sale_price($data->id_post);
            $reg_price  = $this->get_regular_price($data->id_post);
            $images     = $this->get_images($data->id_post);
            $kategori   = $this->get_kategori($data->id_post);

            $post['id_post']       = $data->id_post;
            $post['judul']         = $data->judul;
            $post['slug_post']     = $data->slug_post;
            $post['tanggal_post']  = $data->tanggal_post;
            $post['kategori']      = $kategori->kategori;
            $post['slug_kategori'] = $kategori->slug_kategori;
            $post['diskon']        = $data->diskon;
            $post['sale_price']    = $sale_price;
            $post['regular_price'] = $reg_price;
            $post['img']           = $images;
            $hasil[$no]            = $post;
            $no++;
        }

        return ($hasil);
    }

    public function get_best_seller_product()
    {
        $select = '
        posts.id as id_post,
        posts.post_title as judul,
        posts.post_name as slug_post,
        posts.post_date as tanggal_post,
        wc_product_meta_lookup.onsale as diskon,
        postmeta.meta_value as total_sales
        ';

        $this->db->select($select, false);
        $this->db->from('posts');

        // biar di ambil produk woocomerce aja
        $this->db->join('wc_product_meta_lookup', 'posts.id = wc_product_meta_lookup.product_id');

        $this->db->join('postmeta', 'postmeta.post_id = wc_product_meta_lookup.product_id');

        // ambil kategori
        $this->db->join('term_relationships', 'posts.id = term_relationships.object_id');
        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');


        $this->db->where('terms.term_id != 2');
        $this->db->where('terms.term_id != 8');
        $this->db->where('postmeta.meta_key', 'total_sales');

        $this->db->order_by('cast(wpkv_postmeta.meta_value as int)', 'DESC');

        $datah = $this->db->get()->result();
        // die;
        $no = 0;
        foreach ($datah as $data) {

            $sale_price = $this->get_sale_price($data->id_post);
            $reg_price  = $this->get_regular_price($data->id_post);
            $images     = $this->get_images($data->id_post);
            $kategori   = $this->get_kategori($data->id_post);

            $post['id_post']       = $data->id_post;
            $post['judul']         = $data->judul;
            $post['slug_post']     = $data->slug_post;
            $post['tanggal_post']  = $data->tanggal_post;
            $post['kategori']      = $kategori->kategori;
            $post['slug_kategori'] = $kategori->slug_kategori;
            $post['diskon']        = $data->diskon;
            $post['sale_price']    = $sale_price;
            $post['regular_price'] = $reg_price;
            $post['img']           = $images;
            $post['total_sales']   = $data->total_sales;
            $hasil[$no]            = $post;
            $no++;
        }

        return ($hasil);
    }

    public function get_kategori($id_post)
    {
        $this->db->select('terms.name as kategori,terms.slug as slug_kategori,');
        $this->db->from('term_relationships');

        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');

        $this->db->where('term_relationships.object_id', $id_post);
        $this->db->where('terms.term_id != 2');
        $this->db->where('terms.term_id != 8');
        return $this->db->get()->row();
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
