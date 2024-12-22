<?php

namespace app\controller;

use app\core\View;
use app\database\models\Product;

class ProductController extends View
{
    public function index()
    {
        $productsModel = new Product;
        $products = $productsModel->simpleQuery("SELECT * FROM products");

        $this->view('products/index', ['products' => $products]);
    }

    public function create()
    {
        $this->view('products/create');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') die('404 not found');

        $productModel = new Product;
        $product = $productModel->paramQuery('INSERT INTO products(name, description, price) VALUES(:name, :description, :price)', $_POST);
    }

    public function show($params)
    {
        $idProduct = $params[0];
        $productModel = new Product;
        $product = $productModel->findById('SELECT * FROM products WHERE id = :id', [':id' => $idProduct]);

        $this->view('products/show', ['product' => $product]);
    }

    public function destroy($params)
    {
        $idProduct = $params[0];
        $productModel = new Product;
        $product = $productModel->paramQuery('DELETE FROM products WHERE id = :id', [':id' => $idProduct]);
        
        $this->view('products/destroy');
    }

    public function edit($params)
    {
        $idProduct = $params[0];
        $productModel = new Product;
        $product = $productModel->findById('SELECT * FROM products WHERE id = :id', [':id' => $idProduct]);
    }

    public function update($params)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $idProduct = $params[0];
            $campos = [
                ':name' => $name,
                ':description' => $description,
                ':price' => $price,
                ':id' => $idProduct,
            ];
            $productModel = new Product;
            $product = $productModel->paramQuery('UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id', $campos);
        endif;
        die('404 not found');
    }
}