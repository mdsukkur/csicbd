<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Complain;
use App\OfficeAddress;
use App\Question;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteViewCtrl extends Controller
{
    public function index()
    {
        $allSlider = Slider::where('status', 1)->get();
        $totalQuestion = Question::all()->count();
        $totalComplain = Complain::all()->count();
        $totalCompany = Company::where('status', 1)->count();
        $totalUser = User::all()->count();

        return view('website.template_layouts.index', compact('allSlider', 'totalQuestion', 'totalComplain', 'totalCompany', 'totalUser'));
    }

    public function myaccount()
    {
        $allCategory = Category::where('status', 1)->orderBy('name', 'asc')->get();
        $allCompany = Company::where('status', 1)->orderBy('name', 'asc')->get();

        $myQuestions = Question::where('user_id', Auth::id())->get();

        $myComplains = Complain::where('user_id', Auth::id())->get();

        return view('website.template_layouts.myAccount', compact('allCategory', 'allCompany', 'myQuestions', 'myComplains'));
    }

    public function contact()
    {
        $officeAddress = OfficeAddress::where('status',1)->get();
        return view('website.template_layouts.contact_us',compact('officeAddress'));
    }

    public function about()
    {
        return view('website.template_layouts.about_us');
    }

    public function term()
    {
        return view('website.template_layouts.privacy');
    }
}
