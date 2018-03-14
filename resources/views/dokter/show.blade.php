@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Dokter 
			  	<div class="panel-title pull-right"><a href="{{ route('dokter.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Dokter</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Profesi</label>	
			  			<input type="text" name="profesi" class="form-control" value="{{ $a->profesi}}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Status</label>	
			  			<input type="text" name="status" class="form-control" value="{{ $a->status }}"  readonly>
			  			 
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection