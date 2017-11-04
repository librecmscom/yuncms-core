# Core Extension for YUNCMS


[![Latest Stable Version](https://poser.pugx.org/yuncms/yuncms-core/v/stable.png)](https://packagist.org/packages/yuncms/yuncms-core)
[![Total Downloads](https://poser.pugx.org/yuncms/yuncms-core/downloads.png)](https://packagist.org/packages/yuncms/yuncms-core)
[![Build Status](https://img.shields.io/travis/yuncms/yuncms-core.svg)](http://travis-ci.org/yuncms/yuncms-core)
[![License](https://poser.pugx.org/yuncms/yuncms-core/license.svg)](https://packagist.org/packages/yuncms/yuncms-core)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist yuncms/yuncms-core
```

or add

```json
"yuncms/yuncms-core": "~2.0.0"
```

to the `require` section of your composer.json.

## Configuring your application

Add following lines to your main configuration file:



## Updating database schema

After you downloaded and configured, the last thing you need to do is updating your database schema by applying the migrations:

```bash
$ php yii migrate/up 
```

## License

This is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md)
for details.