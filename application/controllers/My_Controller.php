<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public $template = null;

    public function __construct()
    {
        if(is_null($this->template)){
            $this->template = 'template';
        }
    }

}
