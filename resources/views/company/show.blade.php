@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title h1">{{$company->name}}</h1>
					</div>
				</div>

				@if($company->is_developer)
				<div class="card mt-4">
					<div class="card-header">
						<h3 class="card-title h2">{{ $company->developed->count() }} Developed games</h3>
					</div>
					<div class="card-body">
					@foreach($company->developed as $game)
						<a href="{{ route('games.show', $game->url_name) }}" class="btn btn-outline-dark">{{$game->name}}</a>
					@endforeach
					</div>
				</div>
				@endif

				@if($company->is_publisher)
				<div class="card mt-4">
					<div class="card-header">
						<h3 class="card-title h2">{{ $company->published->count() }} Publised games</h3>
					</div>
					<div class="card-body">
					@foreach($company->published as $game)
						<a href="{{ route('games.show', $game->url_name) }}" class="btn btn-outline-dark">{{$game->name}}</a>
					@endforeach
					</div>
				</div>
				@endif

				@if($company->is_manufacturer)
				<div class="card mt-4">
					<div class="card-header">
						<h3 class="card-title h2">{{ $company->manufactured->count() }} Manufactured platforms</h3>
					</div>
					<div class="card-body">
					@foreach($company->manufactured as $platform)
						<a href="{{ route('platforms.show', $platform->url_name) }}" class="btn btn-outline-dark">{{$platform->name}}</a>
					@endforeach
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
@endsection