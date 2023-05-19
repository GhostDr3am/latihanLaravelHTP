<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Staff;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class StaffController extends Controller
{
    //
    public function index()
    {
        $ar_staff = DB::table('staff')->get(); //query builder for staff
        // $ar_staff = Staff::All(); // query eloquent for staff
        return view('admin.staff.index', compact('ar_staff'));
    }
}
