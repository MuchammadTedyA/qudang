<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;

class qudangController extends Controller
{
    public function cekLogin()
  {
    $username = request()->get('user_login');
    $password = request()->get('user_password');

    $data = DB::table('users')->where('username', '=', $username)->first();
    $data2 = DB::table('users')->where('password', '=', $password)->first();
    if ($data && $data2) {
      session()->put('name', request()->get('user_login'));
      return Redirect::to('/beranda')->with('message', 'Berhasil Login');
    }else{
        return Redirect::to('/')->with('message', 'Login gagal, username atau password tidak sesuai');
    }
  }

// ================LIHAT DATA==========
  public function lihatDataBarang()
    {
        $data = DB::table('barang')->get();
        $barang_masuk = DB::table('barang')
            ->join('detail_barang_masuk', 'barang.id_barang', '=', 'detail_barang_masuk.id_barang')
            ->join('barang_masuk', 'barang_masuk.id_barang_masuk', '=', 'detail_barang_masuk.id_barang_masuk')
            ->get();

        $barang_keluar = DB::table('barang')
            ->join('detail_barang_keluar', 'barang.id_barang', '=', 'detail_barang_keluar.id_barang')
            ->join('barang_keluar', 'barang_keluar.id_barang_keluar', '=', 'detail_barang_keluar.id_barang_keluar')
            ->get();
        return view::make('/dataBarang')->with(['barang'=>$data, 'barangmasuk'=>$barang_masuk,'barangkeluar'=>$barang_keluar]);
    }

    public function lihatDataDepartemen()
    {
        $data = DB::table('departemen')->get();
        return view::make('/departemen')->with('departemen', $data);
    }

    public function lihatDataSupplier()
    {
        $data = DB::table('supplier')->get();
        return view::make('/supplier')->with('supplier', $data);
    }

    // ===========TAMBAH DATA============

    public function tambahbarang()
    {
        $data = array(
            'nama_barang' => request()->get('nama_barang'),
            'satuan' => request()->get('satuan'),
            'stok'=>'0',
            'deskripsi' => request()->get('deskripsi')
        );
        DB::table('barang')->insert($data);
        return Redirect::to('dataBarang')->with('message', 'Berhasil Menambah Data');
    }

    public function tambahdepartemen()
    {
        $data = array(
            'nama_departemen' => request()->get('nama_departemen'),
            'deskripsi' => request()->get('deskripsi')
        );
        DB::table('departemen')->insert($data);
        return Redirect::to('departemen')->with('message', 'Berhasil Menambah Data');
    }

    public function tambahsupplier()
    {
        $data = array(
            'nama_supplier' => request()->get('nama_supplier'),
            'deskripsi' => request()->get('deskripsi')
        );
        DB::table('supplier')->insert($data);
        return Redirect::to('supplier')->with('message', 'Berhasil Menambah Data');
    }

// HAPUS DATA ===============================

    public function hapusBarang ($id)
    {
        DB::table('barang')->where('id_barang', '=', $id)->delete();
        return Redirect::to('dataBarang')->with('message', 'Berhasil Menghapus Data');
    }

    public function hapusSupplier ($id)
    {
        DB::table('supplier')->where('id_supplier', '=', $id)->delete();
        return Redirect::to('supplier')->with('message', 'Berhasil Menghapus Data');
    }

    public function hapusDepartemen ($id)
    {
        DB::table('departemen')->where('id_departemen', '=', $id)->delete();
        return Redirect::to('departemen')->with('message', 'Berhasil Menghapus Data');
    }

    // UBAH DATA ============================

    public function updatebarang($id)
    {
        $data = DB::table('barang')->where('id_barang', '=', $id)->first();
        return View::make('ubahBarang')->with('barang', $data);
    }

    public function ubahbarang()
    {
        $data = array(
            'nama_barang' => request()->get('nama_barang'),
            'satuan' => request()->get('satuan'),
            'stok' => '0',
            'deskripsi' => request()->get('deskripsi')
        );

        DB::table('barang')->where('id_barang', '=', request()->get('id'))->update($data);
        return Redirect::to('/dataBarang')->with('message', 'Data Berhasil Diupdate');
    }

    public function updatesupplier($id)
    {
        $data = DB::table('supplier')->where('id_supplier', '=', $id)->first();
        return View::make('ubahSupplier')->with('supplier', $data);
    }

