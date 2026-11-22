<?php

require __DIR__ . '/../index.php';

$failures = 0;

function check(string $label, string $expected, string $actual): void
{
    global $failures;
    if ($expected === $actual) {
        echo "PASS: {$label}" . PHP_EOL;
    } else {
        echo "FAIL: {$label} (expected '{$expected}', got '{$actual}')" . PHP_EOL;
        $failures++;
    }
}

check('default greeting', 'Hello, World!', greet());
check('custom greeting', 'Hello, CodeBuild!', greet('CodeBuild'));

// A non-zero exit code makes the CodeBuild build fail
exit($failures > 0 ? 1 : 0);
