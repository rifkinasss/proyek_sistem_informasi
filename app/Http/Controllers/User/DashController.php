<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.home', compact('title'));
    }
    public function gambaranUmum()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.tentang-kami.gambaran-umum', compact('title'));
    }
    public function visimisi()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.tentang-kami.visi-misi', compact('title'));
    }
    public function struktur()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.tentang-kami.struktur', compact('title'));
    }
    public function tupoksi()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.tentang-kami.tupoksi', compact('title'));
    }
    public function berita()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.berita.berita', compact('title'));
    }
    public function layanan()
    {
        $title = 'Sistem Informasi Manajemen Kelurahan Sepinggan Baru';
        return view('landing-page.layanan.layanan', compact('title'));
    }
}
