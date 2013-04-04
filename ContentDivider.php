<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Stefan Schulz-Lauterbach	
 * 
 * @package Divider
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */



/**
 * Class ContentDivider
 *
 * Front end content element "divider".
 * @copyright  CLICKPRESS Internetagentur 2005-2013
 * @author     Stefan Schulz-Lauterbach <http://clickpress.de>
 * @package    Core
 */
class ContentDivider extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_divider';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		return;
	}
}
