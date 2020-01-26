@extends('layouts.zero_base')

@section('content')
	<div id="tasks"></div>
	{{ auth()->check() }}
@endsection