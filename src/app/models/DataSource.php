<?php

class DataSource extends Eloquent {
	protected $table = "datasources";


	/**
	 * Relationships
	 */

	public function datalists() {
		return $this->hasMany("DataList", "datasource_id");
	}
}