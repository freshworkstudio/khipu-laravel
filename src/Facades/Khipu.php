<?php namespace FreshworkStudio\LaravelKhipu\Facades;

use Illuminate\Support\Facades\Facade;

class Khipu extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'khipu_wrapper';
	}
}