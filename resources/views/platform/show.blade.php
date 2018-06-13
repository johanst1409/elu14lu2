@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h1 class="card-title h1">{{$platform->name}}</h1>
						<h2 class="h3">
							{{$platform->manufacturer->name}}
							<small class="text-muted">
								{{$platform->released_at->format('d-M-Y')}}
							</small>
						</h2>
					</div>
					<div class="card-body">
					@foreach($platform->games as $game)
						<a href="{{ route('games.show', $game->url_name) }}" class="btn btn-outline-dark">{{$game->name}}</a>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection