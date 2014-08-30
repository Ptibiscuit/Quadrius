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


	<div>
		@if (Session::has("errors"))
			@foreach (Session::get("errors") as $error)
				<div style="color: red;">
					{{{ $error }}}
				</div>
			@endforeach
		@endif
		Création d'une source:
		<form method="post" action="{{{ action('DataSourceController@postCreate') }}}">
			Nom: <input name="name" /><br />
			Connection String: <input name="connection_string" /><br />
			Username: <input name="username" /><br />
			Password: <input name="password" type="password" /><br />
			<button>Create</button>
		</form>
	</div>
@stop