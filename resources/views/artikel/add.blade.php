@extends('app')

@section('header')

    <title>Laravel &raquo; Artikel &raquo; Add</title>

@endsection

@section('content')
	<div class="row">
		<form class="col s12" method="POST" action="{{url('artikel/save')}}">
			<div class="input-field col s12">
				<input id="title" type="text" class="validate" name="title"></input>
				<label for="title">Title</label>
			</div>
			<div class="input-field col s12">
				<textarea id="contents" type="text" class="materialize-textarea" name="contents"></textarea>
				<label for="contents">Contents</label>
			</div>
			<div class="right">
				<button type="submit" class="btn">Save</button>
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}"></input>
		</form>
	</div>
@endsection