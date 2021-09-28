<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Http\Controllers\ApiController;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies are automatically resolved by the service container...
        $token=session('token');
        $usercontroller=new ApiController();
        $user=$usercontroller->me($token);
        $this->data=json_decode($user);
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        
        $view->with('data', $this->data);
    }
} 