<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function data(Request $request)
    {

        try {
            $data = Role::select('id', 'name', 'code')->orderBy('id', 'desc');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('alert', function ($row) {
                    $btn = '<div class="badge badge-light-success">Published</div>';
                    return $btn;
                })
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['alert', 'action'])
                ->make(true);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'User failed created.',
            ], 400);
        }
    }

    public  function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:role',
            'status' => 'required|int',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'error' =>
                $validator->errors()->toArray(0)
            ], 400);
        }
        try {
            $role = Role::create([
                'name' => $request->input('name'),
                'code' => $request->input('code'),
                'status' => $request->input('status'),
            ]);

            return response()->json([
                'message' => 'User created.',
                'user' => $role
            ]);
        } catch (\Exception $e) {
            Log::critical('Failed crate role', ['error' => $e->getMessage()]);
            return response()->json([
                'message' => 'User failed created.' . $e->getMessage(),
            ], 400);
        }
    }
}
