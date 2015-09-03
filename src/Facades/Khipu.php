<?php namespace FreshworkStudio\LaravelKhipu\Facades;

use Illuminate\Support\Facades\Facade;

class Khipu extends Facade
{
	protected static function getFacadeAccessor()
	{
		return \FreshworkStudio\Khipu\Khipu::class;
	}
}