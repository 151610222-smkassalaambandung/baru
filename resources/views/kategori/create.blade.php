@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
	
				<li class="active">Tambah kategori</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah kategori</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('kategori.store'), 'method'=>'post', 'class'=>'form-horizontal']) !!}
					@include('kategori._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection