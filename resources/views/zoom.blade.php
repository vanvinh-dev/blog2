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
            <section class="tasks">
                   <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tạo phòng thi</h4>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Tên phòng thi</label>
                            <input type="text" class="form-control" id="name" placeholder="tên phòng thi">
                        </div>

                        <div class="form-group">
                            <label for="code">Mã phòng thi</label>
                            <input type="text" class="form-control" id="code" placeholder="mã phòng thi">
                        </div>

                        <div class="form-group">
                            <label for="quanlity">Số lượng </label>
                            <input type="number" id="quanlity" class="form-control" placeholder="Số lượng">
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="adress">Địa điểm thi</label>
                            <input type="text" class="form-control" id="adress" placeholder="Địa điểm thi" >
                        </div>
                        <div class="form-group">
                            <label for="date" >Ngày dự thi</label>
                            <input  type="text" id="date"  class="datepicker mr-5 form-controll" placeholder="Chọn ngày ban hành" name="date" style="width: 100%;text-align: center;    border: 1px #dfe3e7 solid;">
                          </div>
                   
                    </div>
                   
                    <div class="col-lg-8">
                            <div class="widget-todo">
                            <div class="card-header" style="padding-left:0px">
                              <h4 class="card-title">Thí sinh dự thi</h4>
                            </div>
                                <div class="card-body px-0 py-1">
                                    <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                                    <?php $stt=0; foreach($member as $item): $stt++?>
                                       <li class="widget-todo-item">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="{{$item['id']}}" value="{{$item['id']}}">
                                                        <label for="{{$item['id']}}"></label>
                                                    </div>
                                                    <div>
                                                    <span class="widget-todo-title ml-50">{{$item['name']}}</span></br>
                                                    <span class="widget-todo-title ml-50">{{$item['email']}}</span></br>
                                                    <span class="widget-todo-title ml-50">{{$item['phone']}}</span>
                                                    </div>
                                                  
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="">
                                                        <img src="/upload/{{$item['arvata']}}" alt="" srcset="" width="80px" height="80px" style="    border-radius: 50%;">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    <?php endforeach ?>
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                      <a href="##" class="btn btn-info" onclick="saveinfozoom()">Tạo phòng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        </div>
                   </div>
    
                </section>
            </div>
               
           
        </div>
    </div>
     @include('include.script')
     <script src="{{ asset('bootstrap-datepicker.js')}}"></script>
     <script>
      $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        toggleActive: true,
      });
      const saveinfozoom = ()=>{
          let name = document.getElementById('name')
          let code = document.getElementById('code')
          let quanlity = document.getElementById('quanlity')
          let adress = document.getElementById('adress')
          let date = document.getElementById('date')
          let mem = [];
          let arr = []
          let data = document.getElementsByClassName("form-check-input")
            for (var i = 0; data[i]; ++i) {
                if (data[i].checked) {
                    let obj = {
                        name:name.value,
                        code:code.value,
                        quanlity:quanlity.value,
                        adress:adress.value,
                        date:date.value,
                        member:data[i].value,
                        status:"active"
                    }
                    arr.push(obj);
                }
            }
            $.ajax({
            type: 'post',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '/createzoom',
            data: {
                data:arr
            },
            success: function (ret) {
              if(ret){
                  $('#exampleModal').modal('toggle');
                  alert('Tạo phòng thi thành công!')
              }
            }
          });
      }
     </script>

</body>
</html>
