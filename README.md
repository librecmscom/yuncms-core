# Core Extension for YUNCMS


[![Latest Stable Version](https://poser.pugx.org/yuncms/yii2-core/v/stable.png)](https://packagist.org/packages/yuncms/yii2-core)
[![Total Downloads](https://poser.pugx.org/yuncms/yii2-core/downloads.png)](https://packagist.org/packages/yuncms/yii2-core)
[![Reference Status](https://www.versioneye.com/php/yuncms:yii2-core/reference_badge.svg)](https://www.versioneye.com/php/yuncms:yii2-core/references)
[![Build Status](https://img.shields.io/travis/yuncms/yii2-core.svg)](http://travis-ci.org/yuncms/yii2-core)
[![License](https://poser.pugx.org/yuncms/yii2-core/license.svg)](https://packagist.org/packages/yuncms/yii2-core)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist yuncms/yii2-core
```

or add

```json
"yuncms/yii2-core": "~2.0.0"
```

to the `require` section of your composer.json.

## Configuring your application

Add following lines to your main configuration file:

```php
'bootstrap' => [
    'yuncms\core\Bootstrap',
],
'modules' => [
    'core' => [
        'class' => 'yuncms\core\Module'   
    ],
],
```

## Updating database schema

After you downloaded and configured, the last thing you need to do is updating your database schema by applying the migrations:

```bash
$ php yii migrate/up 
```

## License

This is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md)
for details.