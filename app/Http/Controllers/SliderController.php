<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = [
            '1' => "Active",
            '0' => "Inactive",
        ];

        $sliders = Slider::all();

        return view('admin.template_layouts.slider', compact('status', 'sliders'));
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
            $file->move("slider", str_replace(' ', '_', $file_name));
        }

        $all['image'] = isset($file_name) ? str_replace(' ', '_', $file_name) : null;

        Slider::create($all);

        return redirect()->back()->with('store', 'Slider Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated_at = Slider::findorfail($id);

        $all = $request->all();

        if ($request->hasFile('image') && $request['image'] != null) {
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();
            $file->move("slider", str_replace(' ', '_', $file_name));

            // if (isset($updated_at->image)) {
            //     unlink(public_path() . '/slider/' . $updated_at->image);
            // }
        }

        $all['image'] = isset($file_name) ? $file_name : $updated_at->image;

        $updated_at->update($all);

        return redirect()->back()->with('update', 'Slider Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_at = Slider::findorfail($id);

        // unlink(public_path() . '/slider/' . $deleted_at->image);

        $deleted_at->delete();

        return redirect()->back()->with('destroy', 'Slider Successfully Deleted');
    }
}
