<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badge - Voler Admin Dashboard</title>
      @include('include.css')


</head>
<body>
    <div id="app">
    <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{ asset("dist/assets/images/logo.svg")}}" alt="" srcset="">
    </div>
    @include('include.menu')
</div>
</div>
        <div id="main">
          @include('include.header')
            
            <div class="main-content container-fluid">
                <section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12" style="width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;">
        <div class="card" style="max-width: 900px;">
            <div class="card-header">
            <h4 class="card-title">Đăng ký dự thi bằng lái xe A1</h4>
              <a style="color: #099a8c;font-weight: bold;"><?php echo $info ?> </a>
            </div>
          
            <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="/register" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-body">
                    <div class="row">
                    <div class="col-md-4">
                        <label>Tên</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="first-name" class="form-control" name="name" placeholder="Họ và tên" required>
                    </div>
                    <div class="col-md-4">
                        <label>Email</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="email" id="email-id" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-4">
                        <label>Số điện thoại</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="contact-info" class="form-control" name="phone" placeholder="Số điện thoại" required>
                    </div>
                    <div class="col-md-4">
                        <label>Ảnh</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="file" id="file" class="form-control" name="arvata" >
                    </div>
                    <div class="col-md-4">
                        <label>Hồ sơ chi tiết</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="file" id="file" class="form-control" name="fileDetail"  >
                    </div>
                    
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Đăng ký</button>
                    </div>
                    </div>
                </div>
                </form>
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

</body>
</html>
