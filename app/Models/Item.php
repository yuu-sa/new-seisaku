<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = array('id','user_id');

    protected $fillable = [
    'user_name',
    'name',
    'type',
    'price',
    'image',
    'detail',
];

    public function users()
    {
        return $this->belongsTo(User::class);    
    }
}
