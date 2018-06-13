@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-10">
								<h1 class="card-title h1">
									{{$game->name}}
									<small class="text-muted">
										{{$game->released_at->format('d-F-Y')}}
									</small>
								</h1>
							</div>
							<div class="col-md-2 text-right">
								<span class="badge badge-{{$game->rating_class}}">
									<span class="h4">{{$game->rating}}</span>
								</span>
							</div>
						</div>
						<div>
							Developer: 
							<a href="{{ route('companies.show', $game->developer->url_name) }}">{{$game->developer->name}}</a>
						</div>
						<div>
							Publisher: 
							<a href="{{ route('companies.show', $game->publisher->url_name) }}">{{$game->publisher->name}}</a>
						</div>
					</div>
					<div class="card-body">
						<p>{{$game->description}}</p>
					</div>
					<div class="card-footer">
						<a href="{{ route('games.edit', $game->url_name) }}" class="btn btn-primary">Edit</a>
						<form method="POST" class="float-right" action="{{ route('games.destroy', $game->url_name) }}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<span class="card-title">Platforms</span>
					</div>
					<div class="card-body">
						@foreach($game->platforms as $platform)
							<a class="btn btn-outline-dark btn-sm mb-1" href="{{route('platforms.show', $platform->url_name)}}">{{$platform->name}}</a>
						@endforeach
					</div>
				</div>
				<div class="card mt-4">
					<div class="card-header">
						<span class="card-title">Genres</span>
					</div>
					<div class="card-body">
						@foreach($game->genres as $genre)
							<a class="btn btn-outline-dark btn-sm mb-1" href="{{route('genres.show', $genre->id)}}">{{$genre->name}}</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection