<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    
    // yang gak boleh di isi
    // protected $guarded  = ['nama', 'nohp', 'merk', 'plat'];

    // yang boleh di isi
    protected $fillable = ['nama', 'nohp', 'merk', 'plat', 'harga'];
}
