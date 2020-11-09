<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OngController extends Controller
{
    /**
     * Display Reports
     *
     * @return \Illuminate\Http\Response
     */
    public function reports()
    {
        $ong = DB::table('clients')->union(DB::table('providers'))->orderBy('created_at', 'asc')->get();

        $clientsPrice = DB::table('clients')->sum('value');
        $providersPrice = DB::table('providers')->sum('value');
        $currentPrice = $clientsPrice - $providersPrice;

        return [
            'ong' => $ong,
            'currentPrice' => $currentPrice
        ];
    }

}
