@extends('index')
@section('judul')
  Ubah Supplier
@stop

@section('section')
@if (Session::has('message'))
    <script>
        alert("{!!Session::get('message')!!}");
      </script>
@endif
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../supplier">Supplier</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ubah Supplier</li>
    </ol>
  </nav>
<div class="card">
    <div class="card-body text-center">

        {!! Form::open(array('method'=>'POST','class'=>'form','url'=>'/ubahsupplier')) !!}
        {!! Form::hidden('id',$supplier->id_supplier, ['class' => 'form-control'])!!}
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('nama_supplier',$supplier->nama_supplier, ['class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Nama Supplier</label>
        </div>
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::text('deskripsi',$supplier->deskripsi, ['placeholder'=>'Deskripsi','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Deskripsi</label>
        </div>

        {!! Form::submit('Simpan', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
