<?php

implements UserInterface, RemindableInterface

class Category extend Eloquent{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

    public function job()
    {
        return $this->belongsTo('Jobs');
    }
}