@extends('index')
@section('judul')
  Tambah Barang
@stop

@section('section')
@if (Session::has('message'))
    <script>
        alert("{!!Session::get('message')!!}");
      </script>
@endif
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dataBarang">Data Barang</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
    </ol>
  </nav>
<div class="card">
    <div class="card-body text-center">

        {!! Form::open(array('method'=>'POST','class'=>'form','url'=>'/tambahbarang')) !!}
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('nama_barang','', ['placeholder'=>'Nama Barang','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Nama Barang</label>
        </div>
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('satuan','', ['placeholder'=>'Satuan','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Satuan</label>
        </div>
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('deskripsi','', ['placeholder'=>'Deskripsi','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Deskripsi</label>
        </div>

        {!! Form::submit('Simpan', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
