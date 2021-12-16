<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Automattic\WooCommerce\Client;

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model', 'product');
    }

    public function index()
    {
        $result = $this->product->get_product();
        var_dump($result);
        $this->load->view('welcome_message');
    }

    public function featured()
    {
        $result = $this->product->get_featured_product();
        var_dump($result);
        $this->load->view('welcome_message');
    }

    public function bestseller()
    {
        $result = $this->product->get_best_seller_product();
        var_dump($result);
        $this->load->view('welcome_message');
    }

    public function by_category()
    {
        $result['b2c'] = $this->product->get_product_by_category(46);
        $result['tanpa kategori'] = $this->product->get_product_by_category(15);
        // $result['B2B'] = $this->product->get_product_by_category(47);
        $result['B2B B2C'] = $this->product->get_product_by_category(48);
        $result['Sales Mindset'] = $this->product->get_product_by_category(49);
        $result['B2B || B2C || Sales Mindset'] = $this->product->get_product_by_category(50);
        var_dump($result);
    }
}
