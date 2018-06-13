@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h1 class="card-title">Genres</h1>
					</div>
					<div class="card-body">
						@foreach($genres as $genre)
							<a href="{{ route('genres.show', $genre->id) }}" class="btn btn-outline-dark mb-1">{{$genre->name}}</a>
						@endforeach
					</div>
					<div class="card-footer">
						<form method="post" action="{{ route('genres.store') }}" class="row form-inline">
		    				{{ csrf_field() }}
		    				<div class="col-md-6">
		    					<div class="form-group">
		    						<label class="mr-2" for="name">Name: </label>
		    						<div class="input-group">
		    							<input type="text" class="form-control" name="name" id="name" />
		    							<div class="input-group-append">
		    								<button type="submit" name="submit" class="btn btn-primary">Add genre</button>

		    							</div>
		    						</div>
		    					</div>
		    				</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection