<?php
/**
 * Created by PhpStorm.
 * User: m0jito
 * Date: 15/02/08
 * Time: 15:10
 */

namespace controllers;


class Blog extends \core\controller {

    public function index(){
        echo \helpers\password::make('seijihomegoogle');
    }

}