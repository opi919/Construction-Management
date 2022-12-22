<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function expert_index()
    {
        $experts = User::whereHas('role', function ($query) {
            $query->where('name', 'expert');
        })->get();
        $data['experts'] = $experts;
        return view('super_admin.manage_expert.index', $data);
    }
    public function company_index(){
        $companies = User::whereHas('role', function ($query) {
            $query->where('name', 'company');
        })->get();
        $data['companies'] = $companies;
        return view('super_admin.manage_company.index', $data);
    }

    public function create_expert(){
        return view('super_admin.manage_expert.create');
    }
    public function create_company(){
        return view('super_admin.manage_company.create');
    }
}
