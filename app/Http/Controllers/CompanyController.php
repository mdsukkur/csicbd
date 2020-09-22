<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategory = Category::orderBy('name','asc')->get();
        $allCompany = Company::orderBy('name','asc')->get();
        $status = [
            '1' => 'Active',
            '0' => 'Inactive'
        ];

        return view('admin.template_layouts.companys', compact('allCompany', 'status', 'allCategory'));
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

        Company::create($all);

        return back()->with('store', "$request->name successfully inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $all = $request->all();

        $updated_at = Company::findorfail($id);

        $updated_at->update($all);

        return redirect()->back()->with('update', "$updated_at->name successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_at = Company::findorfail($id);

        $deleted_at->delete();

        return redirect()->back()->with('destroy', "$deleted_at->name successfully deleted");
    }
}
