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
    @include('include.menuql')
</div>
</div>
        <div id="main">
          @include('include.header')
          <div class="main-content container-fluid">
            <section class="tasks">
                    <div class="row" id="widget-todo-list">
                       
                       
                    </div>
                </section>
            </div>
               
           
        </div>
    </div>
     @include('include.script')
     <script>
      $(document).ready(()=>{
        getDataZoom()
      })
      const getDataZoom = ()=>{
        document.getElementById('widget-todo-list').innerHTML = ''
        $.ajax({
            url:"/datazoom",
            type:"GET",
            success:(ret)=>{
                if(ret){
                    let data = JSON.parse(ret)
                    var grouped = _.groupBy(data, function(item) {
                        return item.name;
                    });
                  
                    let keyData = Object.keys(grouped)
                    keyData.forEach((item)=>{
                        document.getElementById('widget-todo-list').innerHTML +=
                            `<div class="col-lg-6">
                                <div class="card widget-todo">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h4 class="card-title d-flex">
                                            <i class='bx bx-check font-medium-5 pl-25 pr-75'>Phòng thi: ${item}</i>
                                            
                                        </h4>
                                        <ul class="list-inline d-flex mb-0">
                                            <li class="d-flex align-items-center">
                                                <i class='bx bx-check-circle font-medium-3 mr-50'></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body px-0 py-1" >
                                        <ul class="widget-todo-list-wrapper" id="list${item}">
                                       
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            `
                        grouped[item].forEach((e)=>{
                       
                            document.getElementById(`list${item}`).innerHTML+=
                               `<li class="widget-todo-item">
                                                <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                    <div class="widget-todo-title-area d-flex align-items-center">
                                                        <i data-feather="list" class='cursor-move'></i>
                                                        <div class="checkbox checkbox-shadow">
                                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                                            <label for="checkbox1"></label>
                                                        </div>
                                                        <span class="widget-todo-title ml-50">${e.name}</span></br>
                                                        <span class="widget-todo-title ml-50">${e.email}</span></br>
                                                        <span class="widget-todo-title ml-50">${e.phone}</span>
                                                    </div>
                                                    <div class="widget-todo-item-action d-flex align-items-center">
                                                        <div class="badge badge-pill badge-light-success mr-1">frontend</div>
                                                        <div class="avatar bg-warning ">
                                                            <img src="/upload/${e,}" alt="" srcset="">
                                                        </div>
                                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </li>
                               `
                           
                        })
                    })

                }
            },error(err){
                console.log(err)
            }
        })
      }
      const drawDataZoom = ()=>{

      }
     </script>

</body>
</html>
