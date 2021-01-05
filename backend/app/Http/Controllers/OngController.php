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
        $ongInfo = [];

        $clients = DB::table('clients')->orderBy('value', 'desc')->get()->take(5);
        $providers = DB::table('providers')->orderBy('value', 'desc')->get()->take(5);

        foreach ($clients as $key => $value) {
            $ongInfo[] = array_merge((array) $value, ['type' => 'client']);
        }

        foreach ($providers as $key => $value) {
            $ongInfo[] = array_merge((array) $value, ['type' => 'provider']);
        }

        $clientsPrice = DB::table('clients')->sum('value');
        $providersPrice = DB::table('providers')->sum('value');
        $currentPrice = $clientsPrice - $providersPrice;

        return [
            'ong' => $ongInfo,
            'currentPrice' => $currentPrice
        ];
    }

}
