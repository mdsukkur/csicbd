<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function numberCheck(Request $request)
    {
        $numberExists = User::where('phone', $request->phone)->first();

        if (is_null($numberExists)) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function editInfo(Request $request)
    {
        $all = $request->all();

        if ((Auth::user()->name ?? null) != null) {

            User::findorfail(Auth::id())->update($all);

            return redirect('MyAccount/#tab-4')->with('update', 'Your Profile Successfully Updated');

        } elseif ((Auth::guard('admin')->user()->name ?? null) != null) {

            Admin::findorfail(Auth::guard('admin')->id())->update($all);

            return redirect()->back()->with('update', 'Your Profile Successfully Updated');
        }
    }

    public function passwordMatch(Request $request)
    {
        if ((Auth::user()->name ?? null) != null) {

            if (Auth::check(Auth::user()->getAuthPassword(), Hash::make($request->old_password))) {
                return 'success';
            } else {
                return 'failed';
            }

        } elseif ((Auth::guard('admin')->user()->name ?? null) != null) {

            if (Auth::guard('admin')->check(Auth::guard('admin')->user()->getAuthPassword(), Hash::make($request->old_password))) {
                return 'success';
            } else {
                return 'failed';
            }

        }
    }

    public function changePass(Request $request)
    {
        $this->validate($request, [
            'password' => ['min:8', 'confirmed']
        ]);

        if ((Auth::user()->name ?? null) != null) {

            DB::table('users')->where('id', Auth::id())->update(['password' => Hash::make($request['password'])]);

            Auth::logout();

            return 'success';

        } elseif ((Auth::guard('admin')->user()->name ?? null) != null) {

            DB::table('admins')->where('id', Auth::guard('admin')->id())->update(['password' => Hash::make($request['password'])]);

            Auth::guard('admin')->logout();

            return 'success';

        }

    }
}
