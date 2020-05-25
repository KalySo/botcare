<?php

namespace App\Conversations;
use BotMan\BotMan\Messages\Incoming\Answer;

use BotMan\BotMan\Messages\Conversations\Conversation;

class FriendlyConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */

    public function askName()
    {
        $this->ask('What is your name?', function(Answer $answer) {
            $this->say('Nice to meet you '. $answer->getText());
        });
    }

    public function run()
    {
        $this->askName();
    }
}
