<?php

declare(strict_types=1);

// You may alias the classnames for convenience.
use StubsGenerator\{StubsGenerator, Finder};

$ds = DIRECTORY_SEPARATOR;

require_once 'vendor' . $ds . 'autoload.php';
require_once 'vendor' . $ds . 'php-stubs' . $ds . 'wordpress-stubs' . $ds . 'wordpress-stubs.php';

$generator = new StubsGenerator(StubsGenerator::ALL);

$path = 'vendor' . $ds . 'infinum' . $ds . 'eightshift-libs' . $ds . 'src' . $ds . 'Helpers';

$finder = Finder::create()
	->in([$path])
	->files();

$result = $generator->generate($finder);

$output = $result->prettyPrint();

//var_export($result->getStats());

// Cleanup.
$output = str_replace('namespace EightshiftLibs\\', 'namespace EightshiftBoilerplateVendor\\EightshiftLibs\\', $output);
$output = str_replace('\\EightshiftLibs\\', '\\EightshiftBoilerplateVendor\\EightshiftLibs\\', $output);
$output = str_replace('use EightshiftLibs\\', 'use EightshiftBoilerplateVendor\\EightshiftLibs\\', $output);
$output = str_replace(
	'EightshiftBoilerplateVendor\\EightshiftBoilerplateVendor\\',
	'EightshiftBoilerplateVendor\\',
	$output
);

file_put_contents(__DIR__ . $ds . 'eightshift-libs-stubs.php', $output);
