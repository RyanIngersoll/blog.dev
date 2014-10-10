<?php

class Comment extends Eloquent
{
		const DATE_FORMAT = 'l jS \\of F Y h:i A';

		public static $rules = array(
			// 'name'		 => 'required|between:1,10',
			
    		'body'       => 'required|max:5000'

			);


    protected $table = 'comments';
}