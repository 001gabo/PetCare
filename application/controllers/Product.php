<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function create(){

		echo "create Method";
	}

	public function read(){

		echo "Read Method";
	}

	public function delete($value=''){

		echo $value;
	}

	public function update($value=''){

		echo $this->uri->segment(1)."<br>";

		echo $this->uri->segment(3);
	}


}