<?php
/**
 * @author Mykhailo Behei
 * @author Hien Nguyen
 * @author Richard Lack
 */


namespace HMRTeam\hw4\controllers;


/**
 * Class Controller
 * @package HMRTeam\hw4\controllers
 *
 * 
 */

class Controller {
    //handle views in here
    protected $model;
    protected $view;

    public function __construct()
    {
        $this->model = 0;
        $this->view = 0;
    }
}