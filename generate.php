<?php

declare(strict_types=1);

use setasign\PhpStubGenerator\PhpStubGenerator;
use setasign\PhpStubGenerator\Reader\AllFiles;

require_once __DIR__ . '/vendor/autoload.php';
require 'vendor/php-stubs/wordpress-stubs/wordpress-stubs.php';

$generator = new PhpStubGenerator();
$generator->addSource(
	'eightshift-libs-stubs',
	new AllFiles(
		__DIR__ . '/vendor/infinum/eightshift-libs/src/Helpers',
	)
);
$output = $generator->generate();

// Cleanup.
$output = str_replace('namespace EightshiftLibs\\', 'namespace EightshiftBoilerplateVendor\\EightshiftLibs\\', $output);
$output = str_replace('\\EightshiftLibs\\', '\\EightshiftBoilerplateVendor\\EightshiftLibs\\', $output);
$output = str_replace('use EightshiftLibs\\', 'use EightshiftBoilerplateVendor\\EightshiftLibs\\', $output);
$output = str_replace(
	'EightshiftBoilerplateVendor\\EightshiftBoilerplateVendor\\',
	'EightshiftBoilerplateVendor\\',
	$output
);
$output = str_replace('\\void', 'void', $output);
// Don't delete the weird indentation here. This is deliberate!!!
$output = str_replace('class Components
    {', 'class Components
    {
        use StoreTrait, CssVariablesTrait, SelectorsTrait, AttributesTrait, ObjectHelperTrait, ShortcodeTrait, PostTrait, LabelGeneratorTrait, MediaTrait;
', $output);


file_put_contents(__DIR__ . '/eightshift-libs-stubs.php', $output);
