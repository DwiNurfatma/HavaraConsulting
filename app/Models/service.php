<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = "service";

    protected $fillable = ['judul', 'gambar', 'keterangan'];
}
