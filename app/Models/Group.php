<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	protected $fillable=['title'];

	public static function arrayForSelect(){
        
        
        $array=[];
        $groups=Group::all();
        foreach ($groups as $key => $group) {
        	$array[$group->id]=$group->title;
        }
        return $array;
	}


	public function user(){
		return $this->hasMany(User::class);
	}
}
