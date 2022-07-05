<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('product/index', $data);
    }

    public function create()
    {
        return view('product/create');
    }

    public function save()
    {
        helper(['form', 'url']);

        // $validate = $this->validate([
        //     'product_id' => 'required',
        //     'product_name' => 'required',
        //     'product_category' => 'required',
        //     'product_origin' => 'required',
        //     'product_description' => 'required',
        //     'quantity' => 'required',
        //     'price' => 'required',
        //     'status' => 'required',
        // ]);
        $inputs = $this->validate([
            'product_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The product id field is required.',
                ]
            ],
            'product_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The product name field is required.',
                ]
            ],
            'product_category' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The product category field is required.',
                ]
            ],
            'product_origin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The product origin field is required.',
                ]
            ],
            'product_description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The description field is required.',
                ]
            ],
            'quantity' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The quantity field is required.',
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The price field is required.',
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The status field is required.',
                ]
            ],
        ]);
        $product = new ProductModel();

        if (!$inputs) {
            echo view('product/create', [
                'validation' => $this->validator
            ]);
        } else {
            $data = [
                'product_id'            => $this->request->getVar('product_id'),
                'product_name'          => $this->request->getVar('product_name'),
                'product_category'      => $this->request->getVar('product_category'),
                'product_origin'        => $this->request->getVar('product_origin'),
                'product_description'   => $this->request->getVar('product_description'),
                'quantity'              => $this->request->getVar('quantity'),
                'price'                 => $this->request->getVar('price'),
                'status'                => $this->request->getVar('status'),
            ];
            $product->insert($data);
            $session = \Config\Services::session();
            $session->setFlashdata('message-succes', 'Sata saved successfully');
            return $this->response->redirect(site_url('/'));
        }
    }
}
