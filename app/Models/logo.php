<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class logo extends Model
{
    protected $table = "logo";

    protected $fillable = ['file', 'keterangan'];
}
