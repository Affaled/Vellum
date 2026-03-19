<?php

namespace App\Enums;

enum UserRole: string
{
    case Reader = 'reader';
    case Author = 'author';
    case Admin = 'admin';
}
