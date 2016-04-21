<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Konfirmasi;
use Session;
use Log;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfirmasis = Konfirmasi::all();
        return view('konfirmasi.index')->withKonfirmasis($konfirmasis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('peserta.konfirmasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $konfirmasi = new Konfirmasi();
        $konfirmasi-> nama = $request->get('nama');
        $penamaan_gambar = substr(str_shuffle(str_repeat("01123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 3);

        $konfirmasi->atas_nama_pengirim = $request->atas_nama;
        $imageName = $penamaan_gambar. '.' . $request->file('image')->getClientOriginalExtension();
        $konfirmasi->upload_bukti = $imageName;

        $konfirmasi->save();
        $request->file('image')->move(
            base_path() . '/public/images/uploads/', $imageName
        );

        Log::info('Ada konfirmasi pembayaran masuk dari ' . $konfirmasi->atas_nama_pengirim . ' , segera CEK!' );
        return view('peserta.sesudah_konfirmasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konfirmasi = Konfirmasi::find($id);
        return view('konfirmasi.edit')->withKonfirmasi($konfirmasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $konfirmasi = Konfirmasi::find($request->konfirmasi_id);
        $konfirmasi->nama = $request->input('nama');
        $konfirmasi->atas_nama_pengirim = $request->atas_nama;
        $konfirmasi->sudah_masuk = $request->sudah_masuk;

        Session::flash('pesan',   ' Berhasi update data konfirmasi' . $konfirmasi->nama ); //<--FLASH MESSAGE

        $konfirmasi->save();
        return redirect('peserta/konfirmasi/edit/'.$konfirmasi->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $konfirmasi = Konfirmasi::find($id);

        Session::flash('pesan','Konfirmasi atas nama ' . $konfirmasi->nama . ' telah di hapus.'); //<--FLASH MESSAGE

        $konfirmasi->delete();

        return redirect("peserta/konfirmasi");
    }
}
