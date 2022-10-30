<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $user_id = session('id');
        $findPeoples = Users::whereNot('id', $user_id)->get();
        
        return view('dashboard', compact('findPeoples'));
    }

    function show_chat(Request $request)
    {
        $people_id = $request->id;

        $get_people_details = Users::find($people_id);

        $view = '';
        $view .= '<div class="card"><div class="card-body"><div class="event-chat-ryt"><ul class="list-group"><li class="list-group-item"><div class="media row"><div class="media-img col-2"><img class="mr-3 img-fluid img-fluid-02 rounded-circle" src="'. asset('uploads/profile_images') .'/'. $get_people_details->profile_img .'" alt="placeholder image"></div><div class="col-md-10 d-flex justify-content-between"><div class="media-body"><h3 class="mb-0">' . $get_people_details->first_name .'</h3><p class="mb-0">Online</p></div><button class="btn"><i class="fa fa-ellipsis-v msg-btn"></i></button></div></li><li class="list-group-item">';

        $view .= '<div class="char-area"><div class="chat-reciver"><h4>Hey How are you?</h4><p>8.00 PM</p></div><div class="chat-sender"><h4>Hey I am fine. you?</h4><p>8.05 PM</p></div><div class="chat-reciver"><h4>Sed elementum libero mattis velit pulvinar, ut sodaleex euismod. In in imperdiet purus, a molestie ante.Nullam a vestibulum diam, et commodo quam.</h4><p>8.10 PM</p></div><div class="chat-sender"><h4>ok Sir</h4><p>8.20 PM</p></div></div>';
        
        $view .= '<div class="char-type"><form class="d-flex justify-content-center" action="'. url('send_message') .'" method="post">'. csrf_token() .'<input type="text" class="form-control" name="message" placeholder="Type Here..."><button class="btn btn-danger">SEND</button></form></div></li></ul></div></div></div>';

        return $view;
    }
}
