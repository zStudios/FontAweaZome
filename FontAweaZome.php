<?php


if (!defined('SMF'))
	die('Hacking attempt...');

	function FontAweaZome_add_code(&$codes)
	{
		$codes[] = array(
                'tag' => 'fa',
                'type' => 'unparsed_content',
                'content' =>'<span class="fa $1"></span>',
			);

		$codes[] = array(
                'tag' => 'fa',
                'type' => 'unparsed_content',
                'parameters' =>array(
                    'op' => array('optional' => true, 'value' => '$1', 'match' => '([^<>]{1,192}?)'),
                ),
                'content' =>'<span class="fa $1 {op}"></span>',
		);
	}

	 /* The bbc button */
	function FontAweaZome_add_button(&$buttons)
	{
		global $txt;

		$buttons[count($buttons) - 1][] = array(
			'image' => 'fa',
			'code' => 'Font Aweasome',
			'before' => '[fa]',
			'after' => '[/fa]',
			'description' => $txt['fa']
		);
	}
