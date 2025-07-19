<?php

namespace App\Http\Controllers\User;

use App\Models\Task;
use Illuminate\Http\Request;
use  App\Services\User\MessageService;
use App\Http\Controllers\Controller;

class MessageController extends Controller{
    
    function getAllTasks(){
        $tasks = TaskService::getAllTasks();
        return $this->responseJSON($tasks);
    }

    function addOrUpdateTask(Request $request, $id = null){
        $task = new Task;
        if($id){
            $task = TaskService::getAllTasks($id);
        }

        $task = TaskService::createOrUpdateTask($request, $task);
        return $this->responseJSON($task);
    }

}
