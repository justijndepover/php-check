# PHP Check

[![Latest Version on Packagist](https://img.shields.io/packagist/v/justijndepover/php-check.svg?style=flat-square)](https://packagist.org/packages/justijndepover/php-check)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/justijndepover/php-check.svg?style=flat-square)](https://packagist.org/packages/justijndepover/php-check)

## Installation
You can install the package with composer
```sh
composer require justijndepover/php-check --dev
```

## First usage
After installing the package, you should add a php_cs fixer config file to your project.

The script will automatically detect the presence of the file. If none exists, you will be prompted to install one.
```sh
./vendor/bin/php-check
```

## Usage
The gist of the package is to have a global script that checks your code for possible syntax errors and bugs.
Run this script before you push your changes.

This package provides:
- a global set of php-cs-fixer rules
- an option to check your code for possible syntax errors
- an option to fix your syntax errors
- an option to run phpunit
- an option to run all checks

The script is interactive, so you only have to run it.

```sh
./vendor/bin/php-check
```

## Security
If you find any security related issues, please open an issue or contact me directly at [justijndepover@gmail.com](justijndepover@gmail.com).

## Contribution
If you wish to make any changes or improvements to the package, feel free to make a pull request.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.