<?php

function greet(string $name = 'World'): string
{
    return "Hello, {$name}!";
}

// Only print when run directly (not when included by the tests)
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    echo greet() . PHP_EOL;
}
