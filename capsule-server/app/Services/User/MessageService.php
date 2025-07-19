<?php

namespace App\Services\User;

use App\Models\Message;

class MessageService
{
    static function getMessages($id = null){
        if(!$id){
            return Message::all();
        }
        return Message::find($id);
    }

    static function addOrUpdateMessage($data, $message){
        
        $message->user_id = 0;// ?
        $message->color = $data["color"]?$data["title"]: $message->color ;
        $message->mood =  $data["mood"]?$data["mood"] :  $message->mood;
        $message->message =  $data["message"]?$data["message"]:  $message->message ;
        $message->media =  $data["media"]?$data["media"]:  $message->media ;
        $message->audio =  $data["audio"]?$data["audio"]:  $message->audio ;
        $message->reveal_date =  $data["reveal_date"]?$data["reveal_date"]:  $message->reveal_date;
        $message->location =  $data["location"]?$data["location"]:  $message->location ;
        $message->ipaddress =  $data["ipaddress"]?$data["ipaddress"]:  $message->ipaddress ;
        $message->privacy =  $data["privacy"]? $data["privacy"]:  $message->privacy ;
        $message->save();

        return $message;
    }
    
    function deleteAllMessage($id= null){
      if(!$id){
            return Message::all();
        }
        $message = Message::find($id);
        $message->delete();
    }
}