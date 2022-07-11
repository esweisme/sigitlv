<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    public $timestamps = false;

    public function post(){

		return $this->hasMany(Post::class, 'kategori_id');
	}


}
