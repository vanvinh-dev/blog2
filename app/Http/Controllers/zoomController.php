<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\zoom;
use Illuminate\Support\Facades\DB;
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
    public function violate()
    {
        return view('violate')->with('info','' );;
    }
    public function searchZoom(Request $request)
    {
         
        $textseach = request('data');
        $serchs = DB::table('zooms')
        ->join('registers', function($join)
        {
                $join->on('zooms.member', '=', 'registers.id');
        })
        ->where('zooms.name', 'like', '%'.$textseach.'%')
        ->orwhere('zooms.code', 'like', '%'.$textseach.'%')
        ->orwhere('zooms.adress', 'like', '%'.$textseach.'%')
        ->get();
         echo (string)$serchs;
        
    }
    public function datazoom()
    {
        //    $zoom = zoom::all();
        $zoom = DB::table('zooms')
        ->rightJoin('registers', 'registers.id', '=', 'zooms.member')
        ->get();
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
