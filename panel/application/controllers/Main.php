<?php

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = 'layouts/main_v';
		$this->pageTitle = 'Ana sayfa';
	}

	public function index()
	{
		$viewData = new stdClass;
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = 'show';
		$viewData->pageTitle = $this->pageTitle;

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
}
