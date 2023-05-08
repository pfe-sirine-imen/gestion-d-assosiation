<?php

namespace App\Http\Controllers;
use Botman\Botman\Botman;
use Botman\Botman\Messages\Incoming\Answer;
use Illuminate\Http\Request;

class BotmanController extends Controller
{
   public  function handle(){
        $botman =app('botman');
        $botman->hears('{message}',function ($botman,$message){
                if($message="bonjour"){
                    $this->askName($botman);
                } else{
                    $botman->replay("write 'bonjour' for testing");
                }
        });
        $botman->listen();
   }

   public function askName($botman){
      $botman->ask("Bonjour !",function(Answer $answer){
        $name =$answer->getText();
        $this->say('bienvune',$name);
      });
   }
}
