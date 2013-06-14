<?php

class Category extends Eloquent{

	protected $table = 'category';

	public function thread(){
		return $this->hasMany('Thread');
	}
	
}