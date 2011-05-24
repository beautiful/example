<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Beautiful Example ViewModel
 *
 * @package     Beautiful
 * @subpackage  Beautiful Example
 * @category    ViewModel
 * @author      Luke Morton
 * @copyright   Luke Morton, 2011
 * @license     MIT
 */
class View_Example extends ViewModel {

	public function stylesheets()
	{
		return new Asset_Group('stylesheets');
	}

	public function page_title()
	{
		return 'A Beautiful Example';
	}
	
	public function content()
	{
		return '<p>Beautiful content.</p>';
	}

}