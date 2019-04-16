@extends('layouts.app')

@section('content')

	
	<div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<h1>book list</h1>
			</div>
			<div class="row">
				<form action="{{ route('books.store') }}" method="POST">
                    {{ csrf_field() }}

					<div class="form-group">
						<input type="text" class="form-control" name='newAutor' placeholder="autor">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="newTitle" placeholder="title">
					</div>


					<div class="col-md-3">
						<input type="submit" class="btn btn-primary" value="Add Book">
					</div>
				</form>
			</div>

		</div>

	</div>

@endsection