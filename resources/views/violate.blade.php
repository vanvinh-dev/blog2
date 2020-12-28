<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badge - Voler Admin Dashboard</title>
     <link href="{{ asset("bootstrap-datepicker.css")}}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
      @include('include.css')

<style>
.datepicker {
    padding:10px 20px 10px 20px!important;
}

.datepicker-dropdown {
    top: 0;
    left: 0
}

.datepicker table tr td.today,
span.focused {
    border-radius: 50% !important
}

thead tr:nth-child(2) {
    background-color: #3f51b5 !important
}

thead tr:nth-child(3) th {
    color: #3f51b5 !important;
    padding-top: 20px;
    padding-bottom: 10px
}

.dow,
.old-day,
.day,
.new-day {
    width: 40px !important;
    height: 40px !important;
    border-radius: 0px !important
}

.old-day:hover,
.day:hover,
.new-day:hover,
.month:hover,
.year:hover,
.decade:hover,
.century:hover {
    border-radius: 50% !important;
    background-color: #eee
}

.prev,
.next,
.datepicker-switch {
    border-radius: 0 !important;
    padding: 20px 10px !important;
    text-transform: uppercase;
    font-size: 20px;
    color: #fff;
    opacity: 0.8
}

.prev:hover,
.next:hover,
.datepicker-switch:hover {
    background-color: inherit !important;
    opacity: 1
}
</style>
</head>
<body>
    <div id="app">
    <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{ asset("dist/assets/images/logo.svg")}}" alt="" srcset="">
    </div>
    @include('include.menuql')
</div>
</div>
        <div id="main">
          @include('include.header')
            
            <div class="main-content container-fluid">
                <div id="basic-table">
                 <div class="col-12 col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lập biên bản xử lý</h4>
                         <a style="color: #099a8c;font-weight: bold;"><?php echo $info ?> </a>
                        <div class="row ">
                                <div class="col-sm-4">
                                        <div class="form-group">
                                                    <input type="text" id="roundText" class="form-control round" placeholder="Nhập mã lớp, tên lớp" >
                                        </div>
                                </div>
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-info btn-sm" onclick="searchZoom()">Tra cứu</a>
                                </div>
                                </div>
                        </div>
                        <div class="card-header">
                        <h4 class="card-title mb-20" style="margin-bottom: 50px;">Thành viên trong lớp</h4>
                        <div class="row " id="codeclass">
                            
                        
                        </div>
                        </div>
          
               
           
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lập biên bản</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
           
        </div>
        <div class="modal-body">
             <form class="form form-horizontal" action="/createVipham" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-body">
                    <div class="row">
                    <div class="col-md-4">
                        <label>Người vi phạm</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="first-name" class="form-control" name="member" placeholder="Họ và tên" required>
                    </div>
                    <div class="col-md-4">
                        <label>Thời gian</label>
                    </div>
                    <div class="col-md-8 form-group">
                         <input  type="text" id="date"  class="datepicker mr-5 form-controll" placeholder="Thời gian vi phạm" name="date" style="width: 100%;text-align: center;    border: 1px #dfe3e7 solid;">
                    </div>
                    <div class="col-md-4">
                        <label>Thứ</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="contact-info" class="form-control" name="thu" placeholder="Thứ" required>
                    </div>

                     <div class="col-md-4">
                        <label>Địa điểm</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="contact-info" class="form-control" name="adress" placeholder="Địa điểm" required>
                    </div>
                    

                     <div class="col-md-4">
                        <label>Nội dung vi phạm</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <textarea type="text" rows="4" id="contact-info" class="form-control" name="content" placeholder="Nội dung vi phạm" required>
                        </textarea>
                    </div>
                    <div class="col-md-4">
                        <label>Người lập biên bản</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="contact-info" class="form-control" name="applicant" placeholder="Người lập biên bản" required>
                    </div>
                   

                    
                    
                    </div>
                </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu biên bản</button>
                    </div>
                </form>
        </div>
      
        </div>
    </div>
    </div>
     @include('include.script')
      <script src="{{ asset('bootstrap-datepicker.js')}}"></script>
    <script>
        $(document).ready(()=>{
            $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            todayHighlight: true,
            toggleActive: true,
        });
        })
       const searchZoom = ()=>{
           let data = document.getElementById('roundText').value
            $.ajax({
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '/searchZoom',
                    data: {
                        data:data
                    },
                    success:function(data){
                           if(data.length > 0){
                            drawMem(JSON.parse(data))
                           }else{
                             document.getElementById('codeclass').innerHTML =''
                           }
                    }
            })
       }
       const drawMem = (data)=>{
            document.getElementById('codeclass').innerHTML =''
            data.forEach((item)=>{
                 document.getElementById('codeclass').innerHTML +=`
                 <div class="col-xl-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="row no-gutters">
                                    <div class="col-md-12 col-lg-4">
                                        <img src="/upload/${item.arvata}" alt="element 01" class="h-100 w-100 rounded-left">
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <div class="card-body">
                                                <span class="widget-todo-title ml-50">${item.name}</span></br>
                                                    <span class="widget-todo-title ml-50">${item.email}</span></br>
                                                    <span class="widget-todo-title ml-50">${item.phone}</span>
                                        </div>
                                        <div style="    text-align: right;">
                                        <a href="#" class="btn btn-sm btn-success" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="vipham(\'${item.name}\')">Lập biên bản</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                 `
            })
       }
       const vipham = (name)=>{
        document.getElementById('first-name').value = name
       }
    </script>
</body>
</html>
