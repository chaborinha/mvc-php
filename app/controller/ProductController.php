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
        $product = $productModel->deleteQuery('DELETE FROM products WHERE id = :id', [':id' => $idProduct]);
        
        $this->view('products/destroy');
    }

    public function edit($params)
    {
        $idProduct = $params[0];
        var_dump($idProduct);
        $productModel = new Product;
        $product = $productModel->findById('SELECT * FROM products WHERE id = :id', [':id' => $idProduct]);

        $this->view('products/edit', ['product' => $product]);
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
            $product = $productModel->updateQuery('UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id', $campos);
        endif;
        die('404 not found');
    }
}