<div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
	{!! Form::label('foto','Foto',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('foto') !!} <br>
		@if(isset($book) && $book->foto)
		<p>
			{!! Html::image(asset('img/'.$book->foto),null,['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('harga') ? 'has-error' : '' }}">
	{!! Form::label('harga','harga',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('harga',null,['class'=>'form-control']) !!}
		{!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('bahanjakets_id') ? 'has-error' : '' }}">
	{!! Form::label('bahanjakets_id','bahan jaket',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('bahanjakets_id',App\bahanjaket::pluck('bahan_jaket','id')->all(),null,['class'=>'js-selectize','placeholder'=>'Pilih bahan jaket']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>