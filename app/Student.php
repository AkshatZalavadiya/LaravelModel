<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
	protected $timestamp = false;
	protected $fillable = ['name', 'city'];
} 
