<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Automattic\WooCommerce\Client;

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'product');
	}

	public function index()
	{

		/* Data Yang Perlu Di ambil
		- Kategori
		- Semua Kelas
		- Kelas Best Seller
		- Kelas Per Kategori
		*/
		$data['onsale'] = $this->product->get_onsale_product();
		$data['featured'] = $this->product->get_featured_product();
		$data['all_product'] = $this->product->get_product();
		$data['best_seller'] = $this->product->get_best_seller_product();
		$data['b2c'] = $this->product->get_product_by_category(46);
		$data['b2bb2c'] = $this->product->get_product_by_category(48);
		$data['mindset'] = $this->product->get_product_by_category(49);
		$this->load->view('home-copy', $data);
	}
	public function tes()
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
		$aowk = $woocommerce->get('products', [
			'page' => 1,
			'per_page' => 10,
			'category' => '48'
		]);
		$cat = $woocommerce->get('products/categories');
		var_dump($aowk);
	}
}
