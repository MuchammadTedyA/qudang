@extends('index')

@section('judul')
Beranda
@stop

@section('section')

<div class="row">

    <div class="col-3">

        <div class="card" style="width: 300px;height: 500px; background: #94d2ff;">
            <a href="dataBarang" class="card-body" style="text-decoration: none" >
                <h5 class="card-title" style="color: black;">
                    Data Barang
                </h5>
                <img src="{!!asset('assets/warehouse.png')!!}" alt="" width="200" height="200" class="d-inline-block align-top" style=" position: absolute;
                top: 0;
                bottom: 0;
                margin: auto; margin-left: 30px">
            </a>
         </div>
    </div>

        <div class="col-sm-9">

            <div class="card" style="height: 240px; background: linear-gradient(to right,#d5edeb ,  #88d1ca ) ;">
                <a href="barangMasuk" class="card-body" style="text-decoration: none" >
                    <h5 class="card-title" style="color: black;">
                        Barang Masuk
                    </h5>
                    <img src="{!!asset('assets/gambar/add.png')!!}" alt="" width="200" height="200" class="d-inline-block align-top" style=" position: absolute;
                    top: 0;
                    bottom: 0;
                    margin: auto; margin-left: 40%;">
                </a>

             </div>

             <div class="card" style=";height: 240px; background: linear-gradient(to right, #e8e7ac , #e0de48 ); margin-top: 20px">
                <a href="barangKeluar" class="card-body" style="text-decoration: none" >
                    <h5 class="card-title" style="color: #262e59; text-align: right">
                        Barang Keluar
                    </h5>
                    <img src="{!!asset('assets/gambar/outpng.png')!!}" alt="" width="200" height="200" class="d-inline-block align-top" style=" position: absolute;
                    top: 0;
                    bottom: 0;
                    margin: auto; margin-left: 40%;">
                </a>

             </div>
        </div>



</div>

<div class="row" style="margin-bottom: 30px">
    <div class="col">
        <div class="card" style=";height: 240px; background: linear-gradient(to right, #ebe7e6, #c9c6c5 ); margin-top: 20px">
            <a href="departemen" class="card-body" style="text-decoration: none" >
                <h5 class="card-title" style="color: #262e59; text-align: right">
                    Departemen
                </h5>
                <img src="{!!asset('assets/gambar/department.png')!!}" alt="" width="200" height="200" class="d-inline-block align-top" style=" position: absolute;
                top: 0;
                bottom: 0;
                margin: auto; margin-left: 40%;">
            </a>

        </div>
    </div>
    <div class="col">
        <div class="card" style=";height: 240px; background: linear-gradient(to right, #e3e4e8 , #ccd2eb ); margin-top: 20px">
            <a href="supplier" class="card-body" style="text-decoration: none" >
                <h5 class="card-title" style="color: #262e59; text-align: right">
                    Supplier
                </h5>
                <img src="{!!asset('assets/gambar/supplier.png')!!}" alt="" width="200" height="200" class="d-inline-block align-top" style=" position: absolute;
                top: 0;
                bottom: 0;
                margin: auto; margin-left: 30%;">
            </a>

        </div>
    </div>
</div>



@stop
