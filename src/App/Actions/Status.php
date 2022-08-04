<?php

namespace App\Actions;

enum Status {
    case Unresolved;
    case Pending;
    case Resolved;
}
