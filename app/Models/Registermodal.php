<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registermodal extends Model
{

	protected $table = 'l_users';
   	
   	protected $fillable  = ['firstname','lastname','gender','email','username','password','mobile','date_of_birth'];
 
   	const CREATED_AT = 'create_on';
    const UPDATED_AT = 'update_on';

}
