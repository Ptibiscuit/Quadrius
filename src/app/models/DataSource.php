<?php

class DataSource extends Eloquent {
	protected $table = "datasources";
	public $timestamps = false;
	protected $fillable = array("name", "username", "connection_string", "password");


	/**
	 * Relationships
	 */

	public function datalists() {
		return $this->hasMany("DataList", "datasource_id");
	}
}