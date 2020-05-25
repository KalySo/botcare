<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Incoming\Answer;

$botman = resolve('botman');


$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->hears('Salut ', BotManController::class.'@newRound');

$botman->hears('hello', function($bot){
    $bot->reply("Hello! How can I help"); 
    $bot->ask("What's your name?", function(Answer $name){
        $text = $name->getText();
        var_dump($text);
        $this->say("Nice to meet you ".$text);
    });
}); 




