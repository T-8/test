<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Value;
use App\Http\Requests\StoreForm;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tests = Value::all();

        return view('contact.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForm $request)
    {
        //
        $test = new Value;
        $test->name = $request->input('name');
        $test->email = $request->input('email');
        $test->url = $request->input('url');
        $test->gender = $request->input('gender');
        $test->save();
        return redirect('contact/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $test = Value::find($id);

        if($test->gender === 0){
          $gender = '男性';
        }

        if($test->gender === 1){
          $gender = '女性';
        }


        return view('contact.show', compact('test', 'gender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $test = Value::find($id);

        if($test->gender === 0){
          $gender = '男性';
        }
        if($test->gender === 1){
          $gender = '女性';
        }

        return view('contact.edit', compact('test', 'gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //$test = new Value;
        $test = Value::find($id);
        $test->name = $request->input('name');
        $test->email = $request->input('email');
        $test->url = $request->input('url');
        $test->gender = $request->input('gender');
        $test->save();
        return redirect('contact/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $test = Value::find($id);
        $test->delete();
        return redirect('contact/index');
    }
}
