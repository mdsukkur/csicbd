<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general = General::all()->last();
        return view('admin.template_layouts.general', compact('general'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();

        if ($request->hasFile('logo') && $request['logo'] != null) {
            $file = $request->file('logo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move("general", str_replace(' ', '_', $file_name));
        }

        if ($request->hasFile('icon') && $request['icon'] != null) {
            $files = $request->file('icon');
            $file_names = time() . $files->getClientOriginalName();
            $files->move("general", str_replace(' ', '_', $file_names));
        }

        $all['logo'] = isset($file_name) ? str_replace(' ', '_', $file_name) : null;
        $all['icon'] = isset($file_names) ? str_replace(' ', '_', $file_names) : null;

        General::create($all);

        return redirect()->back()->with('store', 'General Setting Information Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated_at = General::findorfail($id);

        $all = $request->all();
        
        if ($request->hasFile('logo') && $request['logo'] != null) {
            $file = $request->file('logo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move("general", str_replace(' ', '_', $file_name));

            // if (isset($updated_at->logo)) {
            //     unlink(public_path() . '/general/' . $updated_at->logo);
            // }

        }

        if ($request->hasFile('icon') && $request['icon'] != null) {
            $files = $request->file('icon');
            $file_names = time() . $files->getClientOriginalName();
            $files->move("general", str_replace(' ', '_', $file_names));

            // if (isset($updated_at->icon)) {
            //     unlink(public_path() . '/general/' . $updated_at->icon);
            // }

        }

        $all['logo'] = isset($file_name) ? str_replace(' ', '_', $file_name) : $updated_at->logo;
        $all['icon'] = isset($file_names) ? str_replace(' ', '_', $file_names) : $updated_at->icon;


        $updated_at->update($all);

        return redirect()->back()->with('update', 'General Setting Information Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
