<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cuti extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
		'user' => 'array'
		
    ];
    public function user()
	{
		return $this->belongsTo('App\User');
	}
}
