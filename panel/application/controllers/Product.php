<?php

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->viewFolder = 'layouts/product_v';
		$this->pageTitle = 'Ürünler';
	}

	public function index()
	{
		$viewData = new stdClass;
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = 'show';
		$viewData->pageTitle = $this->pageTitle;
		$viewData->items = $this->product_model->get_all();

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
}
