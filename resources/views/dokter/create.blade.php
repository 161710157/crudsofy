@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Post 
			  	<div class="panel-title pull-right"><a href="{{ route('dokter.create') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('dokter.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Dokter</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('Nama Dokter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama Dokter') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('profesi') ? ' has-error' : '' }}">
			  			<label class="control-label">Profesi</label>	
			  			<input type="text" name="profesi" class="form-control"  required>
			  			@if ($errors->has('profesi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('profesi') }}</strong>
                            </span>
                        @endif

			  		</div>
			  		<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status</label>	
			  			<input type="text" name="status" class="form-control"  required>
			  			@if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
			  		
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