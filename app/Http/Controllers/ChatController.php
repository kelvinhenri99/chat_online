<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function welcome() {

        return  view ('welcome');
    }

    public function chat($id) {

        return  view ('chat',compact(['id']));
    }
}
