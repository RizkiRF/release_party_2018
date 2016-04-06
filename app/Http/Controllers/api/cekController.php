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
            return $this->response->array(['status' => 'cocok', 'nama' => $peserta->nama]);
        } else {
          return $this->response->array(['status' => 'kode tiket benar, secret key salah']);
        }



      }
      else
      {
          return $this->response->array(['status' => 'kode salah']);
      }



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
