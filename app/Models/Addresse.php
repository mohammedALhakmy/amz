<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresse extends Model
{
    use HasFactory;
    protected $fillable = ["first_name", "last_name", "email", "email_verified_at", "password", "city", "postcode", "country", "user_id", "addr1", "addr2"];
}
