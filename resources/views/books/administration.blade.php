@extends('layouts.app')

@section('content')


<div class="container-fluid text-center"> 
      <div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row" style="margin-top: 10px; margin-bottom: 10px">
			<a href="{{route('books.index')}}">	<input type="submit"  class="btn btn-primary" name="books" value="Books"></a>
			<a href="{{route('users.index')}}">	<input type="submit" class="btn btn-primary" name="users" value="Users"></a>
			<a href="">	<input type="submit" class="btn btn-primary" name="order" value="Orders"></a>
			</div>
		</div>
	</div>			
</div>
@endsection
