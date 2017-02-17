#!/usr/local/bin/php
<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$data = Yaml::parse(file_get_contents(__DIR__.'/../res/data.yml'));

print("Let's do this!\n");

foreach ($data as $item) {
    build_state_class($item, file_get_contents(__DIR__.'/../res/StateTemplate.php.txt'), $slugify);
    build_state_test_class($item, file_get_contents(__DIR__.'/../res/StateTestTemplate.php.txt'), $slugify);
}

function build_state_class($item, $template, $slugify)
{
    $name = $item['name'];
    $className = $slugify->slugify(ucwords($name), ['lowercase' => false, 'separator' => '']);
    $classFilename = $className.'.php';

    printf("[Working] %s -> %s\n", $name, $classFilename);

    $classContents = array_reduce(array_keys($item), function ($contents, $key) use ($item) {
        $value = $item[$key];

        if ($key == 'dst') {
            $value = $item[$key] ? 'true' : 'false';
        }

        return str_replace("%%{$key}%%", $value, $contents);
    }, $template);

    $classContents = str_replace("%%slug%%", $slugify->slugify($name), $classContents);
    $classContents = str_replace("%%ClassName%%", $className, $classContents);

    file_put_contents(__DIR__."/../src/{$classFilename}", $classContents);
}

function build_state_test_class($item, $template, $slugify)
{
    $name = $item['name'];
    $className = $slugify->slugify(ucwords($name), ['lowercase' => false, 'separator' => '']);
    $classFilename = $className.'Test.php';

    printf("[Working] %s -> %s\n", $name, $classFilename);

    $classContents = array_reduce(array_keys($item), function ($contents, $key) use ($item) {
        $value = $item[$key];

        if ($key == 'dst') {
            $value = $item[$key] ? 'true' : 'false';
        }

        return str_replace("%%{$key}%%", $value, $contents);
    }, $template);

    $classContents = str_replace("%%slug%%", $slugify->slugify($name), $classContents);
    $classContents = str_replace("%%ClassName%%", $className, $classContents);

    file_put_contents(__DIR__."/../tests/{$classFilename}", $classContents);
}
