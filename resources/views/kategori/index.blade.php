@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active"> kategori</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title"> kategori</h2>
				</div>
				<div class="panel-body">
					<p> <a class="btn btn-primary" href="{{route('kategori.create')}}">Tambah</a></p>
						{!! $html->table(['class'=>'table-striped'])!!}							</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
{!! $html->scripts()!!}
@endsection