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
                
            </div>
                @include('include.foooter')
           
        </div>
    </div>
     @include('include.script')
</body>
</html>
