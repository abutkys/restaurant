<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mains = Main::all();
        return view('admin.mains.allmains', compact('mains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Main::create([
            'title' => $request->input('title'),
        ]);
        return redirect()->route('admin.mains')->with('message', 'Dish created successfully !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
        return view('admin.mains.edit', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main $main)
    {
        $main->update([
            'title' => $request->input('title'),
        ]);
        return redirect()->route('admin.mains')->with('message', 'Manu has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function delete(Main $main)
    {
        $main->delete();
        return redirect()->route('admin.mains')->with('message', 'Menu has been successfully deleted  !!!');
    }
    public function admin(){
        $mains = Main::all();
        return view('admin.allmains', compact('mains'));

    }
}
