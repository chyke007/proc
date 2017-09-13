<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\customer;
use App\Models\Permission;
use App\Models\Role;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:55|min:3',
            'lastname' => 'required|string|max:55|min:3',
            'middlename' => 'required|string|max:55|min:3',
            'phone' => 'required|string|max:15|min:8',
            'state' => 'required|string|max:20|min:3',
             'email' => 'required|email|min:10|max:50|unique:users' ,       
        'address' => 'required|string|min:10|max:255',
        'sex' => 'required|string|max:6|min:3',
            'password' => 'required|string|min:6|confirmed',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     
    protected function create(array $data)
    {
        
   
       
DB::beginTransaction();  
    $user = new User;
    $user->email = strtoupper(request('email'));
    $user->password = bcrypt(request('password'));
    
    $user->save();

    $user_id = User::where('email',strtoupper(request('email')))->get(['id']);
    $user_id = $user_id[0]->id;
    //
    $uuid = \Ramsey\Uuid\Uuid::uuid4();
    $uuid = $uuid->toString();
    //
//pushes the user details to the customers table
    $customer = new customer; 
    $customer->user_id = $user_id;
    $customer->first_name = strtoupper(request('firstname'));
    $customer->last_name = strtoupper(request('lastname'));
    $customer->middle_name = strtoupper(request('middlename'));
    $customer->email = strtoupper(request('email'));
    $customer->phone_no = strtoupper(request('phone'));
    $customer->state = strtoupper(request('state'));
    $customer->address = strtoupper(request('address'));
    $customer->sex = strtoupper(request('sex'));
    $customer->save();

 //attach the customer role to every new customer
    $role = Role::where('name','customer')->first();
    $user->roles()->attach($role->id);


    DB::commit();
    return $user;

    
    }
}
