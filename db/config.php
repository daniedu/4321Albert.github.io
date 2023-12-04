<?php

function loadEnv($file)
{
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[$key] = $value;
        }
    }
}

loadEnv('.env');
