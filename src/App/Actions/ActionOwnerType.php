<?php

namespace App\Actions;

enum ActionOwnerType {
    case User;
    case Flow;
    case AutomationRecipe;
    case Integration;
}
