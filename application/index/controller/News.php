<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class News extends Frontend
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