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
class View extends Beautiful_View {

	/**
	 * @var     string     Default Template Class
	 * @access  protected
	 */
	protected $_default_template = 'Template_Mustache';

}