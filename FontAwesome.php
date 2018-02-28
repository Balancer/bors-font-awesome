<?php

namespace B2;

class FontAwesome
{

/*
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
*/

	static function load()
	{
		if(empty(\bors::$bower_asset_packages['bower-asset/font-awesome']))
			bors_use('https://maxcdn.bootstrapcdn.com/font-awesome/5.0.7/css/font-awesome.min.css');
		else
			bors_use('/bower-asset/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css');
	}
}
