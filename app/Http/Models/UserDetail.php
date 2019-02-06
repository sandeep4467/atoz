<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['full_name','street_address','zip_code','city'];
}