<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\FriendlyConversation;
use BotMan\BotMan\Messages\Incoming\Answer;


class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
   


    public function handle()
    {
        $botman = app('botman');

        
        $botman->listen();
        
    /*     // our first BotMan command
         $botman->hears('hello', function ($bot) {
            $bot->reply("Hello, I'm Hello World bot!");
        });
    */
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    public function newRound(BotMan $bot)
    {
        $bot->startConversation(new FriendlyConversation());
    }


}
