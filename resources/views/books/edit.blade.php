@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<h1>book list</h1>
			</div>
			<div class="row">
				<form action="{{ route('books.update',[$bookUnderEdit->id]) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

					<div class="form-group">
						<input type="text" class="form-control" name='updteAutor' placeholder="{{$bookUnderEdit->autor}}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updateTitle" placeholder="{{$bookUnderEdit->title}}">
					</div>


					<div class="col-md-3">
						<input type="submit" class="btn btn-primary" value="Update Book">
					</div>
				</form>
			</div>

		</div>

	</div>

@endsection