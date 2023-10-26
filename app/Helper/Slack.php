<?php

use Illuminate\Support\Facades\Log;

function notification($msgTitle, \Exception $e)
{
    // $payload = [
    //     "blocks" => [
    //         [
    //             "type" => "header",
    //             "text" => [
    //                 "type" => "plain_text",
    //                 "text" => ":warning: The Environtment is " . env("APP_ENV"),
    //                 "emoji" => true
    //             ]
    //         ],
    //         [
    //             "type" => "section",
    //             "text" => [
    //                 "type" => "mrkdwn",
    //                 "text" => "`" . $msgTitle . "`"
    //             ]
    //         ],
    //         [
    //             "type" => "divider"
    //         ],
    //         [
    //             "type" => "section",
    //             "text" => [
    //                 "type" => "mrkdwn",
    //                 "text" => "• TimeServer: " . date("Y-M-d H:i:s") . " \n • Line: " . $e->getLine() . " \n • Message: ```" . $e->getMessage() . "``` • File: ```" . $e->getFile() . "```"
    //             ]
    //         ],
    //         [
    //             "type" => "section",
    //             "text" => [
    //                 "type" => "mrkdwn",
    //                 "text" => "PLEASE CHECK WOOOOYYYYY!!!!!!!"
    //             ]
    //         ],
    //         [
    //             "type" => "section",
    //             "text" => [
    //                 "type" => "mrkdwn",
    //                 "text" => "cc: @here"
    //             ]
    //         ],
    //     ]
    // ];
    // Log::withContext($payload);
    // Log::critical("Failed Register", [
    //     "type" => "section",
    //     "text" => [
    //         "type" => "mrkdwn",
    //         "text" => "• TimeServer: " . date("Y-M-d H:i:s") . " \n • Line: " . $e->getLine() . " \n • Message: ```" . $e->getMessage() . "``` • File: ```" . $e->getFile() . "```"
    //     ]
    // ]);
}
