<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactUs = Contactus::all();

        return view('admin.template_layouts.contactUsInfo', compact('contactUs'));
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

        Contactus::create($all);

        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactus $contactus
     * @return \Illuminate\Http\Response
     */
    public function show(Contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactus $contactus
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Contactus $contactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $all = $request->all();

        $updated_at = Contactus::findorfail($id)->update($all);

        return redirect()->back()->with('update','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactus $contactus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_at = Contactus::findorfail($id)->delete();

        return redirect()->back()->with('destroy','Successfully Deleted');
    }
}
