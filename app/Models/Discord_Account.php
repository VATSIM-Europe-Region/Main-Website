<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discord_Account extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute()
    {
        return mb_convert_case(mb_strtolower($this->user->full_name), MB_CASE_TITLE, 'UTF-8');
    }
}