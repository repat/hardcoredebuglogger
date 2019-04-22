# hardcoredebuglogger
[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/hardcoredebuglogger.svg?style=flat-square)](https://packagist.org/packages/repat/hardcoredebuglogger)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/hardcoredebuglogger.svg?style=flat-square)](https://packagist.org/packages/repat/hardcoredebuglogger)

**hardcoredebuglogger** is a package to debug PHP segfaults, taken from [this GitHub gist](https://gist.github.com/lyrixx/56dfc48fb7e807dd2a229813da89a0dc) by [lyrixx](https://github.com/lyrixx) from Jolicode. He also wrote a [blog article](https://jolicode.com/blog/find-segfaults-in-php-like-a-boss) about it.

## Installation
`$ composer require repat/hardcoredebuglogger`

## Usage
Put this in the file you want to debug:

```php
declare(ticks=1);
\repat\HardCoreDebugLogger::register();
```

## Version
* Version 0.1

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/hardcoredebuglogger&title=hardcoredebuglogger&language=&tags=github&category=software)
