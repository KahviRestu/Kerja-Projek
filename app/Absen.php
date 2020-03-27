<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absen';
    protected $fillable = ['nip','nama','guru_id'];

    public function guru()
    {
    	return $this->belongsTo('App\Guru');
    }
}
