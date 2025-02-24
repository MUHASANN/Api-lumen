<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lending extends Model
{
    protected $fillable = ["stuff_id", "date_time", "name", "user_id", "notes", "total_stuff"];

    public function user(){

        return $this->belongsTo(User::class);
        
    }

    public function stuff(){

        return $this->belongsTo(Stuff::class);
        
    }

    public function restorations(){

        return $this->hasMany(Restoration::class);
        
    }
}
