@extends('layouts.app')

@section('content')

	
	<div class="container-fluid text-center"> 
      <div class="container">
		<div class="col-md-offset-2 col-md-8">
			<h2>Books inventory</h2></br>
			<hr>
			<div class="row" style="margin-top: 10px; margin-bottom: 10px">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th scope="col">id</th>
							<th scope="col">Autor</th>
							<th scope="col">Title</th>
							<th scope="col">Date</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
                            <th scope="col">View</th>
						</tr>
					</thead>
					<tbody>
						@foreach($storedBooks as $storedBook)
						<tr>
							<th scope="row">{{ $storedBook->id }}</th>
                            <td>{{ $storedBook->autor }}</td>
                            <td>{{ $storedBook->title }}</td>
                            <td>{{ $storedBook->created_at }}</td>
                            <td><a href="{{ route('books.edit',['books'=>$storedBook->id]) }}" class="btn btn-success">Edit</td>
                            <td><form action="{{route('books.destroy',['books'=>$storedBook->id])}}" method="POST">
                            	{{ csrf_field() }}
                            	<input type="hidden" name="_method" value="delete">
                            	<input type="submit" class="btn btn-danger" value="delete">
                            	
                            </form></td>
                            <td><a href="{{ route('orders.show',['books'=>$storedBook->id]) }}" class="btn btn-primary" > Buy</td>
						</tr>
						@endforeach
					</tbody>
					
				</table>
				

			</div>
			

		</div>

	</div>
   
	
	
	<div class="row">
		{{ $storedBooks->links() }}
	</div>
</div>


	@endsection

