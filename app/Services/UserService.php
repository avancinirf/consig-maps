<?php

namespace App\Services;

use App\Models\User;
use DataTables;
// use Yajra\DataTables\Facades\DataTables;

class UserService
{

    /**
     * Constructor
     *
     * @param UserModel $userModel
     */
    public function __construct(
        public User $userModel
    ) {
    }

    /**
     * Create Datatable for list of Users
     *
     * @return mixed
     */
    public function createDataTable()
    {
        $data = $this->userModel->all();
        return DataTables::of($data)
            ->addColumn('actions', function ($row) {
                return "<button class='btn btn-sm btn-primary btnVerUser' data-id='$row->id'><i class='bi bi-list' title='Ver User'></i></button>";
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

}
