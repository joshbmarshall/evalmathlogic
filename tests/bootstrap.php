<?php

include dirname(__DIR__) . '/src/EvalMath/EvalMath.php';

// Handle both PHP5 and PHP7 tests
if (!class_exists('\PHPUnit_Framework_TestCase') && class_exists('\PHPUnit\Framework\TestCase'))
    class_alias('\PHPUnit\Framework\TestCase', '\PHPUnit_Framework_TestCase');
