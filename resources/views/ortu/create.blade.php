@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Orang Tua 
			  	<div class="panel-title pull-right"><a href="{{ route('ortu.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('ortu.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Orang Tua</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
                   <div class="form-group {{ $errors->has('umur') ? ' has-error' : '' }}">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control"  required>
			  			@if ($errors->has('umur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('umur') }}</strong>
                            </span>
                        @endif
			  		</div>
                          
			  		
			  		<div class="form-group {{ $errors->has('pasien_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pasien</label>	
			  			<select name="pasien_id" class="form-control">
			  				@foreach($psn as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pasien_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pasien_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection