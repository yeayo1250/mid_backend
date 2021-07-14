<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'id',
        'address',
        'age',
        'date_enrolled',
        'gender'
    ];

    public function container() {
        return $this->belongsTo('App\Models\Student', 'contained_in', 'id');
    }
}
