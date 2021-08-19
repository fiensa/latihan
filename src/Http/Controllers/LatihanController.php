<?php

namespace Arungruang\Latihan\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class LatihanController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $response   = Http::get('https://reqres.in/api/users');
        $data       = $response->object();

        return view('latihan::index', ['data' => $data->data]);
        // dd("OKE GAN");
    }
}