@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h1 class="card-title">Platforms</h1>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Manufacturer</th>
									<th>Release date</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($platforms as $platform)
									<tr>
										<td><a href="{{ route('platforms.show', $platform->url_name) }}">{{$platform->name}}</a></td>
										<td><a href="{{ route('companies.show', $platform->manufacturer->url_name) }}">{{$platform->manufacturer->name}}</a></td>
										<td>{{$platform->released_at->format('d-M-Y')}}</td>
										<td>
											<a href="{{ route('platforms.edit', $platform->url_name) }}" class="btn btn-secondary"><i class="material-icons">edit</i></a>
										</td>
										<td>
											<form method="POST" action="{{ route('platforms.destroy', $platform->url_name) }}">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-danger"><i class="material-icons">delete</i></button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="card-footer">
						<a href="{{ route('platforms.create') }}" class="btn btn-primary">Create</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection