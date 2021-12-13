<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Automattic\WooCommerce\Client;

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
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
