@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h1 class="card-title">Companies</h1>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th class="text-center">Developer</th>
									<th class="text-center">Publisher</th>
									<th class="text-center">Manufacturer</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($companies as $company)
									<tr>
										<td><a href="{{ route('companies.show', $company->url_name) }}">{{$company->name}}</a></td>
										<td class="text-center"><i class="material-icons">{{ $company->is_developer ? 'check' : 'clear'}}</i></td>
										<td class="text-center"><i class="material-icons">{{ $company->is_publisher ? 'check' : 'clear'}}</i></td>
										<td class="text-center"><i class="material-icons">{{ $company->is_manufacturer ? 'check' : 'clear'}}</i></td>
										<td>
											<a href="{{ route('companies.edit', $company->url_name) }}" class="btn btn-sm btn-secondary"><i class="material-icons">edit</i></a>
										</td>
										<td>
											<form method="POST" action="{{ route('companies.destroy', $company->url_name) }}">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i></button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="card-footer">
						<a href="{{ route('companies.create') }}" class="btn btn-primary">Create</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection