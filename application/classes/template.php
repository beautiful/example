<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Override default template to use Mustache.
 *
 * @package     Beautiful
 * @subpackage  Beautiful Example
 * @category    View
 * @author      Luke Morton
 * @copyright   Luke Morton, 2011
 * @license     MIT
 */
abstract class Template extends Beautiful_Template {

	/**
	 * @var  string  Default Template Class
	 */
	public static $default_class = 'Template_Mustache';

}