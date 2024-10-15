<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Ekstrakurikuler;
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
        $guruCount = Guru::count();
        $eskulCount =  Ekstrakurikuler::count();
        $kontakCount = Kontak::count();
        return view('home', compact('guruCount', 'eskulCount', 'kontakCount'));
    }
}
