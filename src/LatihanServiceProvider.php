<?php
namespace Arungruang\Latihan;

use Illuminate\Support\ServiceProvider;

class LatihanServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd("oke");
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {

    }
}