    public function ubahsupplier()
    {
        $data = array(
            'nama_supplier' => request()->get('nama_supplier'),
            'deskripsi' => request()->get('deskripsi')
        );

        DB::table('supplier')->where('id_supplier', '=', request()->get('id'))->update($data);
        return Redirect::to('/supplier')->with('message', 'Data Berhasil Diupdate');
    }

    public function updatedepartemen($id)
    {
        $data = DB::table('departemen')->where('id_departemen', '=', $id)->first();
        return View::make('ubahDepartemen')->with('departemen', $data);
    }

    public function ubahdepartemen()
    {
        $data = array(
            'nama_departemen' => request()->get('nama_departemen'),
            'deskripsi' => request()->get('deskripsi')
        );

        DB::table('departemen')->where('id_departemen', '=', request()->get('id'))->update($data);
        return Redirect::to('/departemen')->with('message', 'Data Berhasil Diupdate');
    }

    // BARANG MASUK ==================

    public function barangMasuk()
    {
        $barang = DB::table('barang')->get();
        $supplier = DB::table('supplier')->get();

        return view::make('barangMasuk')->with(['barang'=>$barang,'supplier'=>$supplier]);
    }

    public function tambahbarangmasuk()
    {

        $sekarang =  date_create(); // waktu sekarang

        $barangmasuk = array(
            'tanggal_masuk' => $sekarang,
            'batch' => request()->get('batch'),'id_supplier' => request()->get('nama_supplier')
        );
        DB::table('barang_masuk')->insert($barangmasuk);
        $id_barang_masuk = DB::table('barang_masuk')->max('id_barang_masuk');

        $detailBarangMasuk = array(
            'id_barang_masuk' => $id_barang_masuk,
            'id_barang' => request()->get('nama_barang'),
            'jumlah' => request()->get('jumlah')
        );
        DB::table('detail_barang_masuk')->insert($detailBarangMasuk);

        $stoktambah = request()->get('jumlah');
        $stoksekarang = DB::table('barang')
            ->select(DB::raw('stok'))
            ->where('id_barang', '=', request()->get('nama_barang'))->get();

        $nilai = 0;
        foreach ($stoksekarang as $barang) {
            $nilai = $barang->stok;
        }

        $data = array(
            'stok' => $nilai + $stoktambah
        );
        DB::table('barang')->where('id_barang', '=', request()->get('nama_barang'))->update($data);
        return Redirect::to('/dataBarang')->with('message', 'Transaksi Barang Masuk Berhasil');
    }


    // BARANG KELUAR =================

    public function barangKeluar()
    {
        $barang = DB::table('barang')->get();
        $departemen = DB::table('departemen')->get();

        return view::make('barangKeluar')->with(['barang'=>$barang,'departemen'=>$departemen]);
    }

    public function tambahbarangkeluar()
    {

        $sekarang =  date_create(); // waktu sekarang

        $barangkeluar = array(
            'tanggal_keluar' => $sekarang,
            'batch' => request()->get('batch'),'id_departemen' => request()->get('nama_departemen')
        );
        DB::table('barang_keluar')->insert($barangkeluar);
        $id_barang_keluar = DB::table('barang_keluar')->max('id_barang_keluar');

        $detailBarangKeluar = array(
            'id_barang_keluar' => $id_barang_keluar,
            'id_barang' => request()->get('nama_barang'),
            'jumlah' => request()->get('jumlah')
        );
        DB::table('detail_barang_keluar')->insert($detailBarangKeluar);

        $stockkurang = request()->get('jumlah');
        $stocksekarang = DB::table('barang')
            ->select(DB::raw('stok'))
            ->where('id_barang', '=', request()->get('nama_barang'))->get();

        $nilai = 0;
        foreach ($stocksekarang as $barang) {
            $nilai = $barang->stok;
        }

        $data = array(
            'stok' => $nilai - $stockkurang
        );
        DB::table('barang')->where('id_barang', '=', request()->get('nama_barang'))->update($data);
        return Redirect::to('/dataBarang')->with('message', 'Transaksi Barang Keluar Berhasil');
    }

        public function logout()
    {
        session()->forget('name');
        return Redirect::to('/');
    }
}
