<?php

/**
 * Created by PhpStorm.
 * User: the_admin
 * Date: 08.04.2017
 * Time: 11:23
 */
class Controller_unity3d extends Controller_Base
{
    public $layouts = "skeleton";

    function index()
    {
        $this->template->vars('ActivateUnity', true);
        $this->template->view('index');
    }

}