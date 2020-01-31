@extends('layouts.master')

@section('content')
		<h1>Detail Data Pegawai</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">

			        <form action="/pegawai/{{$pegawai->id}}/update" method="POST">
		        		{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Depan</label>
					    <input name="nama_depan" disabled="disabled" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama depan" value="{{$pegawai->nama_depan}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Belakang</label>
					    <input name="nama_belakang" disabled="disabled" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama belakang" value="{{$pegawai->nama_belakang}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
					    <select name="jenis_kelamin" disabled="disabled" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" @if($pegawai->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
					      <option value="P" @if($pegawai->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" disabled="disabled" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama" value="{{$pegawai->agama}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" disabled="disabled" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pegawai->alamat}}</textarea>
					</div>
			        </form>
			    	</div>
			      </div>
			  	</div>
				</div>
</table>
@endsection