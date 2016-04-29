<?php 

	class Sms extends Eloquent
	{	
		protected $fillable = [
			'category_id',
			'title',
			'slug',
			'sms_content',
			'views',
			'status'
		];
		
		public function category()
		{
			return $this->belongsTo('category');
		}
	}

	

?>