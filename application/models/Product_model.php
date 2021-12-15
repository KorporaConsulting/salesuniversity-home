<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function get_product()
    {
        $select = '
        *,
        posts.id as id,
        GROUP_CONCAT(wpkv_postmeta.meta_key SEPARATOR ",") as meta_key,
        GROUP_CONCAT(wpkv_postmeta.meta_value SEPARATOR ",") as meta_value,
        posts.post_name as name,
        posts.post_title as title,
        wc_product_meta_lookup.onsale as diskon
        ';

        $this->db->select($select, false);
        $this->db->from('wc_product_meta_lookup');


        $this->db->join('posts', 'posts.id = wc_product_meta_lookup.product_id');
        $this->db->join('postmeta', 'postmeta.post_id = wc_product_meta_lookup.product_id');

        $this->db->join('term_relationships', 'term_relationships.object_id = posts.id');
        $this->db->join('terms', 'terms.term_id = term_relationships.term_taxonomy_id');

        $this->db->where(['term_relationships.term_taxonomy_id' => 15]);

        $this->db->where(['postmeta.meta_key' => '_price']);
        $this->db->or_where(['postmeta.meta_key' => '_sale_price']);
        $this->db->or_where(['postmeta.meta_key' => '_regular_price']);
        $this->db->group_by('postmeta.post_id');
        return $this->db->get()->result();
    }
}
