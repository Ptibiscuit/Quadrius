@extends("template")

@section("content")
	Listage des sources de données:<br />
	@foreach($datasources as $datasource)
		<div>
			{{{ $datasource.name }}}
		</div>
	@stop

@stop