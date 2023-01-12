<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = "article";

    protected $fillable = ['judul', 'file', 'deskripsi'];
}
