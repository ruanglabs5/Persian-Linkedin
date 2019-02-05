<?php

/**
 * Created : 01/11/2018
 * Author : A.shokri
 * Mail : amirsh.nll@gmail.com
 
 */

class Person_model extends CI_Model {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }

    public function insert($user_id, $firstname, $lastname, $country_id, $city_id, $zip_code, $birthday, $biography)
    {
    	if(empty($user_id) || empty($firstname) || empty($lastname))
    		return false;

    	$data = array(
    		'user_id'	=>	$user_id,
    		'firstname'	=>	$firstname,
    		'lastname'	=>	$lastname,
    		'country_id'=>	$country_id,
    		'city_id'	=>	$city_id,
    		'zip_code'	=>	$zip_code,
    		'birthday'	=>	$birthday,
    		'biography'	=>	$biography,
    	);
    	
    	if($this->db->insert('person', $data))
    		return true;
    	else
    		return false;
    }
    
}

?>