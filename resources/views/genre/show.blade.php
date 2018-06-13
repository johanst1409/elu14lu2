@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h1 class="card-title h1">{{$genre->name}}</h1>
					</div>
					<div class="card-body">
					@foreach($genre->games as $game)
						<a href="{{ route('games.show', $game->url_name) }}" class="btn btn-secondary">{{$game->name}}</a>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection