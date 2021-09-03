<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class SpaiRoleController extends Controller
{
    public function index()
    {
        return view('spai.role.index');
    }

    public function staffList()
    {
        $getStaf = \App\Models\User::
        select('users.id as id', 'db5.RKD01_Nama as nama', 'db5.NamaJawatan', 'db5.NamaPejabat', 'db5.RKD01_EmPeribadi', 'db5.RKD01_TelHp', 'db5.RKD01_NoStaf')->
        join('view_staffs as db5', 'db5.RKD01_NoStaf', '=', 'users.staff_id')
            ->where('db5.Aktif', 1)
            ->where('db5.RKD01_Status', 'AKTIF')
            ->distinct('nama')
            ->get();
        return Datatables::of($getStaf)->make(true);
    }

    public function edit($id)
    {
        $getStaf = \App\Models\User::
        select('users.id as id', 'db5.RKD01_Nama as nama', 'db5.NamaJawatan', 'db5.NamaPejabat', 'db5.RKD01_EmPeribadi', 'db5.RKD01_TelHp', 'db5.RKD01_NoStaf')->
        join('view_staffs as db5', 'db5.RKD01_NoStaf', '=', 'users.staff_id')
            ->where('db5.Aktif', 1)
            ->where('db5.RKD01_Status', 'AKTIF')
            ->distinct('nama')
            ->where('users.id', $id)
            ->get();

        $roles = DB::table('roles as db1')
            ->get();

        $modelhasRole = DB::table('model_has_roles as db1')
            ->join('users as db2', 'db2.id', 'db1.model_id')
            ->join('roles as db3', 'db3.id', 'db1.role_id')
            ->where('db2.id', $id)
            ->select('db3.id as role_id', 'db1.model_id')
            ->get();
        return view('spai.role.edit', compact('roles', 'getStaf', 'modelhasRole', 'id'));
    }

    public function update($id, Request $req)
    {

        $destroy_role = DB::table('model_has_roles')->where('model_id', $id)->delete();

        foreach ($req->peranan as $data) {
            $create_role = DB::table('model_has_roles')->insert([
                'model_type' => 'App\Models\User',
                'role_id' => $data,
                'model_id' => $req->test,
            ]);
        }
        alert()->success('Peranan', 'Berjaya dikemaskini');
        return view('spai.role.index');
    }
}
