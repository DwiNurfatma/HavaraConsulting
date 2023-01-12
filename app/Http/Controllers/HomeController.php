<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\article;
use App\Models\logo;
use App\Models\sosmed;
use App\Models\service;
use App\Models\address;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $footer = DB::table('footer')->get();
        return view('admin.dashboard', compact('footer'));
    }
    public function blog()
    {
        $blog = DB::table('article')->get();
        return view('admin.blog', ['article' => $blog]);
    }
    public function mailbox()
    {
        $mailbox = DB::table('mailbox')->get();
        return view('admin.mailbox', ['mailbox' => $mailbox]);
    }

    public function show()
    {
        $article = DB::table('article')->get();
        return view('admin.show', ['article' => $article]);
    }
    public function showfooter()
    {
        $footer = DB::table('footer')->get();
        return view('admin.showfooter', ['footer' => $footer]);
    }
    public function editfooter_process(Request $footer)
    {
        $id = $footer->id;
        $judul = $footer->judul;
        $deskripsi = $footer->deskripsi;
        DB::table('footer')->where('id', $id)
            ->update(['judul' => $judul, 'deskripsi' => $deskripsi]);

        return redirect()->action('HomeController@showfooter');
    }
    public function editfooter($id)
    {
        $footer = DB::table('footer')->where('id', $id)->first();
        return view('admin.editfooter', ['footer' => $footer]);
    }
    public function edit_process(Request $article)
    {
        $id = $article->id;
        $judul = $article->judul;
        $deskripsi = $article->deskripsi;
        DB::table('article')->where('id', $id)
            ->update(['judul' => $judul, 'deskripsi' => $deskripsi]);

        return redirect()->action('HomeController@show');
    }
    public function add()
    {
        $article = article::get();
        return view('admin.add', ['article' => $article]);
    }
    public function add_process(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
            'judul' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $nama_file);

        article::create([
            'file' => $nama_file,
            'deskripsi' => $request->deskripsi,
            'judul' => $request->judul,
        ]);
        return redirect('/admin/show');
    }
    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        DB::table('article')->where('id', $id)
            ->delete();

        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus

        return redirect()->action('HomeController@show');
    }
    public function hapus($nama)
    {
        DB::table('mailbox')->where('nama', $nama)->delete();

        return redirect('/admin/mailbox');
    }
    public function edit($id)
    {
        $article = DB::table('article')->where('id', $id)->first();
        return view('admin.edit', ['article' => $article]);
    }

    public function sosmed()
    {
        $sosmed = sosmed::get();
        return view('admin.sosmed', ['sosmed' => $sosmed]);
    }
    public function sosmed_process(Request $request)
    {
        $this->validate($request, [
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'link' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $sosmed = $request->file('logo');

        $nama_file = time() . "_" . $sosmed->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $sosmed->move($tujuan_upload, $nama_file);

        sosmed::create([
            'logo' => $nama_file,
            'link' => $request->link,
        ]);

        return redirect()->back();
    }
    public function sosmed_delete($logo)
    {
        DB::table('sosmed')->where('logo', $logo)
            ->delete();

        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus

        return redirect()->action('HomeController@sosmed');
    }
    public function logo_delete($file)
    {
        DB::table('logo')->where('file', $file)
            ->delete();

        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus

        return redirect()->action('HomeController@logo');
    }
    public function logo()
    {
        $logo = logo::get();
        return view('admin.logoheader', ['logo' => $logo]);
    }

    public function logo_process(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $logo = $request->file('file');

        $nama_file = time() . "_" . $logo->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $logo->move($tujuan_upload, $nama_file);

        logo::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }
    public function service()
    {
        $service = service::get();
        return view('admin.service', ['service' => $service]);
    }
    public function service_process(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $service = $request->file('gambar');

        $nama_file = time() . "_" . $service->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $service->move($tujuan_upload, $nama_file);

        service::create([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }
    public function service_delete($gambar)
    {
        DB::table('service')->where('gambar', $gambar)
            ->delete();

        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus

        return redirect()->action('HomeController@service');
    }

    public function address()
    {
        $address = address::get();
        return view('admin.address', ['address' => $address]);
    }
    public function address_process(Request $request)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $address = $request->file('gambar');

        $nama_file = time() . "_" . $address->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $address->move($tujuan_upload, $nama_file);

        address::create([
            'gambar' => $nama_file,
            'deskripsi' => $request->deskripsi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }
    public function address_delete($gambar)
    {
        DB::table('address')->where('gambar', $gambar)
            ->delete();

        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus

        return redirect()->action('HomeController@address');
    }
}
