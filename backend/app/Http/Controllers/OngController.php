<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OngController extends Controller
{
    /**
     * Display entries and exits prices of the Ong.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ong = DB::table('clients')->union(DB::table('providers'))->orderBy('created_at', 'asc')->get();
        return $ong;
    }

    /**
     * Display current price of the Ong.
     *
     * @return \Illuminate\Http\Response
     */
    public function currentPrice()
    {
        $clientsPrice = DB::table('clients')->sum('value');
        $providersPrice = DB::table('providers')->sum('value');
        $currentPrice = $clientsPrice - $providersPrice;
        return $currentPrice;
    }
}
