<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BanksController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(\App\Bank $model)
    {
        $this->model = $model;
    }

}
