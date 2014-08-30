@extends("template")

@section("content")
	Listage des sources de données:<br />
	@if (count($datasources) > 0)
		@foreach ($datasources as $datasource)
			<div>
				{{{ $datasource.name }}}
			</div>
		@endforeach
	@else
		Aucune source de données
	@endif

@stop