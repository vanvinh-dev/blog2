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
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card widget-todo">
                                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h4 class="card-title d-flex">
                                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>
                                    </h4>
                                    <ul class="list-inline d-flex mb-0">
                                        <li class="d-flex align-items-center">
                                            <i class='bx bx-check-circle font-medium-3 mr-50'></i>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle mr-1" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class='bx bx-sort mr-50 font-medium-3'></i>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" role="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body px-0 py-1">
                                    <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                                        <li class="widget-todo-item">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Add SCSS and JS files if
                                            required</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-success mr-1">frontend</div>
                                                    <div class="avatar bg-warning ">
                                                        <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Check all the changes that you did,
                                            before you commit</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-danger mr-1">backend</div>
                                                    <div class="avatar bg-warning ">
                                                        <img src="assets/images/avatar/avatar-s-2.png" alt="" srcset="">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item completed">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox3" checked>
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs & Pinterest
                                            Post</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                                                    <div class="avatar bg-rgba-primary m-0 mr-50">
                                                        <img src="assets/images/avatar/avatar-s-3.png" alt="" srcset="">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox4">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Fresh Design Web & Responsive
                                            Miracle</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-info mr-1">Design</div>
                                                    <div class="avatar bg-warning ">
                                                        <img src="assets/images/avatar/avatar-s-4.png" alt="" srcset="">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox5">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Add Calendar page and source and
                                            credit page in
                                            documentation</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-warning mr-1">Javascript</div>
                                                    <div class="avatar bg-warning ">
                                                        <img src="assets/images/avatar/avatar-s-5.png" alt="" srcset="">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class='cursor-move'></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox6">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                                                    <div class="avatar bg-warning ">
                                                        <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                                    </div>
                                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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
