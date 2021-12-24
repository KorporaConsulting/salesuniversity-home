<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model', 'product');
    }

    public function index()
    {
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $start = $time;

        $data['onsale'] = $this->product->get_onsale_product();
        $data['featured'] = $this->product->get_featured_product();
        $data['all_product'] = $this->product->get_product();
        $data['best_seller'] = $this->product->get_best_seller_product();
        $data['b2c'] = $this->product->get_product_by_category(46);
        $data['b2bb2c'] = $this->product->get_product_by_category(48);
        $data['mindset'] = $this->product->get_product_by_category(49);

        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $finish = $time;
        $total_time = round(($finish - $start), 4);
        echo 'Page generated in ' . $total_time . ' seconds.';
    }

    public function featured()
    {
        $result = $this->product->get_featured_product();
        var_dump($result);
        $this->load->view('welcome_message');
    }

    public function bestseller()
    {
        $result = $this->product->get_best_seller_product([5]);
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

    public function onsale()
    {
        $result = $this->product->get_onsale_product();
        var_dump($result);
    }
}
