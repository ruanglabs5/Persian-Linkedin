<?php

/**
 * Created : 01/11/2018
 * Author : A.shokri
 * Mail : amirsh.nll@gmail.com
 
 */

class Country_model extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }
    
}

?>