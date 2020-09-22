<?php

namespace App\Http\Controllers;

use App\OfficeAddress;
use Illuminate\Http\Request;

class OfficeAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = [
            '1' => 'Active',
            '0' => "Inactive"
        ];
        $allAddress = OfficeAddress::all();

        return view('admin.template_layouts.officeAddress', compact('status', 'allAddress'));
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

        OfficeAddress::create($all);

        return redirect()->back()->with('store', 'Successfully Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfficeAddress $officeAddress
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeAddress $officeAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfficeAddress $officeAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeAddress $officeAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\OfficeAddress $officeAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $all = $request->all();

        $updated_at = OfficeAddress::findorfail($id)->update($all);

        return redirect()->back()->with('update', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfficeAddress $officeAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_at = OfficeAddress::findorfail($id)->delete();

        return redirect()->back()->with('destroy', 'Successfully Deleted');
    }
}
