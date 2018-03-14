@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pasien
			  	<div class="panel-title pull-right"><a href="{{ route('pasien.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="Nama" class="form-control" value="{{ $psn->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nip</label>
						<input type="text" name="nip" class="form-control" value="{{ $psn->nip }}"  readonly>
			  		</div>
			  			</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection