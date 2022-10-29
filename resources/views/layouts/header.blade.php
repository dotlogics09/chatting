<header class="p-3 bg-dark border-bottom">
    <div class="container-fluid">
        <div class="d-flex  col-12 text-white flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex col-3 Event-Management align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="assets/img/op.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                <h4 class="mb-0 px-3 text-bold">Messan<span style="color: #fff;">G</span>er</h4>
            </a>
            <form class="col-8  d-flex justify-content-end ">
                <input type="search" class="form-control ip-search" placeholder="Search..." aria-label="Search" style="width: 50%;">
                <button class="btn btn-primary ip-search-btn"><i class="fa-solid fa-search"></i> </button>
            </form>

            <div class="col-1 text-end">
                <div class="dropdown text-end">
                    <a href="#" class="d-block text-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('uploads/profile_images')}}/{{session('profile_img')}}" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li style="margin-left: 10px;"><img src="{{asset('uploads/profile_images')}}/{{session('profile_img')}}" alt="mdo" width="32" height="32" class="rounded-circle"> {{session('first_name')}} {{session('last_name')}}</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{url('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{url('change-password')}}">Change Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{url('logout')}}">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

{{--<nav class="py-2 text-white bg-dark border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto col-12 d-flex justify-content-around">
            <li class="nav-item"><a href="file:///D:/optional_dashboard/event.html" class="nav-link text-white px-2 active" aria-current="page"><i class="fa-solid fa-house"></i>
                    Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2 dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i> Event's </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="file:///D:/optional_dashboard/activity-event.html">Activity</a></li>
                    <li><a class="dropdown-item" href="file:///D:/optional_dashboard/drafts-event.html">Drafts</a>
                    </li>
                    <li><a class="dropdown-item" href="file:///D:/optional_dashboard/my-event.html">My Event's</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="file:///D:/optional_dashboard/schedule.html" class="nav-link text-white px-2"><i class="fa-solid fa-list"></i> Schedule</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2 dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i> Messages </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="file:///D:/optional_dashboard/inbox.html">Inbox</a></li>
                    <li><a class="dropdown-item" href="file:///D:/optional_dashboard/chat-box.html">Chat Box</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="file:///D:/optional_dashboard/peoples.html" class="nav-link text-white px-2"><i class="fa-solid fa-user"></i>
                    Peoples</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2 dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i> settings </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <!-- <li class="nav-item"><a href="#" class="nav-link text-white px-2 dropdown-toggle" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i>Ghi  </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
            </li> -->



        </ul>

    </div>
</nav>--}}