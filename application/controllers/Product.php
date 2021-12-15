<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Automattic\WooCommerce\Client;

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model','product');
    }
    public function index()
    {
       $result = $this->product->get_product();
        var_dump($result);
    }

    public function produk()
    {
        $woocommerce = new Client(
			'https://salesuniversity.id',
			'ck_2f467cee54711ecfa9ba06cc3beb8d8c98aa8e58',
			'cs_2416fb9fe3138acc4fd5c91e1137956ecc7cc4ee',
			[
				'version' => 'wc/v3',
				'timeout' => 60
			]
		);;

		// semua kelas
		$all_product = $woocommerce->get('products', [
			'page' => 1,
			'per_page' => 40
		]);

        var_dump($all_product);
    }
}