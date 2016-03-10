<?php

function html($text) 
{
	return htmlspecialchars($text, ENT_QUOTES, 'utf-8');
}

function htmlout($text) 
{
	echo html($text);
}

function markdown2html($text)
{
	$text = html($text);
	preg_replace('/__(.+?)__/s', '<strong>$1</strong>', $text);
	preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $text);
	preg_replace('/_([^_]+)_/', '<em>$1</em>', $text);
	preg_replace('/\*([^\*]+)\*/', '<em>$1</em>', $text);
	

	return $text;
}