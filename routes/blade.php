<?php


Blade::directive('test',function($val)
{
	return 'test text '.$val;

});