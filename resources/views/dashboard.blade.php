@extends('layouts.master')
@section('title', 'Inbox')
@section('content')
<style>
    .event-msg-left .msg-single {
        padding: 20px;
    }

    .event-msg-left .event-sideber-search {
        margin-bottom: 0;
    }

    .event-msg-left .event-sideber-search form {
        position: relative;
    }


    .event-msg-left .event-sideber-search form .form-control {
        /* padding: 10px 50px 10px 20px; */
    }

    .event-msg-left .event-sideber-search form input {
        border-radius: 25px;
        font-size: 12px;
    }

    .event-msg-left .event-sideber-search form i {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 15px;
        cursor: pointer;
    }

    .event-msg-left .msg-single.active {
        background: #f7f7f7;
        border-color: #e1e1e1;
    }

    .event-msg-left .msg-single {
        padding: 10px 0px 10px 20px;
    }

    .event-msg-left .msg-single .media-body h3 {
        font-size: 16px;
        font-weight: bold;
        color: #18212c;
        margin-bottom: 0px;
    }

    .event-msg-left .msg-single .media-body p {
        margin-bottom: 0;
        color: #847577;
    }

    .event-msg-left .msg-single .time {
        text-align: right;
    }

    .event-msg-left .msg-single .time h5 {
        font-size: 12px;
        color: #18212c;
        font-weight: 600;
    }

    .event-msg-left .msg-single .time span {
        padding: 5px 8px;
        display: block;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        color: #fff;
        line-height: 12px;
        float: right;
        font-size: 10px;
    }

    .img-fluid-01 {
        max-width: 17% !important;
        height: 11%;
    }

    /*  */
    .custom-dropdown {
        padding: 0 5px;
        cursor: pointer;
    }

    .custom-dropdown .dropdown-menu {
        min-width: 7rem;
    }

    .dropdown-menu.dropdown-menu-right a {
        font-size: 14px;
        padding: 10px 20px;
    }

    .event-chat-ryt .char-area {
        padding: 30px 0;
    }

    .event-chat-ryt .chat-reciver {
        text-align: right;
        padding: 5px 10px;
    }

    .event-chat-ryt .chat-reciver h4 {
        background: #1d2530;
    }

    .event-chat-ryt h4 {
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        display: inline-block;
        padding: 15px 30px;
        border-radius: 5px 5px 0;
        max-width: 440px;
    }

    .event-chat-ryt p {
        color: #847577;
        font-size: 12px;
        font-weight: 600;
    }

    .event-chat-ryt .chat-sender {
        text-align: left;
        padding: 5px 10px;
    }

    .event-chat-ryt .chat-sender h4 {
        background: #e53632;
    }

    .event-chat-ryt .char-type input {
        -ms-flex-preferred-size: 560px;
        flex-basis: 560px;
        font-size: 13px;
        color: #847577;
    }

    .event-chat-ryt .char-type button {
        -ms-flex-preferred-size: 120px;
        flex-basis: 120px;
        margin-left: 20px;
        font-size: 12px;
        font-weight: bold;
        padding: 15px 40px;
        background: #e53632;
    }

    .img-fluid-02 {
        max-width: 61% !important;
    }

    #get_data_details_1 {
        display: none;
    }

    #get_data_details_2 {
        display: none;
    }
    h1,h2,h3,h4,h5,h6{
        margin-bottom: 2px;
    }
    p{
        margin-bottom: 2px;
    }
</style>
<section style="margin: 30px 0;">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="event-msg-left">
                                    <ul class="list-group">
                                        <li class="list-group-item msg-single ">
                                            <div class="event-sideber-search">
                                                <form action="#" method="post">
                                                    <input type="text" class="form-control" placeholder="Search Location">
                                                    <i class="fa fa-search"></i>
                                                </form>
                                            </div>
                                        </li>
                                        @if (Session::has('successMessage'))
                                        <div class="container-fluid hidediv">
                                            <div class="card card-style">
                                                <div class="card-body">
                                                    <div class="alert alert-success">{{ session::get('successMessage') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if (Session::has('errorMessage'))
                                        <div class="container-fluid hidediv">
                                            <div class="card card-style">
                                                <div class="card-body">
                                                    <div class="alert alert-danger">{{ session::get('successMessage') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <li class="list-group-item msg-single active " onclick="append_data('1')">
                                            <div class="media row d-flex">

                                                <img class="mr-3 col-3 img-fluid-01 img-fluid rounded-circle" width="44" height="44" src="assets/img/op.jpg" alt="placeholder image">

                                                <div class=" col-9 d-flex justify-content-between">
                                                    <div class="media-body">
                                                        <h3 class="mt-0">Jassica</h3>
                                                        <p>Sed elementum libero...</p>
                                                    </div>
                                                    <div class="time">
                                                        <h5>07.50 PM</h5>
                                                        <span class="bg-danger">2</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item msg-single active " onclick="append_data('2')">
                                            <div class="media row d-flex">

                                                <img class="mr-3 col-3 img-fluid-01 img-fluid rounded-circle" width="44" height="44" src="assets/img/op.jpg" alt="placeholder image">

                                                <div class=" col-9 d-flex justify-content-between">
                                                    <div class="media-body">
                                                        <h3 class="mt-0">Jassica</h3>
                                                        <p>Sed elementum libero...</p>
                                                    </div>
                                                    <div class="time">
                                                        <h5>07.50 PM</h5>
                                                        <span class="bg-danger">2</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item msg-single active " onclick="append_data('3')">
                                            <div class="media row d-flex">

                                                <img class="mr-3 col-3 img-fluid-01 img-fluid rounded-circle" width="44" height="44" src="assets/img/op.jpg" alt="placeholder image">

                                                <div class=" col-9 d-flex justify-content-between">
                                                    <div class="media-body">
                                                        <h3 class="mt-0">Jassica</h3>
                                                        <p>Sed elementum libero...</p>
                                                    </div>
                                                    <div class="time">
                                                        <h5>07.50 PM</h5>
                                                        <span class="bg-danger">2</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dynamic_data" class="col-md-8"></div>
            </div>
        </div>
    </div>
</section>

<script>
    function append_data(test) {
        // console.log('hello');
        var a = test;

        var view = '<div class="card"><div class="card-body"><div class="event-chat-ryt"><ul class="list-group"><li class="list-group-item"><div class="media row"><div class="media-img col-2"><img class="mr-3 img-fluid img-fluid-02 rounded-circle" src="assets/img/welcome.webp" alt="placeholder image"></div><div class="col-md-10 d-flex justify-content-between"><div class="media-body"><h3 class="mb-0">Jassica' + a + '</h3><p class="mb-0">Online</p></div><button class="btn"><i class="fa fa-ellipsis-v msg-btn"></i></button></div></li><li class="list-group-item"><div class="char-area"><div class="chat-reciver"><h4>Hey How are you?</h4><p>8.00 PM</p></div><div class="chat-sender"><h4>Hey I am fine. you?</h4><p>8.05 PM</p></div><div class="chat-reciver"><h4>Sed elementum libero mattis velit pulvinar, ut sodaleex euismod. In in imperdiet purus, a molestie ante.Nullam a vestibulum diam, et commodo quam.</h4><p>8.10 PM</p></div><div class="chat-sender"><h4>ok Sir</h4><p>8.20 PM</p></div></div><div class="char-type"><form class="d-flex justify-content-center" action="#" method="post"><input type="text" class="form-control" placeholder="Type Here..."><button class="btn btn-danger">SEND</button></form></div></li></ul></div></div></div>';
        console.log(view);
        document.getElementById("dynamic_data").innerHTML = view;
    }
</script>
@endsection