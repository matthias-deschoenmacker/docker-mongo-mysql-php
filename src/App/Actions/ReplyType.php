<?php

namespace App\Actions;

enum ReplyType {
    case Private;
    case Public;
    case NotSpecified;
}
