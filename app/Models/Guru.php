<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Guru extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'guru';

    protected $fillable = ['nama', 'umur'];
    protected $dates = ['deleted_at'];
}
