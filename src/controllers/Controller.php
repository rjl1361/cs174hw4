<?php
/**
 * Created by PhpStorm.
 * User: mishabehey
 * Date: 4/20/17
 * Time: 11:30 AM
 */


namespace HMRTeam\hw4\controllers;




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