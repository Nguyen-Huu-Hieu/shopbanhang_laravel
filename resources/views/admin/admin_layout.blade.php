@extends('layout.master')
@section('admin_layout')
<span class="username">
	@php
		$name = Session::get('admin_name');
		if ($name) {
			echo 'Xin chào ' . $name;
		}
	@endphp

</span>
@endsection