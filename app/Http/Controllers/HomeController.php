<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('show');
    }
    public function create(Request $request)
    {
        Information::create($request->all());
        return redirect('show')->with(['success'=>'Successfully create infromation']);
    }
    public function show()
    {
        $information=Information::all();
        return view('home',compact('information'));
    }
    public function edit($id)
    {
        $information=Information::findOrFail($id);
        return view('edit',compact('information'));
    }
    public function update(Request $request,$id)
    {
        Information::find($id)->update($request->all());
        return redirect('show');
    }

    public function delete($id)
    {
        Information::destroy($id);
        return redirect('show');
    }

}
