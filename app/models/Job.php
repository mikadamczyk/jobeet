<?php

implements UserInterface, RemindableInterface

class Job extend Eloquent{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'jobs';

    public function category()
    {
        return $this->hasOne('Categories');
    }

}