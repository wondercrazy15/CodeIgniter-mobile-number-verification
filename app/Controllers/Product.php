<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Product_model;

class Product extends Controller{
    public function index()
    {
        $model = new Product_model();
        $data['product1'] = $model-> getProduct();
        // echo "<pre>"; print_r($data['product']);
        echo view('product_view',$data);
    }

    public function add_new()
    {
        echo view('add_product_view');
    }

    public function save()
    {
        $model = new Product_model();
        $data = array(
            'product_name'=> $this->request->getPost('product_name'),
            'product_price'=> $this->request->getPost('product_price'),
        );
        
        $model->saveProduct($data);
        // echo "4444 <pre>";print_r($data);
        // die;
        return redirect()->to('/product');
    }

}