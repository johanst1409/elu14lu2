@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<form method="post" action="{{ $platform->id ? route('platforms.update', $platform->url_name) : route('platforms.store') }}" class="row">
	    					{{ csrf_field() }}
							@if ($platform->id)
								{{ method_field('PUT') }}
							@endif
							<div class="col-md-4">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" value="{{ old('name', $platform->name) }}" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="manufacturer_id">Manufacturer</label>
									<select class="form-control" name="manufacturer_id" id="manufacturer_id">
										@foreach($manufacturers as $manufacturer)
											<option value="{{$manufacturer->id}}" {{ old('manufacturer_id', $platform->manufacturer_id) == $manufacturer->id ? 'selected': '' }}>{{$manufacturer->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="released_at">Release date</label>
									<input type="date" class="form-control" name="released_at" id="released_at" value="{{ old('released_at', $platform->released_at->format('Y-m-d')) }}" />
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection