@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/bahan') }}">bahan Jaket</a></li>
				<li class="active">Tambah bahan jaket</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah jaket</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('bahan.store'), 'method'=>'post', 'class'=>'form-horizontal']) !!}
					@include('bahan._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection