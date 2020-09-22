<?php

namespace App\Http\Controllers;

use App\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();
        $all['user_id'] = Auth::id();

        Complain::create($all);

        return redirect('MyAccount/#tab-3')->with('store', 'Your Complain Successfully Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complain $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complain $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Complain $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->type == 'a') {


            $updated_at = Complain::findorfail($id)->update([
                'admin_note' => $request->admin_note,
                'status' => 1
            ]);

            return redirect()->back()->with('update', 'Your imaginary Complain Successfully Approved');

        } elseif ($request->type == 'c') {


            $updated_at = Complain::findorfail($id)->update([
                'admin_note' => $request->admin_note,
                'status' => 2
            ]);

            return redirect()->back()->with('destroy', 'Your imaginary Complain Successfully Canceled');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complain $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_at = Complain::findorfail($id)->delete();

        return redirect()->back()->with('destroy', 'Your imaginary Complain Successfully Deleted');

    }
}
