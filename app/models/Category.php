<?php 

	class Category extends Eloquent
	{
		protected $fillable = [
			'title',
			'slug',
			'status'
		];

		protected $table = 'category';
		
		public function sms()
		{
			return $this->hasMany('sms');
		}
	}


?>