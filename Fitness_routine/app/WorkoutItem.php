<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutItem extends Model
{
    //
    protected $fillable = [
        'user_id',
        'full_name',
        'workout_title',
        'category_id',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saterday',
        'sunday'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
