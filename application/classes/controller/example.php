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
		$view = new View('example', new View_Example);
		$this->response->body($view);
	}

}