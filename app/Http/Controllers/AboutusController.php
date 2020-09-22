<?php

namespace App\Http\Controllers;

use App\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus = Aboutus::all()->last();
        return view('admin.template_layouts.aboutus', compact('aboutus'));
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

        if ($request->hasFile('image') && $request['image'] != null) {
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move("aboutus", str_replace(' ', '_', $file_name));
        }

        $all['image'] = isset($file_name) ? str_replace(' ', '_', $file_name) : null;

        Aboutus::create($all);

        return redirect()->back()->with('store', 'About US Information Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aboutus $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aboutus $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutus $aboutus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Aboutus $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated_at = Aboutus::findorfail($id);

        $all = $request->all();

        if ($request->hasFile('image') && $request['image'] != null) {
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move("aboutus", str_replace(' ', '_', $file_name));

            // if (isset($updated_at->image)) {
            //     unlink(public_path() . '/aboutus/' . $updated_at->image);
            // }
        }

        $all['image'] = isset($file_name) ? $file_name : $updated_at->image;

        $updated_at->update($all);

        return redirect()->back()->with('update', 'About US Information Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aboutus $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutus $aboutus)
    {
        //
    }
}
