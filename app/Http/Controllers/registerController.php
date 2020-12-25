<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\register;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register')->with('info','' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $file = $request->arvata;
       $file->move('upload', $file->getClientOriginalName());

       $filedetail = $request->fileDetail;
       $filedetail->move('upload', $filedetail->getClientOriginalName());

       $registers  = new register();
       $registers->arvata = $file->getClientOriginalName();
       $registers->file = $filedetail->getClientOriginalName();
       $registers->name = $request->name;
       $registers->email = $request->email;
       $registers->phone = $request->phone;
       $registers->status = 'pendding';
       $registers->save();
       return view('register')->with('info','Đăng ký thành công!' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
         $register  = register::all()->toArray();
         return view('managerMember')->with('info',$register );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $textseach = request('data');
        $serchs = register::FullTextSearch($textseach)->get();
        dd($serchs);
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
    }
}
