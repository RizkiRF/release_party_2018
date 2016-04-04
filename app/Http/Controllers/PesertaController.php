<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jobs\SendThanksEmail;
use App\Peserta;
use Mail;
use Log;
use QrCode;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peserta.all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // acak kode tiket, 5 kali repeat, di ambil 3 karakter dari index 0 sampai 3
      $kode_tiket = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);

      // kunci rahasia
      $kunci_rahasia = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);
      // cek apakah kode_tiket sudah pernah dipakai ?
      if(Peserta::where('kode_tiket', '=', $kode_tiket)->exists())
      {
        // jika pernah, maka acak lagi, sebenernya sih baiknya pake While, tapi aku rasa ini cukup untuk mengatisipasi sampai 1000 peserta
        $kode_tiket = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);
      }

      $peserta = new Peserta();

      $peserta->kode_tiket = $kode_tiket ;
      $peserta->kunci_rahasia = $kunci_rahasia;
      $peserta->nama = $request->get('nama');
      $peserta->email = $request->get('email');
      $peserta->no_hp = $request->get('no_hp');
      $peserta->dvd = $request->get('dvd');
      $peserta->status = $request->get('status_peserta');

      $peserta->status_bayar = 0;
      $peserta->email_terkirim = 0;
      $peserta->sms_terkirim = 0;

      $data = $peserta->toArray();

      $peserta->save();

      Log::info('akan kirim email ke ' . $peserta->email);
      //$this->dispatch(new SendThanksEmail($data));

      Mail::queue('emails.test', $data, function($message) use ($data){
         $message->to($data['email'])
                 ->subject('Pendaftaran Release Party TeaLinux OS 8 - ' . $data['nama']);
                 Log::info('email terkirim ke ' . $data['email'] . ' dengan nama peserta : ' . $data['nama']);
       });

       //QrCode::generate($kode_tiket, '../public/qrcode.svg');

      return view('terimakasih')->withNamapeserta($peserta->nama);
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
