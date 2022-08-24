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
parameters:
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

### Trait import issue

Currently, the generator won't pick up the trait import in the `Components` class, so this part you'll need to do yourself after the stubs have been generated.

## License

Eightshift Libs Stubs ©2022 Eightshift and Infinum. It is free software, and may be redistributed under the terms
specified in the LICENSE file.
