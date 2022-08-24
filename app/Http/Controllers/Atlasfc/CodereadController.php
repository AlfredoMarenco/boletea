<?php

namespace App\Http\Controllers\Atlasfc;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class CodereadController extends Controller
{
    public function index(){
        $request = Http::get('https://api.codereadr.com/api/?section=scans&action=retrieve&service_id=1748678&api_key=9f7a93df523646d149f6df5f5d157772');
        $response = $request;
        $xml = simplexml_load_string($response,"SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return view('atlasfc.index', compact('array'));
    }
}
