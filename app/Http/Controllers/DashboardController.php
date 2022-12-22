<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role->name;
        // chck auth login
        if (auth()->user()) {
            if ($role == 'super_admin') {
                return view('Dashboards.SuperAdminDash.dashboard');
            } elseif ($role == 'expert') {
                return view('Dashboards.ExpertDash.dashboard');
            } elseif ($role == 'company') {
                return view('Dashboards.CompanyDash.dashboard');
            } elseif ($role == 'agent') {
                return view('Dashboards.AgentDash.dashboard');
            } else {
                return view('Dashboards.UserDash.dashboard');
            }
        }
    }
}
