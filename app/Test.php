<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public static function getAll()
    {
        return static::all();
    }

    public static function findOne($id)
    {
        return static::find($id);
    }
}
