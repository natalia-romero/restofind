<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
