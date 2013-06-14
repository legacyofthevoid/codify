<?php

class Thread extends Eloquent{

	public function category(){

		return $this->belongsTo('category');
	
	}
	
}