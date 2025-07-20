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
    function addMessage(Request $request){
        $message = new Message;
        $message = MessageService::addMessage($message, $request);
        if($message){
            return $this->responseJSON($message);
        return $this->responseJSON(null, "error", 401);
    }
    }
    function deleteAllMessages($id = null){
        $messages = MessageService::deleteAllMessages($id);
        if($messages){
            return $this->responseJSON($messages);
        return $this->responseJSON(null, "error", 401);
    }
}
  function refreshMessage($id){
        $messages = MessageService::RefreshMessage($id);
        if($messages){
            return $this->responseJSON($messages);
        return $this->responseJSON(null, "error", 401);
    }
}
}