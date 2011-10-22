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
	
	public function action_partial()
	{
		$view = new View('example', new View_Example);
		$view->template()->partial('header', 'header');
		$this->response->body($view);
	}
		
	public function action_oldschool()
	{
		$view = new View(
			new Template_PHP('oldschool'),
			array(
				'page_title' => 'An example title',
				'content'    => '<p>This is a para.</p>',
			));
		$this->response->body($view);
	}
	
	public function action_json()
	{
		$view = new View(
			new Template_JSON('example'),
			new View_Example);
		$this->response->body($view);
	}

}