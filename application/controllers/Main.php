<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('view_formulario');
	}

	public function submit()
	{	
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";

		/* echo 	"<div class='alert alert-success alert-dismissible fade show' role='alert'>
					$_POST[nome]
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</div>";
		for ($i=0; $i < 3; $i++) { 
			echo 	"<div class='alert alert-success alert-dismissible fade show' role='alert'>
					$_POST[nome] $i
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</div>";
		} */
	}

}
