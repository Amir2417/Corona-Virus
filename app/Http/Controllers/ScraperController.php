<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    private $results = array();

    public function get_data(){
        $client = new Client();
        $url = 'https://www.worldometers.info/coronavirus/';
        $page = $client->request('GET',$url);
        // echo "<pre>";
        // print_r($page);
        // echo $page->filter('.maincounter-number')->text();
        $page->filter('#maincounter-wrap')->each(function($item){
            $this->results[$item->filter('h1')->text()]= $item->filter('.maincounter-number')->text();

        });
        $data = $this->results;

        return view('view_corona',compact('data'));
    }
}
