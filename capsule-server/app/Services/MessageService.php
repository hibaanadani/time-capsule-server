<?php

namespace App\Services;
use App\Models\Message;

class MessageService
{
    static function getMessages($id = null){
        if(!$id){
            return Message::all();
        }
        return Message::find($id);
    }

    static function addMessage($message, $data){
        
        $message->user_id = $data["user_id"];
        $message->color = $data["color"];
        $message->mood =  $data["mood"];
        $message->message =  $data["message"];
        $message->image =  $data["image"] ;
        $message->audio =  $data["audio"];
        $message->reveal_date =  $data["reveal_date"];
        $message->location =  $data["location"];
        $message->ipaddress =  $data["ipaddress"];
        $message->privacy =  $data["privacy"];

        $message->save();
        return $message;
    }
    
    static function deleteAllMessages($id= null){
      if(!$id){
            return Message::all();
        }
        $message = Message::find($id);
        if($message){
        $message->delete();
        return true;}
        return false;
    }
    static function refreshMessage($id){
       $message = Message::where('id', $id)->first();
        return $message;
        }
    }