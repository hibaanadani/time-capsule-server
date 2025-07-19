<?php

namespace App\Services\User;

use App\Models\Message;

class MessageService{

    static function getAllMessages(){
            return Message::all();
    }

    static function getMessagesById($id){
        return Message::find($id);
    }

    static function getMessagesByUser($userId){
        return Message::find($userId);
    }

    static function createMessage($data){
        $message->message =$data["message"]; 
        $message->mood =  $data["mood"];
        $message->image =  $data["image"];
        $message->audio =  $data["audio"];
        $message->color = $data["color"];
        $message->revealdate =  $data["revealdate"];
        $message->privacy =  $data["privacy"];
        $message->location =  $data["location"];
        $message->ipaddress =  $data["ipaddress"];
        $message->save();
        return $message;
    }

}
