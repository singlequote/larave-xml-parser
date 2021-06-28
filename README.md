# Laravel XML made easy!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/singlequote/laravel-xml-parser.svg?style=flat-square)](https://packagist.org/packages/singlequote/laravel-xml-parser)
[![Total Downloads](https://img.shields.io/packagist/dt/singlequote/laravel-xml-parser.svg?style=flat-square)](https://packagist.org/packages/singlequote/laravel-xml-parser)
[![Build Status](https://img.shields.io/travis/singlequote/laravel-xml-parser/master.svg?style=flat-square)](https://travis-ci.org/singlequote/laravel-xml-parser)
[![StyleCI](https://github.styleci.io/repos/137213815/shield?branch=master)](https://github.styleci.io/repos/137213815)

This package is optimized XML handling package for Laravel aiming to be easy and fast.

The main features are

* Fast XML importing with the ability to cast to classes and models
* XML exporting from (nested / value only ) arrays
* Exporting Laravel views to XML

## Installation

You can install the package via composer:

```bash
composer require singlequote/laravel-xml-parser
```

## Usage
This packages comes with a facade which you can use like this `\XML::` or use it in your class like `use XML;`

In depth guides can be found here:

* [Exporting](https://singlequote.github.io/larave-xml-parser/docs/export)
* [Importing](https://singlequote.github.io/larave-xml-parser/docs/import)


```php
$notes = XML::import("notes.xml")
    ->cast('note')->to(NoteModel::class)
    ->expect('note')->as('array')
    ->optimize('camelcase')
    ->get();

```


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@quotec.nl instead of using the issue tracker.


## Credits

- [Wim Pruiksma](https://github.com/wimurk)
- [All Contributors](https://github.com/singlequote/larave-xml-parser/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
