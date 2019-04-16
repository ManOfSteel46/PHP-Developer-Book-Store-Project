@extends('layouts.app')

@section('content')
	
	<div class="container-fluid text-center"> 
      <div class="container">
		<div class="col-md-offset-2 col-md-8">
			
			<div class="row" style="margin-top: 10px; margin-bottom: 10px">

                <ul class="list-group">
                	
                	<li class="list-group-item">{{ $thisBook->id }}</li>
                	<li class="list-group-item">{{ $thisBook->autor }}</li>
                	<li class="list-group-item">{{ $thisBook->title }}</li>

                	
                </ul>
                
                <form action="{{ route('orders.store',['books' =>$thisBook->id]) }}" method="POST">
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-primary">Buy</button>
                	<input type="hidden" name="bookId" value="{{ $thisBook->id }}">
                </form>
                	

			</div>
		</div>
	</div>
</div>				


@endsection
