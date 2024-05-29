<?php

namespace App\Entity\Enum;
  
enum CommentStateEnum : string
{
    case Submitted = 'submitted';
    case Spam = 'spam';
    case Ham = 'ham';
    case PotentialSpam = 'potential_spam';
    case Published = 'published';
    case Rejected = 'rejected';
}
