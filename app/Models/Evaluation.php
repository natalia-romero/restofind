<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Evaluation extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'restaurant_id',
        'review',
        'score',
        'created_at'
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
