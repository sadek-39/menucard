<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return view('register');
    }
    public function loginform()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        $data=array(
            'business_name'=>$request->business_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'mobile'=>$request->mobile
        );
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL').'/api/register',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $data,
        //   CURLOPT_HTTPHEADER => array(
        //     'Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYzMjY1MTU2MiwiZXhwIjoxNjMyNjU1MTYyLCJuYmYiOjE2MzI2NTE1NjIsImp0aSI6InhEUjJDbmN6bXJleGJIZDkiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.C5En7J--UsgNuWoI5_P-ekDGun8jvvncJPcA9FAK7K8'
        //   ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        return  view('registration-success');
    }
    public function login(Request $request){
        $data=array(
            'email'=>$request->email,
            'password'=>$request->password
        );
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_URL').'/api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        // CURLOPT_HTTPHEADER => array(
        //     'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYzMjY0OTQ1MCwiZXhwIjoxNjMyNjUzMDUwLCJuYmYiOjE2MzI2NDk0NTAsImp0aSI6IkViUEFGb2JScWR5TjJXaFoiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.o4eR4tQ27d5rRI-B6JpnYOvJsUWgKXfKVAAc0RoRb9A'
        // ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
       echo $response;
       
        if(!empty($response)){
            $response=json_decode($response);
            $token=$response->access_token;
            session(["token"=>$token]);
            return redirect('/home');
        }else{
            return view('welcome');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function profile()
    {
        return view('profile');
    }
}
