<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Karyawan_m;

class Karyawan extends ResourceController
{
    use ResponseTrait;
    // get all karyawan
    public function index()
    {
        $model = new Karyawan_m();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    // get single karyawan
    public function show($id = null)
    {
        $model = new Karyawan_m();
        $data = $model->getWhere(['nik' => $id])->getResult();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }
}
