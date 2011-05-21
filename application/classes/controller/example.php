<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Beautiful Example Controller
 *
 * @package     Beautiful
 * @subpackage  Beautiful Example
 * @category    Controller
 * @author      Luke Morton
 * @copyright   Luke Morton, 2011
 * @license     MIT
 */
class Controller_Example extends Controller {

	public function action_index()
	{
		$this->response->body(new View(new View_Example));
	}

}