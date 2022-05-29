<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
use App\Kategori;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalproduk = Produk::count();
        $totaluser = User::count();
        $itemproduk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        $data = array(
            'title' => 'Dashboard',
            'totproduk' => $totalproduk,
            'user' => $totaluser,
            'itemproduk' => $itemproduk,
            'itemkategori' => $itemkategori
        );
        return view('dashboard.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }
}
