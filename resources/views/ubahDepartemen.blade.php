@extends('index')
@section('judul')
  Ubah Barang
@stop

@section('section')
@if (Session::has('message'))
    <script>
        alert("{!!Session::get('message')!!}");
      </script>
@endif
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../dataBarang">Data Barang</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ubah Barang</li>
    </ol>
  </nav>
<div class="card">
    <div class="card-body text-center">

        {!! Form::open(array('method'=>'POST','class'=>'form','url'=>'/ubahdepartemen')) !!}
        {!! Form::hidden('id',$departemen->id_departemen, ['class' => 'form-control'])!!}
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('nama_departemen',$departemen->nama_departemen, ['class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Nama Departemen</label>
        </div>
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('deskripsi',$departemen->deskripsi, ['placeholder'=>'Deskripsi','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Deskripsi</label>
        </div>

        {!! Form::submit('Simpan', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
