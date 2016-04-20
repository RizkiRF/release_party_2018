<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function(){
  return view('home');
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/', function() {
        return ['test' => true];
    });
    $api->get('/peserta', 'App\Http\Controllers\api\cekController@index');
    $api->get('/peserta/{id}', 'App\Http\Controllers\api\cekController@show');
    $api->post('/peserta/cek', 'App\Http\Controllers\api\cekController@store');
});

Route::post('terimakasih','PesertaController@store');

// konfirmasi
//Route::get('konfirmasi', 'PesertaController@show_konfirmasi');

Route::get('konfirmasi', 'KonfirmasiController@create');
Route::post('konfirmasi', 'KonfirmasiController@store');

//Route::post('konfirmasi', 'PesertaController@konfirmasi');
Route::post('cek-kode', 'PesertaController@cek_kode');

Route::get('tiket', 'PesertaController@tiket');

Route::post('tiket', 'PesertaController@get_tiket');

Route::get('test-terimakasih', function(){
    $nama = 'Diky Test';
    $email = "diky@test.com";
    $kode_tiket = "XYZ";
   return view('terimakasih')->withNamapeserta($nama)->withEmail($email)->withKode_tiket($kode_tiket);
});

Route::get('test-qr-code', function(){
    $nama = 'Diky Test';
    $email = "diky@test.com";
    $kode_tiket = "XYZ";
    return view('test.qrcode')->withNamapeserta($nama)->withEmail($email)->withKode_tiket($kode_tiket);
});

//Route::get('send-email', function(){
//  Mail::send('emails.test',
//   ['testVar' => 'Namamu, iya kamu'],
//   function($message) {
//             $message->to('sekretariat@doscom.org')
//                     ->subject('Test email dari Laravel');
//   });
//});

Route::get('test-view-email', function(){
  $nama = "diky arga";
  $email = "dikyarga.id@gmail.com";
  $kode_tiket = "code";
  $no_hp = "08317373617";
  $status = "mahasiswa";
  $dvd = "64";
  return view('emails.after-register')->withNama($nama)->withKode_tiket($kode_tiket)->withNo_hp($no_hp)->withEmail($email)->withStatus($status)->withDvd($dvd);
});



Route::get('test-view-email-lunas', function(){
    $nama = "diky arga";
    $email = "dikyarga.id@gmail.com";
    $kode_tiket = "code";
    $no_hp = "08317373617";
    $status = "mahasiswa";
    $kunci_rahasia = "RHS";
    $dvd = "64";
    return view('emails.lunas')->withNama($nama)->withKode_tiket($kode_tiket)->withNo_hp($no_hp)->withEmail($email)->withStatus($status)->withDvd($dvd)->withKunci_rahasia($kunci_rahasia);
});
//
//Route::get('contact', 'ContactController@showForm');
//Route::post('contact', 'ContactController@sendContactInfo');
//Route::get('/','PostController@index');
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);
//authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
    //peserta all
    Route::get('/peserta/all','PesertaController@index');
    Route::get('/peserta/delete/{id}','PesertaController@destroy');
    Route::get('/peserta/edit/{id}','PesertaController@edit');
    Route::post('/peserta/edit','PesertaController@update');
    Route::get('/peserta/report','PesertaController@report');

    // kirim email
    Route::get('/peserta/kirim-email-lunas/{id}', 'PesertaController@kirim_email_lunas');

    // kirim sms

    Route::get('/peserta/kirim-sms-lunas/{id}', 'PesertaController@kirim_sms_lunas');

    Route::get('all-peserta-nomer-hp', 'PesertaController@nomerhp');

    // konfirmasi
    Route::get('/peserta/konfirmasi', 'KonfirmasiController@index');
    Route::get('/peserta/konfirmasi/edit/{id}', 'KonfirmasiController@edit');
    Route::post('/peserta/konfirmasi/edit', 'KonfirmasiController@update');
    Route::get('/peserta/konfirmasi/delete/{id}', 'KonfirmasiController@destroy');
    // show new post form
    Route::get('new-post','PostController@create');
    // save new post
    Route::post('new-post','PostController@store');
    // edit post form
    Route::get('edit/{slug}','PostController@edit');
    // update post
    Route::post('update','PostController@update');
    // delete post
    Route::get('delete/{id}','PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts','UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts','UserController@user_posts_draft');
    // add comment
    Route::post('comment/add','CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}','CommentController@distroy');

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    //peserta----------------------------

});
////users profile
//Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
//// display list of posts
//Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
//// display single post
//Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

// Login dan Logut
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Daftar
//Route::post('auth/register', 'Auth\AuthController@postRegister');
//Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/register', function(){
    return ":P";
});
