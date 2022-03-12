<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    /**
     * Api de controlador
     * 
     */
    public function frutas(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET','https://www.fruityvice.com/api/fruit/all/');
        $datos = json_decode($response->getBody()->getContents(),true);

        //recorrera todas las frutas
        

        foreach($datos as $fruta)
        {
            $frutas[] = [
                'genus' => $fruta['genus'],
                'name' => $fruta['name'],
                'id' => $fruta['id'],
                'family' => $fruta['family'],
                'order' => $fruta['order'],
            ];
        }

        return view('frutas',['frutas' => $frutas]);
    }

    public function familiafrutas($family){
        

        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://www.fruityvice.com/api/fruit/family/'.$family);
        $frutafamilia= json_decode($response->getBody()->getContents(), true);

        foreach($frutafamilia as $fruta)
        {
            $frutas[] = [
                'genus' => $fruta['genus'],
                'name' => $fruta['name'],
                'id' => $fruta['id'],
                'family' => $fruta['family'],
                'order' => $fruta['order'],
            ];
        }

        return view('familiafrutas',['frutafamilia' => $frutafamilia, 'frutas' => $frutas]);
    }

    public function genusfrutas($genus){
        

        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://www.fruityvice.com/api/fruit/genus/'.$genus);
        $frutagenus = json_decode($response->getBody()->getContents(), true);

        foreach($frutagenus as $fruta)
        {
            $frutas[] = [
                'genus' => $fruta['genus'],
                'name' => $fruta['name'],
                'id' => $fruta['id'],
                'family' => $fruta['family'],
                'order' => $fruta['order'],
            ];
        }

        return view('genusfrutas',['frutagenus' => $frutagenus, 'frutas' => $frutas]);
    }

    public function orderfrutas($order){
        

        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://www.fruityvice.com/api/fruit/order/'.$order);
        $frutaorder = json_decode($response->getBody()->getContents(), true);

        foreach($frutaorder as $fruta)
        {
            $frutas[] = [
                'genus' => $fruta['genus'],
                'name' => $fruta['name'],
                'id' => $fruta['id'],
                'family' => $fruta['family'],
                'order' => $fruta['order'],
            ];
        }

        return view('orderfrutas',['frutaorder' => $frutaorder, 'frutas' => $frutas]);
    }
    
    
}
