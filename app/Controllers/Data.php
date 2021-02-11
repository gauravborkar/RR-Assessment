<?php

namespace App\Controllers;

use App\Models\DataModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Data extends BaseController
{
    /**
     * Get all data
     * @return Response
     */
    public function index()
    {
        $model = new DataModel();
        return $this->getResponse(
            [
                $model->findAll()
            ]
        );
    }
}