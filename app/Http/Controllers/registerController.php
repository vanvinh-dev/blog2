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
        $serchs = register::query()->where('name', 'like', '%'.$textseach.'%')
        ->orwhere('email', 'like', '%'.$textseach.'%')
        ->orwhere('phone', 'like', '%'.$textseach.'%')->get();;
         echo (string)$serchs;
    }
    public function process($id){
       $data = register::where('id', $id)->get();
        $headers = array(
        "Content-type"=>"text/html",
        "Content-Disposition"=>"attachment;Filename=myfile.docx"
        );
        
        $content = '<!DOCTYPE html>
        <html>
        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        </style>
        <body class="w3-light-grey">

        <!-- w3-content defines a container for fixed size centered content, 
        and is wrapped around the whole page content, except for the footer in this example -->
        <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32"> 
        <h1><b>Thông tin thí sinh dự thi</b></h1>
        <p>Thí sinh dự thi bằng lái xe A1</span></p>
        </header>

        <!-- Grid -->
        <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
        <!-- Blog entry -->
        <div class="w3-card-4 w3-margin w3-white">
            <img src="/w3images/woods.jpg" alt="Nature" style="width:100%">
            <div class="w3-container">
            <h3><b>Hồ sơ chi tiết</b></h3>
            <h5>Hà nội, <span class="w3-opacity">
              '.date("Y/m/d").'
            </span></h5>
            </div>

            <div class="w3-container">
            <p>Họ và tên: '.$data[0]->name.'</p>
            <p>Email: '.$data[0]->email.'</p>
            <p>Số điện thoại: '.$data[0]->phone.'</p>
            </br>
             <h3><b>Hướng dẫn đăng ký</b></h3>
            <p>Bước 1: Đăng kí thi bằng lái xe máy tại Hà Nội:</br>

                Bước 2: Lựa chọn ngày học, ngày thi, địa điểm thi, sân thi.</br>

                Bước 3: Đi học lý thuyết và thực hành tại trung tâm</br>

                Bước 4: Trung tâm sẽ đưa các bạn đi thi</br>

                Bước 5: Bạn qua lấy bằng lái xe tại trung tâm sau 5-7 ngày, hoặc ship về tận nhà.</p></br>
            <div class="w3-row">
                <div class="w3-col m8 s12">

                </div>
                <div class="w3-col m4 w3-hide-small">
                <p><span class="w3-padding-large w3-right"><b>Lê thanh lưu  </b> <span class="w3-tag"></span></span></p>
                </div>
            </div>
            </div>
        </div>
        <hr>

        </body>
        </html>
        ';
        
        return \Response::make($content,200, $headers);
    }
    public function testdocts()
    {
        return view('testdoc');
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
