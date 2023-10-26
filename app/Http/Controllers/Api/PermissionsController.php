<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DataTables;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('jwt.verify');
    }
    public function index()
    {
        try {
            $data = Permissions::select('id', 'name', 'code')->orderBy('id', 'desc');
            return DataTables::of($data)
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $role = Permissions::create([
                'name' => $request->input('name'),
                'code' => $request->input('code'),
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

    /**
     * Display the specified resource.
     */
    public function show(Permissions $permissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permissions $permissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permissions $permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permissions $permissions)
    {
        //
    }
}
