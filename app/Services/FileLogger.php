<?php

namespace App\Services;

use App\Contracts\Logger;

class FileLogger implements Logger
{
    public function log(string $message)
    {
        file_put_contents(storage_path('logs/app.log'), $message . PHP_EOL, FILE_APPEND);
    }
}
