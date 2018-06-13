@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<form method="post" action="{{ $game->id ? route('games.update', $game->url_name) : route('games.store') }}" class="row">
	    					{{ csrf_field() }}
							@if ($game->id)
								{{ method_field('PUT') }}
							@endif
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" value="{{ old('name', $game->name) }}" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="description">Description</label>
									<textarea type="text" class="form-control" name="description" id="description" rows="6">{{ old('description', $game->description) }}</textarea>
								</div>
								<div class="form-group">
									<label for="rating">Rating</label>
									<input type="number" class="form-control" name="rating" id="rating" min="0" max="100" step="5" value="{{ old('rating', $game->rating) }}">
								</div>
								<div class="form-group">
									<label for="developer_id">Developer</label>
									<select class="form-control" name="developer_id" id="developer_id">
										@foreach($developers as $developer)
											<option value="{{$developer->id}}" {{ old('developer_id', $game->developer_id) == $developer->id ? 'selected' : '' }}>{{$developer->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="publisher_id">Publisher</label>
									<select class="form-control" name="publisher_id" id="publisher_id">
										@foreach($publishers as $publisher)
											<option value="{{$publisher->id}}" {{ old('publisher_id', $game->publisher_id) == $publisher->id ? 'selected' : '' }}>{{$publisher->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="released_at">Release date</label>
									<input type="date" class="form-control" name="released_at" id="released_at" min="1900-01-01" max="9999-12-31" format="Y-m-d" value="{{ old('released_at', $game->released_at->format('Y-m-d')) }}" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									@foreach($platforms as $platform)
										<div class="form-check form-check">
											  <input class="form-check-input" type="checkbox" name="platforms[]" id="{{$platform->url_name}}" value="{{$platform->id}}" {{ $game->platforms->contains($platform->id) ? 'checked' : '' }}>
											  <label class="form-check-label" for="{{$platform->url_name}}">{{$platform->name}}</label>
										</div>
									@endforeach
								</div>
								<div class="form-group">
									@foreach($genres as $genre)
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="genres[]" id="genre{{$genre->id}}" value="{{$genre->id}}" {{ $game->genres->contains($genre->id) ? 'checked' : '' }}>
											  <label class="form-check-label" for="genre{{$genre->id}}">{{$genre->name}}</label>
										</div>
									@endforeach
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" name="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection