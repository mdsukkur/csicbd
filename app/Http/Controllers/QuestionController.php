<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
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
        $all = $request->only('category_id','user_note','transection_id');
        $all['user_id'] = Auth::id();
        $all['company_id'] = $request['company_id_'.$request->category_id];

        Question::create($all);

        return redirect('MyAccount/#tab-2')->with('store', "Your Question Successfully Inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ids = $request->id;
        $answers = $request->answer;
        $message = $request->message;

        for ($i = 0; $i < count($ids); $i++) {

            Question::findorfail($ids[$i])->update([
                'answer' => $answers[$i],
                'admin_note' => $message[$i] ?? null,
                'status' => 1
            ]);

        }

        return "s";
    }


    public function cancel(Request $request, $id)
    {
        $canceled_at = Question::findorfail($id)->update([
            'admin_note' => $request->admin_note,
            'status' => 2
        ]);

        return redirect()->back()->with('destroy', 'Your imaginary Question Successfully Canceled');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_at = Question::findorfail($id)->delete();

        return redirect()->back()->with('destroy', 'Your imaginary Question Successfully Deleted');
    }
}
