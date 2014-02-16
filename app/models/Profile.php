
<?php

class Profile extends Eloquent{
	
	public function user()
	{
		return $this->belongsTo('User');	
	}
	
	public function profiles()
	{	
		return $this->hasMany('Profile');
	}
}