<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    protected $table = 'promo';
    public $fillable = ['title', 'description', 'promo_code', 'expired_date', 'image', 'updated_at'];
}
