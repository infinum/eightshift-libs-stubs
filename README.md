# Eightshift Libs Stubs

This package offers PHPStan stubs for the use with Eightshift Frontend Libs. Currently, it only holds the `Helpers`
stubs, since those are the only ones needed for inspections inside the block files.

## Usage

Install them using composer as

```bash
composer require infinum/eightshift-libs-stubs --dev
```

Then, while developing you should add the stubs to `phpstan.neon.dist`

```neon
bootstrapFiles:
		- %currentWorkingDirectory%/vendor/infinum/eightshift-libs-stubs/eightshift-libs-stubs.php
```

## Modification of the stub generation

The stubs are using the [PHP Stub Generator](https://github.com/Setasign/php-stub-generator). In order to generate
the new or updated stubs, you'll need to update the `eightshift-libs` inside the composer.json, and then generate
new stubs using

```bash
php generate.php
```

This will create the `eightshift-libs-stubs.php` file.

## License

Eightshift Libs Stubs ©2022 Eightshift and Infinum. It is free software, and may be redistributed under the terms
specified in the LICENSE file.
