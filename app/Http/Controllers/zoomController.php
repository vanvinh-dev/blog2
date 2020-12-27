<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\zoom;
class zoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = register::all()->toArray();
        return view('zoom')->with('member',$member);
    }
    public function show()
    {
        return view('qlzoom');
    }
    public function datazoom()
    {
        $zoom = zoom::all()->leftJoin('registers', 'users.id', '=', 'posts.user_id');
        echo (string)$zoom;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $re)
    {
        $arrToSend = request('data');
        zoom::insert($arrToSend);
        return redirect('/qlzoom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
