<?php declare(strict_types=1);

namespace App;

use Bref\Context\Context;
use Bref\Event\S3\S3Event;

class S3Handler extends \Bref\Event\S3\S3Handler
{
    public function handleS3(S3Event $event, Context $context): void
    {
        echo 'processing';
    }
}
