<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
	// public $timestamps = false;
	protected $fillable = ['title','kategori_id','content','url_seo','created','modified'];
	const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
	const DELETED_AT = 'deleted';
	use SoftDeletes;

	public function kategori(){

		// return $this->hasOne(Kategori::class, 'kategori_id');
		return $this->belongsTo(Kategori::class);
	}

	public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

	public function user(){

		// return $this->hasOne(Kategori::class, 'kategori_id');
		return $this->belongsTo(User::class);
	}

}

