<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Controllers;

use Core\View;
use Core\Controller;

use Language;
use Router;
use Session;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function before()
    {
        // Load the Language file.
        $this->language->load('Welcome');

        // Leave to parent's method the Execution Flow decisions.
        return parent::before();
    }

    /**
     * Define Index page title and load template files.
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcomeText');
        $data['welcomeMessage'] = $this->language->get('welcomeMessage');

        View::renderTemplate('header', $data);
        View::render('Welcome/Welcome', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * The New Style Rendering - create and return a proper View instance.
     */
    public function subPage()
    {
        return View::make('Welcome/SubPage')
            ->shares('title', $this->trans('subpageText'))
            ->withWelcomeMessage($this->trans('subpageMessage'));
    }

}
