<?php

/**
 * Created by PhpStorm.
 * User: thanhdo
 * Date: 10/12/16
 * Time: 12:26 AM
 */
class Homepage extends CI_Controller
{
    public function home_page(){
        $this->load->view('frontend/home_page');
    }
}