# Google Analytics Module

[![Latest Version](https://img.shields.io/github/release/studiobonito/silverstripe-security.svg?style=flat-square)](https://github.com/studiobonito/silverstripe-security/releases)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/studiobonito/silverstripe-security.svg?style=flat-square)](https://scrutinizer-ci.com/g/studiobonito/silverstripe-security)
[![Total Downloads](https://img.shields.io/packagist/dt/studiobonito/silverstripe-security.svg?style=flat-square)](https://packagist.org/packages/studiobonito/silverstripe-security)

## Overview

Provide ModelAdmin replacement for SecurityAdmin in SilverStripe CMS.

## Requirements

- SilverStripe 3.1 or newer.

## Install

### Via Composer

``` bash
$ composer require studiobonito/silverstripe-security
```

### Manually

Copy the 'silverstripe-security' folder to the root of your SilverStripe installation.

## Usage

The model provides a drop in replacement for the default 'Security' tab in the SilverStripe CMS.
Installing the module will replace the default 'Security' tab and replace it with this one.
This 'Security' tab is based on `ModelAdmin` and provides simple filtering which is good for managing sites with large numbers of users/groups.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email support@studiobonito.co.uk instead of using the issue tracker.

## Credits

- [Tom Densham](https://github.com/nedmas)
- [All Contributors](../../contributors)

## License

The BSD-2-Clause License. Please see [License File](LICENSE.md) for more information.