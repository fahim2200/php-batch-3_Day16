<?php


namespace App\classes;


class FileUpload
{   protected $image;
    public function __construct($post = null)
    {
        $this->image = $post ['image'];
    }
    public function index()
    {
        echo '<pre>';
        
    }
}