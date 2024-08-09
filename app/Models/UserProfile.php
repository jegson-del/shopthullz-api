<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','house_number','street_name','city','postcode','country','phone','bussiness_name','avatar'];


    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
