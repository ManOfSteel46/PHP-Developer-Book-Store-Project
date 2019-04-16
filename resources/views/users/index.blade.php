@extends('layouts.app')

@section('content')

	
	<div class="container-fluid text-center"> 
      <div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row" style="margin-top: 10px; margin-bottom: 10px">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th scope="col">id</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Created at</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
                            <th scope="col">View</th>
						</tr>
					</thead>
					<tbody>
						@foreach($storedUsers as $storedUser)
						<tr>
							<th scope="row">{{ $storedUser->id }}</th>
                            <td>{{ $storedUser->name }}</td>
                            <td>{{ $storedUser->email }}</td>
                            <td>{{ $storedUser->created_at }}</td>
                            <td><a href="{{ route('users.edit',['users'=>$storedUser->id]) }}" class="btn btn-success">Edit</td>
                            <td><a href=""><input type="submit" class="btn btn-danger" value="Delete" name=""></a></td>
                            <td><input type="submit" class="btn btn-primary" value="view"></td>
						</tr>
						@endforeach
					</tbody>
					
				</table>
				

			</div>
			

		</div>

	</div>
   
	
	
	<div class="row">
		{{ $storedUsers->links() }}
	</div>
</div>


	@endsection
