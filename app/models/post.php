<?php
use Carbon\Carbon;

class Post extends BaseModel
{
		const DATE_FORMAT = 'l jS \\of F Y h:i A';

		public static $rules = array(
			// 'name'		 => 'required|between:1,10',
			'title'      => 'required|max:255',
    		'body'       => 'required|max:5000'
    		//'email' => 'unique:users'

			);

//
    protected $table = 'posts';

    public function getCreatedAtAttribute($value)
{
    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    return $utc->setTimezone('America/Chicago');
}

public function user(){
    return $this->belongsTo('User');
}

}

// public function update($id){
// 	$rules = User::$rules;
// 	$rules['email'] = $rules['email'] . ",$id";
// 	$validator = Validator::make($data = Input::all(), $rules);
// }




