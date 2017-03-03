<?php

namespace App;

// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Anggota extends User
{
    protected $table = 'anggota';
    protected $fillable = ['nama', 'alamat'];
}
