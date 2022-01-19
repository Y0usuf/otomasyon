<?php

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = 'layouts/product_v';
	}

	public function index()
	{
		$viewData = new stdClass;
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = 'show';
		$viewData->data = [
			'title' => 'Ürünler'
		];

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
}
