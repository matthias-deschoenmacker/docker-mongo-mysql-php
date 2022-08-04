<?php

namespace App\Actions;

enum ActionType {
    case RepliedWithCSAT;
    case RepliedWithNPS;
    case PrivateReply;
    case PublicReply;
    /** Add more here */
}
