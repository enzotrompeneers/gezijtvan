<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function getAll()
    {
        return static::all();
    }

    /* standaard find the id -> Task $task
    public static function findOne($id)
    {
        return static::find($id);
    }
    */

    public function scopeIncomplete($query)
    {
        return $query->where('complete', 0)->get();
    }

    public function scopeComplete($query)
    {
        return $query->where('complete', 1)->get();
    }
}
