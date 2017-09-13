<?php

namespace App;
use App\Models\customer;
use App\Models\Staff;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;




class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes, EntrustUserTrait {
    SoftDeletes::restore insteadof EntrustUserTrait;
    EntrustUserTrait::restore insteadof SoftDeletes;
}

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


/**
     * This function is used to get the data of the authenticated user ,that is, whether it is a staff or customer
     *
     * @var array
     */

 public function checkStatus(){

//dd($this);
    
 if(@$this->staffs[0]){

 // this method is used to check if the user is a staff,and it retrieves the data of the staff
 $user = $this->staffs;

 // after checking and confirming it is a staff we then get the equivalent data of the staff

 return $user[0];
 
 }else{

// this function is to check if the user is a customer and it retrieves the data of the customer

    $user = $this->customers;
    return $user[0];
 
 }
    


}

/**
     * This function is used to get the position_id of the staff ,that is, by default a customer will have the value of one returned since it will not have a position
     *
     * @var array
     */
public function getPositionId(){
   
 if(@$this->staffs[0]){
$user = $this->staffs;
 return $id = $user[0]->position_id;

}else{
    return 1;
}

 


}

    public function customers(){
 //used to get the relationship between the user table and the customer table     
       return $this->hasMany(Customer::class);

    }
    public function staffs(){
//used to get the relationship between the user table and the staff table
       return $this->hasMany(Staff::class);


    }
}
