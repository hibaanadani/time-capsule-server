<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MessageService;
use App\Models\Message;


class MessageController extends Controller{
    

    function getMessages($id= null){
        $messages = MessageService::getMessages($id);
        if($messages){
            return $this->responseJSON($messages);
        return $this->responseJSON(null, "error", 401);
    }
}

    function addOrUpdateMessages(Request $request, $id = null){
        if($id){
            $message = Message::find($id);
        }else{
            $message = new Message;
        }
        $message = MessageService::addOrUpdateMessage($request, $message);
        if($messages){
            return $this->responseJSON($messages);
        return $this->responseJSON(null, "error", 401);
    }
    }
    function deleteAllMessage($id = null){
        $messages = UserService::deleteAllMessage($id);
         if($messages){
            return $this->responseJSON($messages);
        return $this->responseJSON(null, "error", 401);
    }
}

}