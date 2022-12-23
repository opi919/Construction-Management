<?php

namespace App\Http\Controllers;

use App\Models\ExpertDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function company_index()
    {
        $companies = User::whereHas('role', function ($query) {
            $query->where('name', 'company');
        })->get();
        $data['companies'] = $companies;
        return view('super_admin.manage_company.index', $data);
    }

    public function create_expert()
    {
        return view('super_admin.manage_expert.create');
    }
    public function create_company()
    {
        return view('super_admin.manage_company.create');
    }

    public function store_expert(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'nid' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'engg_id' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/expert/profile');
            $image->move($destinationPath, $name);
            $user->image = $name;
        }
        $user->role_id = 2;
        $user->save();

        $expert = new ExpertDetails();
        $expert->user_id = $user->id;
        if($request->hasFile('nid')){
            $nid = $request->file('nid');
            $name = time() . '.' . $nid->getClientOriginalExtension();
            $destinationPath = public_path('/images/expert/nid');
            $nid->move($destinationPath, $name);
            $expert->nid = $name;
        }
        if($request->hasFile('engg_id')){
            $engg_id = $request->file('engg_id');
            $name = time() . '.' . $engg_id->getClientOriginalExtension();
            $destinationPath = public_path('/images/expert/engg_id');
            $engg_id->move($destinationPath, $name);
            $expert->engg_id = $name;
        }
        $expert->save();

        return redirect()->route('expert.index')->with('success', 'Expert created successfully');
    }
}
