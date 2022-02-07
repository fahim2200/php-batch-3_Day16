<?php


namespace App\classes;


class Pattern

{
    protected $length;
    protected $i;
    protected $j;
    public function  __construct($post = null)
    {
        $this->length = $post['input_length'];
    }
    public function index()
    {
        for  ($this->i = 1; $this->i <= $this->length; $this->i++)
        {
            for ($this->j = 1; $this->j <= (2 * $this->length)-1; $this->j++ )
            {
                if (($this->j >= $this->length - ($this->i -1)) && ($this->j <= $this->length + ($this->i-1)))
            }
            echo "*";
        } else {

    }
    }

}