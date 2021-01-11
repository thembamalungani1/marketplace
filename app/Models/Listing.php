<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'title',
        'description',
        'slug',
        'price',
        'contact_email',
        'contact_mobile',
        'currency_id',
        'category_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

}
