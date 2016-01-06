yii2-sweet-submit
-----------
[![version](https://img.shields.io/packagist/v/light/yii2-sweet-submit.svg?style=flat-square)](https://packagist.org/packages/light/yii2-sweet-submit)
[![Download](https://img.shields.io/packagist/dt/light/yii2-sweet-submit.svg?style=flat-square)](https://packagist.org/packages/light/yii2-sweet-submit)
[![Issues](https://img.shields.io/github/issues/lichunqiang/yii2-sweet-submit.svg?style=flat-square)](https://github.com/lichunqiang/yii2-sweet-submit/issues)

By default `yii.js` using browser's `confirm` function to show confirm message.This library used `sweet-alert` to instead it:

![before](./media/before.gif)

![after](./media/after.gif)

## Install

```
$ composer require light\yii2-sweet-submit=*
```

## Usage

you can depends this in your assets:

```
class AppAsset extends AssetBundle
{
    //..

    public $depends = [
        //your other depends
        'light\widgets\SweetSubmitAsset'
    ];
}
```

Or directly inject in the view:

```
use light\widgets\SweetSubmitAsset;

SweetSubmitAsset::register($this);
```

Once you had depends it in your project, `yii.swal` is available. What's this? It's just the [sweet-alert](http://t4t5.github.io/sweetalert/), now you can use it:

```
//your some.js
yii.swal('Opps. this is shown by sweet-alert');
```

There is more usage you can find from [document](http://t4t5.github.io/sweetalert/)

## License

![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
