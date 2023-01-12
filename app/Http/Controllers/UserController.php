<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\article;
use App\Models\logo;
use App\Models\service;
use App\Models\sosmed;
use App\Models\address;

class UserController extends Controller
{
    // home
    public function home()
    {
        $service = DB::table('service')->get();
        $logo = logo::get();
        $footer = DB::table('footer')->get();
        $sosmed = DB::table('sosmed')->get();
        $address = DB::table('address')->get();
        return view('user.home', ['footer' => $footer, 'logo' => $logo, 'sosmed' => $sosmed, 'address' => $address, 'service' => $service]);
    }
    //service
    public function service()
    {
        $logo = DB::table('logo')->get();
        $service = DB::table('service')->paginate(4);;
        $footer = DB::table('footer')->get();
        $sosmed = DB::table('sosmed')->get();
        $address = DB::table('address')->get();
        return view('user.service', ['footer' => $footer, 'service' => $service, 'logo' => $logo, 'sosmed' => $sosmed, 'address' => $address]);
    }
    //blog
    public function blog()
    {
        $article = article::paginate(4);
        $logo = logo::get();
        $footer = DB::table('footer')->get();
        $sosmed = DB::table('sosmed')->get();
        $address = DB::table('address')->get();
        return view('user.blog', ['article' => $article, 'logo' => $logo, 'footer' => $footer, 'sosmed' => $sosmed, 'address' => $address]);
    }
    public function detail($judul)
    {
        $footer = DB::table('footer')->get();
        $logo = logo::get();
        $article = DB::table('article')->where('judul', $judul)->first();
        $sosmed = DB::table('sosmed')->get();
        $address = DB::table('address')->get();
        return view('user.detail', ['article' => $article, 'sosmed' => $sosmed, 'footer' => $footer, 'logo' => $logo, 'address' => $address]);
    }
    //contact
    public function contact()
    {
        $logo = DB::table('logo')->get();
        $footer = DB::table('footer')->get();
        $sosmed = DB::table('sosmed')->get();
        $address = DB::table('address')->get();
        return view('user.contact', ['footer' => $footer, 'logo' => $logo, 'sosmed' => $sosmed, 'address' => $address]);
    }
    public function save(Request $request)
    {
        DB::table('mailbox')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect('/contact');
    }
}
