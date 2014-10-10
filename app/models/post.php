<?php
use Carbon\Carbon;

class Post extends BaseModel
{
		const DATE_FORMAT = 'l jS \\of F Y h:i A';

		public static $rules = array(
			// 'name'		 => 'required|between:1,10',
			'title'      => 'required|max:255',
    		'body'       => 'required|max:5000'

			);


    protected $table = 'posts';

    public function getCreatedAtAttribute($value)
{
    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    return $utc->setTimezone('America/Chicago');
}

}

