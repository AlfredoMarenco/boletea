<?php

namespace App\Http\Controllers\Atlasfc;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CodereadController extends Controller
{
    public function index(){
        //Comvertir los datos del xml v1.0 que devuele la api con url https://api.codereadr.com/api/?section=scans&action=retrieve&api_key=9f7a93df523646d149f6df5f5d157772
        $client = new Client();
        $res = $client->request('GET', 'https://api.codereadr.com/api/?section=scans&action=retrieve&api_key=9f7a93df523646d149f6df5f5d157772');
        $xml = simplexml_load_string($res->getBody());
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        /* $request = Http::get('https://api.codereadr.com/api/?section=scans&action=retrieve&api_key=9f7a93df523646d149f6df5f5d157772'); */
        return view('atlasfc.index', compact('array'));
    }
}
