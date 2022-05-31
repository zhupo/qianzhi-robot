<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Product extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function detail()
    {
        return $this->view->fetch();
    }

    public function list()
    {
        return $this->view->fetch();
    }
}