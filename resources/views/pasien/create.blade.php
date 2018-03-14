@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Pasien 
			  	<div class="panel-title pull-right"><a href="{{ route('pasien.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pasien.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nip') ? ' has-error' : '' }}">
			  			<label class="control-label">NIP</label>	
			  			<input type="text" name="nip" class="form-control"  required>
			  			@if ($errors->has('nip'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nip') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('dokter_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Dokter</label>	
			  			<select name="dokter_id" class="form-control">
			  				@foreach($dokter as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('dokter_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dokter_id') }}</strong>
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