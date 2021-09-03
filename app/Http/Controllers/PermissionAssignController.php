<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class PermissionAssignController extends Controller
{
    public function index()
    {
        $permission = DB::table('permissions as db1')
            ->get();

        return view('spai.permission.index',compact('permission'));
    }

    public function getRoleList()
    {
        $roles = DB::table('roles as db1')
            ->get();
        return Datatables::of($roles)->make(true);

    }

    public function store(Request $request)
    {
        $rolename = $request->input('rolename');
        $permission = $request->input('permission');

        $newrole=Role::create([
            'name' => $rolename,
        ]);

        foreach ($permission as $data) {
            $create_role = DB::table('role_has_permissions')->insert([
                'permission_id' => $data,
                'role_id' => $newrole->id,
            ]);
        }

        return response()->json($newrole);
    }

    public function edit($id)
    {
//        $roles = DB::table('roles')->get();

        $permission = DB::table('permissions as db1')
            ->get();

        $rolehaspermission = DB::table('role_has_permissions as db1')
            ->join('permissions as db3', 'db3.id', 'db1.permission_id')
            ->join('roles','roles.id','db1.role_id')
            ->where('db1.role_id',$id)
            ->get();
//        dd($rolehaspermission);
        return view('spai.permission.edit', compact('permission', 'rolehaspermission', 'id'));
    }

    public function update($id, Request $req)
    {
        $destroy_role = DB::table('role_has_permissions')->where('role_id', $id)->delete();

        $clearcache = Artisan::call('cache:clear');

        foreach ($req->permision as $data) {
            $create_role = DB::table('role_has_permissions')->insert([
                'permission_id' => $data,
                'role_id' => $req->test,
            ]);
        }
        alert()->success('Permisi', 'Berjaya dikemaskini');
        return redirect()->route('Permission');
    }
}
