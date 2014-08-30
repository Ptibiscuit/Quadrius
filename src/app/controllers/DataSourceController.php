<?php

class DataSourceController extends Controller {
	public function getList() {
		$datasources = DataSource::all();

		return View::make("datasource_list", array("datasources" => $datasources));
	}
}