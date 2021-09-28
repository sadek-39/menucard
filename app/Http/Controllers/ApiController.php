<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function me($token)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/me',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token.''
        )
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
    public function find_food($token,$id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/find_food/'.$id.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        //CURLOPT_POSTFIELDS => array('food_name' => 'Masala Chicken','quantity' => '1','food_details' => 'Masala with fried Chicken','food_status' => 'available','food_price' => '400','user_id' => '1'),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token.''
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
    public function create_food($token,$data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/create_food',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>$data, 
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token.''
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}
