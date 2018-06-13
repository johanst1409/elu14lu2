@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h1 class="card-title">Games</h1>
					</div>
					<ul class="list-group list-group-flush">
						@foreach($games as $game)
							<li class="list-group-item">
								<div class="row">
									<div class="col-md-1 text-center badge badge-{{$game->rating_class}}">
										<span class="h4">{{$game->rating}}</span>
									</div>
									<div class="col-md-7">
										<a href="{{ route('games.show', $game->url_name) }}" class="h4">
											{{$game->name}}
											<small class="text-muted">{{$game->released_at->format('Y')}}</small>
										</a>
									</div>
									<div class="col-md-2 text-right">
										Developer: 
										<a href="{{ route('companies.show', $game->developer->url_name) }}">{{$game->developer->name}}</a>
									</div>
									<div class="col-md-2 text-right">
										Publisher: 
										<a href="{{ route('companies.show', $game->publisher->url_name) }}">{{$game->publisher->name}}</a>
									</div>
								</div>
							</li>
						@endforeach
					</ul>
					<div class="card-footer">
						<a href="{{ route('games.create') }}" class="btn btn-primary">Add Game</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection