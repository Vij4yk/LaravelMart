@extends('admin.admin')

@section('Title','Create')

@section('content')
<div class="row space-top">

	<h1 class="desktop-3"> Create {!! ucfirst( str_singular($table) ) !!} </h1>
	<div class="desktop-9">
         <a class="button button-inverse" style="margin-top: 10px" href="{!! route('admin.index',[$table]) !!}">Back to {!! ucfirst($table) !!}</a>
    </div>
 </div>     
<div class="row space-top">	

    @include('common.errors')

    {!! Form::open(['url' => $url, 'class' => 'space-bottom']) !!}

        @include('admin.products.fields')

    {!! Form::close() !!}
</div>

<script>
$( document ).ready(function() {
	$("select").selectize();
	    //console.log( "ready!" );
});
</script>
@endsection
