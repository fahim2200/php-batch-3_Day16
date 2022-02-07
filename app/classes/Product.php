<?php


namespace App\classes;


class Product
{
    protected $products = [];
    public function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'T-Shirt',
                'catagory'  => 'Man Fashion',
                'brand'      => 'Yellow',
                'price' => '3350',
                'description' => 'M-Size',
                'image'       => 'ts.jpg'

            ] ,

            1 => [
                'id' => 2,
                'name' => 'T-Shirt',
                'catagory'  => 'Man Fashion',
                'brand'      => 'Yellow',
                'price' => '3350',
                'description' => 'L-Size',
                'image'       => 'ts1.jpg'
            ],
            2 => [
                'id' => 3,
                'name' => 'Shirt',
                'catagory'  => 'Man Fashion',
                'brand'      => 'Yellow',
                'price' => '3050',
                'description' => 'XL-Size',
                'image'       => 'shirt.jpg'
            ],

        ];
    }
    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id){
                return $product;
            }
        }
    }


}