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

    static function getMessagesBYUserId($user_id = null){
        return Message::where('user_id', $user_id)->get();
    }
    
    static function getPublicOpenedMessages(){
        $currentDate = new \DateTime(); 
        $currentDate->setTime(0, 0, 0);
        $formattedCurrentDate = $currentDate->format('Y-m-d');

        return Message::where('privacy', 'public')
                      ->where('reveal_date', '<=', $formattedCurrentDate)
                      ->get();
    }

    static function addMessage($message, $data){
        $message->user_id = $data["user_id"];
        $message->title = $data["title"];
        $message->color = $data["color"];
        $message->mood =  $data["mood"];
        $message->message =  $data["message"];
        $message->image =  $data["image"] ;
        $message->audio =  $data["audio"];
        $message->reveal_date =  $data["reveal_date"];
        $message->location =  $data["location"];
        $message->ipaddress =  $data["ipaddress"];
        $message->privacy =  $data["privacy"];
        $message->surprise_mode =  $data["surprise_mode"];
        $message->save();
        return $message;
    }
    static function updateMessage($data, $message){
        $message->user_id = $data["user_id"]? $data["user_id"]: $message->user_id;
        $message->title = $data["title"]? $data["title"]: $message->title;
        $message->color = $data["color"]? $data["color"]: $message->color;
        $message->mood =  $data["mood"]? $data["mood"]: $message->mood;
        $message->message =  $data["message"]? $data["message"]: $message->message;
        $message->image =  $data["image"] ? $data["image"]: $message->image;
        $message->audio =  $data["audio"]? $data["audio"]: $message->audio;
        $message->reveal_date =  $data["reveal_date"]? $data["reveal_date"]: $message->reveal_date;
        $message->location =  $data["location"]? $data["location"]: $message->location;
        $message->ipaddress =  $data["ipaddress"]? $data["ipaddress"]: $message->ipaddress;
        $message->privacy =  $data["privacy"]? $data["privacy"]: $message->privacy;
        $message->surprise_mode =  $data["surprise_mode"]? $data["surprise_mode"]: $message->surprise_mode;
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