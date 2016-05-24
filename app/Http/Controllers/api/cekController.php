<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peserta;

class cekController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->array(Peserta::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $kode_tiket = substr( $request->input('kode_tiket'),0,3);
      $kunci_rahasia = substr( $request->input('kode_tiket'),3,3);
      //return $this->response->array(['kode_tiket_qr_code' => $kode_tiket_qr_code]);

      if (Peserta::where('kode_tiket', '=', $kode_tiket)->exists()) {

        $peserta = Peserta::where('kode_tiket', '=', $kode_tiket)->firstOrFail();

        if($peserta->kunci_rahasia == $kunci_rahasia){
            return $this->response->array(['status' => 1,
                                            'pesan' => 'Cocok',
                                            'user_id' => $peserta->id,
                                            'nama' => $peserta->nama,
                                            'instansi' => $peserta->instansi,
                                            'no_hp' => $peserta->no_hp,
                                            'email' => $peserta->email,
                                            'sudah_masuk' => $peserta->sudah_masuk,
                                        ]);
        } else {
          return $this->response->array(['status' => 2,
                                         'pesan' => 'kode tiket benar, secret key salah',
              'user_id' => $peserta->id,
              'nama' => $peserta->nama,
              'instansi' => $peserta->instansi,
              'no_hp' => $peserta->no_hp,
              'email' => $peserta->email,
              'sudah_masuk' => $peserta->sudah_masuk,]);
        }
      }
      else
      {
          return $this->response->array(['status' => 0,
                                         'pesan' => 'kode salah!',
              'user_id' => $peserta->id,
              'nama' => $peserta->nama,
              'instansi' => $peserta->instansi,
              'no_hp' => $peserta->no_hp,
              'email' => $peserta->email,
              'sudah_masuk' => $peserta->sudah_masuk,]);
      }
    }

    public function masuk(Request $request)
    {
        $user_id = $request->input('user_id');
        $peserta = Peserta::find($user_id);

        $peserta->sudah_masuk = 1;
        $peserta->save();
        return $this->response->array(['status' => 1,
            'pesan' => $peserta->nama . ' berhasil masuk',
            'user_id' => $peserta->id,
            'nama' => $peserta->nama,
            'instansi' => $peserta->instansi,
            'no_hp' => $peserta->no_hp,
            'email' => $peserta->email,
            'sudah_masuk' => $peserta->sudah_masuk,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return $this->response->array(Peserta::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
