<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
      @include('include.css')


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
        <h4 class="card-title">Quản lý hồ sơ</h4>
         
        <div class="row ">
         <div class="col-sm-8">
         </div>
        <div class="col-sm-4">
        <div class="form-group">
                                    <input type="text" id="roundText" class="form-control round" placeholder="Tra cứu thông tin" onkeyup="seacrh()">
                                </div>
                            </div>
        </div>
                                
      </div>
      <div class="card-content">
        <div class="card-body">

          <!-- Table with outer spacing -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                <th></th>
                  <th>Tên</th>
                  <th>email</th>
                  <th>Số điện thoại</th>
                  <th>Loại bằng</th>
                  <th>ảnh</th>
                  <th>Hồ sơ chi tiết</th>
                  <th>In thông tin</th>
                </tr>
              </thead>
              <tbody style="text-align: center;" id="bodydata">
                <?php $stt=0; foreach($info as $item): $stt++?>
                    <tr>
                        <th scope="row">{{$stt}}</th>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['phone']}}</td>
                        <td>A1</td>
                        <td><img src="/upload/{{$item['arvata']}}" style="border-radius: 10px;max-height: 106px;"></td>
                        <td><a href="/upload/{{$item['file']}}" ><i class="fa fa-download"></i></a></td>
                        <td><a href="/printdocx/{{$item['id']}}" style="font-size: 17px;color: #1b1919;"><i class="fa fa-print"></i></a></td>
    
                    </tr>
                <?php endforeach ?>
              </tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
                </div>
            </div>
               
           
        </div>
    </div>
     @include('include.script')
    <script>
        const seacrh = ()=>{
            let data = document.getElementById('roundText')
            console.log(data.value)
            $.ajax({
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '/search',
                    data: {
                        data:data.value
                    },
                    success:function(data){
                           if(data.length > 0){
                            drawTable(JSON.parse(data))
                           }else{
                             document.getElementById('bodydata').innerHTML =''
                           }
                    }
            })
        }
        const drawTable = (data) =>{
          console.log(data)
          document.getElementById('bodydata').innerHTML =''
          data.forEach((item,index)=>{
          document.getElementById('bodydata').innerHTML +=
          `
            <tr>
                        <th scope="row">${index}</th>
                        <td>${item.name}</td>
                        <td>${item.email}</td>
                        <td>${item.phone}</td>
                        <td>A1</td>
                        <td><img src="/upload/${item.arvata}" style="border-radius: 10px;max-height: 106px;"></td>
                        <td><a href="/upload/${item.item}" ><i class="fa fa-download"></i></a></td>
                        <td><a href="/printdocx/${item.id}" style="font-size: 17px;color: #1b1919;"><i class="fa fa-print"></i></a></td>
    
                    </tr>
          `
           })
        }
    </script>   
</body>
</html>
