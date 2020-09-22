<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Complain;
use App\Contactus;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminViewCtrl extends Controller
{
    public function login()
    {
        return view('admin.adminLogin');
    }

    public function index()
    {
        $allCompany = Company::where('status', 1)->get();
        $allCategory = Category::where('status', 1)->get();
        $allUser = User::all();

        $allQuestion = DB::table('questions')
            ->join('users', 'questions.user_id', '=', 'users.id')
            ->select('questions.*', 'users.phone', 'users.name', 'users.email')
            ->get();

        $allComplain = DB::table('complains')
            ->join('users', 'complains.user_id', '=', 'users.id')
            ->select('complains.*', 'users.phone', 'users.name', 'users.email')
            ->get();

        return view('admin.template_layouts.index', compact('allCompany', 'allCategory', 'allUser', 'allQuestion', 'allComplain'));
    }

    public function userManagement()
    {
        $allUser = User::all();
        return view('admin.template_layouts.userManagement', compact('allUser'));
    }

    public function questionManagement()
    {
        $allCompany = Company::where('status', 1)->get();
        $allCategory = Category::where('status', 1)->get();
        $allQuestion = DB::table('questions')
            ->join('users', 'questions.user_id', '=', 'users.id')
            ->select('questions.*', 'users.phone', 'users.name', 'users.email')
            ->get();
            

        return view('admin.template_layouts.questionManagement', compact('allQuestion', 'allCompany', 'allCategory'));
    }

    public function complainManagement()
    {
        $allComplain = DB::table('complains')
            ->join('users', 'complains.user_id', '=', 'users.id')
            ->select('complains.*', 'users.phone', 'users.name', 'users.email')
            ->get();

        return view('admin.template_layouts.complainManagement', compact('allComplain'));
    }

    public function userDetails($user_id)
    {
        $userInfo = User::find($user_id);

        if (!is_null($userInfo)) {

            $allCompany = Company::where('status', 1)->get();
            $allCategory = Category::where('status', 1)->get();
            $allQuestion = Question::where('user_id', $user_id)->get();
            $allComplain = Complain::where('user_id', $user_id)->get();

            return view('admin.template_layouts.singleUser', compact('userInfo', 'allCompany', 'allCategory', 'allQuestion', 'allComplain'));

        } else {

            return redirect('admin/dashboard')->with('destroy', 'There is no account with this ID');

        }


    }

    public function setting()
    {
        return view('admin.template_layouts.settings');
    }

    public function contactUser()
    {
        $contactUser = Contactus::all();
        return view('admin.template_layouts.contactUser', compact('contactUser'));
    }
}
