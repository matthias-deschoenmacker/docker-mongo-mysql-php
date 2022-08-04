<?php

use App\Actions\Action;
use App\Actions\ActionDispatchType;
use App\Actions\ActionOwner;
use App\Actions\ActionOwnerType;
use App\Actions\ActionType;
use App\Actions\ReplyType;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require('vendor/autoload.php');

$action = new Action(
    new DateTime('NOW'),
    ActionDispatchType::Manual,
    ActionType::PrivateReply,
    ReplyType::Private,
    new ActionOwner(
        'g8e5e87g8d',
        ActionOwnerType::User
    ),
    false,
    0,
    'Yeet testje',
    2,
    true,
    false,
    null,
    '78e48f8we7',
    null,
    null,
);

var_dump($action);
