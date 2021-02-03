@extends('index')
@section('judul')
  Data Barang
@stop

@section('section')
  @if (Session::has('message'))
    <script>
        alert("{!!Session::get('message')!!}");
      </script>
    @endif
    <div class="">
      <a href="tambahBarang" class="btn btn-primary" style="margin: 20px">Tambah Barang</a>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th>No</th>
              <th>Nama Barang</th>
              <th>Satuan</th>
              <th>Stok</th>
              <th>Deskripsi</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <?php $no=1 ?>
            @foreach ($barang as $item)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$item->nama_barang}}</td>
              <td>{{$item->satuan}}</td>
              <td>{{$item->stok}}</td>
              <td>{{$item->deskripsi}}</td>
              <td><a class="btn btn-danger" href="hapusBarang/{{$item->id_barang}}">Hapus</a>&nbsp;&nbsp;<a class="btn btn-secondary" href="formeditBarang/{{$item->id_barang}}">Edit</a></td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>


    <div class="row" style="margin-top: 50px">
        <div class="col card">
            <a href="barangMasuk" class="btn btn-primary" style="margin: 20px;float: right; ">Barang Masuk</a>
            <div class="table-responsive" style="margin-top: 100px">
                <h3 style="margin-bottom: 20px">Riwayat Barang Masuk</h3>
                <table class="table table-hover">
                  <thead>
                    <tr class="table-dark">
                      <th>No</th>
                      <th>Nama Obat</th>
                      <th>Tanggal</th>
                      <th>Jumlah</th>
                      <th>Satuan</th>

                    </tr>
                  </thead>
                  <tbody>
                     <?php $no=1 ?>
                    @foreach ($barangmasuk as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$item->nama_barang}}</td>
                      <td>{{$item->tanggal_masuk}}</td>
                      <td>{{$item->jumlah}}</td>
                      <td>{{$item->satuan}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
        <div class="col card">
            <a href="barangKeluar" class="btn btn-primary" style="margin: 20px;float: left; ">Barang keluar</a>

            <div class="table-responsive" style="margin-top: 100px">
                <h3 style="margin-bottom: 20px">Riwayat Barang Keluar</h3>
                <table class="table table-hover">
                  <thead>
                    <tr class="table-dark">
                      <th>No</th>
                      <th>Nama Obat</th>
                      <th>Tanggal</th>
                      <th>Jumlah</th>
                      <th>Satuan</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1 ?>
                    @foreach ($barangkeluar as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$item->nama_barang}}</td>
                      <td>{{$item->tanggal_keluar}}</td>
                      <td>{{$item->jumlah}}</td>
                      <td>{{$item->satuan}}</td>
                    </tr>
                    @endforeach
                </table>
              </div>
        </div>
      </div>


@stop
