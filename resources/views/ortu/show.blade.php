@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Orang Tua 
			  	<div class="panel-title pull-right"><a href="{{ route('ortu.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Orang Tua</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $ortu->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Pasien</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $ortu->Pasien->nama }}"  readonly>

			  			<div class="form-group">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control" value="{{ $ortu->umur }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection