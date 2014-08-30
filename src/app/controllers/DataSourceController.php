<?php

class DataSourceController extends Controller {
	public function getList() {
		$datasources = DataSource::all();
		var_dump(Input::get("errors"));
		return View::make("datasource_list", array("datasources" => $datasources));
	}

	public function postCreate() {
		$data = array("name" => Input::get("name"),
					"username" => Input::get("username"),
					"connection_string" => Input::get("connection_string"),
					"password" => Input::get("password"));
		$validation_rules = array("name" => "required",
									"username" => "required",
									"password" => "required",
									"connection_string" => "required");

		$validator = Validator::make($data, $validation_rules);

		if ($validator->passes()) {
			// On enregistre les données
			$datasource = new DataSource($data);
			$datasource->save();
			return Redirect::action("DataSourceController@getList");
		} else {
			return Redirect::action("DataSourceController@getList")->with("errors", $validator->messages()->all());
		}
	}
}