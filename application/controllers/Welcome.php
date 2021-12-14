<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Automattic\WooCommerce\Client;

class Welcome extends CI_Controller
{

	public function index()
	{

		/* Data Yang Perlu Di ambil
		- Kategori
		- Semua Kelas
		- Kelas Best Seller
		- Kelas Per Kategori
		*/


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
		$data['all_product'] = $woocommerce->get('products', [
			'page' => 1,
			'per_page' => 10
		]);

		$data['b2b'] = $woocommerce->get('products', [
			'page' => 1,
			'per_page' => 10,
			'category' => '48'
		]);

		$data['sales_mindset'] = $woocommerce->get('products', [
			'page' => 1,
			'per_page' => 10,
			'category' => '49'

		]);
		// Produk Terlaris
		$data['best_seller'] = $woocommerce->get('products', [
			'page' => 1,
			'orderby' => 'popularity',
			'per_page' => 5

		]);

		$this->load->view('home',$data);
	}
	public function tes(){
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
		var_dump($aowk);
	}
}
