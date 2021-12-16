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


    public function all()
    {
        $result = $this->product->get_product();
        var_dump($result);
    }

    public function by_category()
    {
        $result = $this->product->get_product();
        var_dump($result);
    }

    public function best_seller()
    {
        $result = $this->product->get_product();
        var_dump($result);
    }
}
