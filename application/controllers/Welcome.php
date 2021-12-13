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
			]
		);;

		$products = $woocommerce->get('products', [
			'page' => 1,
			'orderby' => 'popularity'
		]);

		echo count($products);
		foreach ($products as $data) {
			var_dump($data->name);
		}

		$categories = $woocommerce->get('products/categories');
		foreach ($categories as $data) {
			var_dump($data->name);
		}
	}
}
