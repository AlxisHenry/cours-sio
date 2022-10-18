<?php

function EOL(int $repeat): string 
{
	return str_repeat(PHP_EOL, $repeat);
}