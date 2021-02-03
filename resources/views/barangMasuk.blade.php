@extends('index')
@section('judul')
  Barang Masuk
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
      <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
    </ol>
  </nav>
<div class="card container">
    <div class="card-body">

        {!! Form::open(array('method'=>'POST','class'=>'form','url'=>'/tambahbarangmasuk')) !!}

        <div class="form-floating mb-3" style=" margin: 30px">
            <select name="nama_barang" class="form-select">
                @foreach ($barang as $item)
                <option value="{{$item->id_barang}}">{{$item->nama_barang}}</option>
                @endforeach --}}
            </select>
            <label for="floatingInput">Nama Barang</label>
        </div>
        <div class="form-floating mb-3" style=" margin: 30px">
            <select name="nama_supplier" class="form-select">
                @foreach ($supplier as $item)
                <option value="{{$item->id_supplier}}">{{$item->nama_supplier}}</option>
                @endforeach --}}
            </select>
            <label for="floatingInput">Nama Supplier</label>
        </div>

        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::number('batch','', ['placeholder'=>'batch','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Jumlah Batch</label>
        </div>
        <div class="form-floating mb-3" style=" margin: 30px">
            {!! Form::number('jumlah','', ['placeholder'=>'Jumlah','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
            <label for="floatingInput">Jumlah</label>
        </div>

        <div class="card" style="width: 1180px; margin-left: auto; margin-right: auto">
            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>

@stop
