<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $fillable = [
		'user_id', 'name', 'slug', 'excerpt', 'body', 'status', 'data', 'file'
	]; 

	public function user(){

		return $this->belongsTo(User::class);
	}
}
