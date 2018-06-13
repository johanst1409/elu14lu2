@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<form method="post" action="{{ $company->id ? route('companies.update', $company->url_name) : route('companies.store') }}" class="row">
	    					{{ csrf_field() }}
							@if ($company->id)
								{{ method_field('PUT') }}
							@endif
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" value="{{ old('name', $company->name) }}" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="form-check">
										<input type="hidden" name="is_developer" value="0" />
										<input class="form-check-input" type="checkbox" name="is_developer" id="is_developer" value="1" {{ old('is_developer', $company->is_developer) ? 'checked': '' }} />
										<label for="is_developer">Developer</label>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="form-check">
										<input type="hidden" name="is_publisher" value="0" />
										<input class="form-check-input" type="checkbox" name="is_publisher" id="is_publisher" value="1" {{ old('is_publisher', $company->is_publisher) ? 'checked': '' }} />
										<label for="is_publisher">Publisher</label>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="form-check">
										<input type="hidden" name="is_manufacturer" value="0" />
										<input class="form-check-input" type="checkbox" name="is_manufacturer" id="is_manufacturer" value="1" {{ old('is_manufacturer', $company->is_manufacturer) ? 'checked': '' }} />
										<label for="is_manufacturer">Manufacturer</label>
									</div>
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