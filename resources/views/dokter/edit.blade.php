@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Dokter 
			  	<div class="panel-title pull-right"><a href="{{ route('dokter.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('dokter.update',$a->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Dokter</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}" required>
			  			@if ($errors->has('Nama Dokter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama Dokter') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('profesi') ? ' has-error' : '' }}">
			  			<label class="control-label">Profesi</label>	
			  			<input type="text" value="{{ $a->profesi }}" name="profesi" class="form-control"  required>
			  			@if ($errors->has('Profesi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Profesi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status</label>	
			  			<input type="text" value="{{ $a->status }}" name="status" class="form-control"  required>
			  			@if ($errors->has('Status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Status') }}</strong>
                            </span>
                        @endif
			  		
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection