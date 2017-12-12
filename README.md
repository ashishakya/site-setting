# site-setting
[![license](https://img.shields.io/github/license/proshore/site-setting.svg)](https://github.com/proshore/site-setting/blob/master/LICENSE)
[![Packagist](https://img.shields.io/packagist/v/proshore/site-setting.svg)](https://packagist.org/packages/proshore/site-setting)

A Laravel based Site Setting with Bootstrap

This package will create a site setting module in your backend. The site setting can be used to dynamically store data in the dataabase and can be used in front end. This package is solely prepare to help build site setting and may have some unknown glitches. Please report issues if you find one.

## Installation
1. Require this package with composer.

```shell
composer require proshore/site-setting:dev-master
```

Laravel 5.5 uses Package Auto-Discovery, so you don't have to manually add the package to the ServiceProvider.


If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
Proshore\SiteSetting\SiteSettingServiceProvider::class,
```

2. Publish the config file. 

3. Run migration
````Shell
php artisan migrate
````

## Publishing
#### Publishing the config file
````shell
php artisan vendor:publish --tag=config
````

#### Publishing views
If you want to override your view then please run the following command and make necessary changes
````shell
php artisan vendor:publish --tag=views
````

## Documentation
To change the layout path. Select your backend default layout
````javascript
'layout-extend-path' => 'layouts.layout'
````

To add site setting options, please change the config file located at 'config/proshore-site-setting.php'. Initially, there are some template to get you started with.
```javascript
'fields' => [
        [    
            'name'  => 'textfield',
            'label' => 'TextField',
            'type'  => 'text'
        ],
        [
            'name'       => 'textarea',
            'label'      => 'TextArea',
            'type'       => 'textarea',
        ],
        [
            'name'    => 'select',
            'label'   => 'Select',
            'type'    => 'select',
            'options' => [
                '0' => 'Active',
                '1' => 'Inactive'            ]
        ],
        [
            'name'  => 'checkbox',
            'label' => 'Checkbox',
            'type'  => 'checkbox'
        ],
        [
            'name'  => 'radio',
            'label' => 'Radio',
            'type'  => 'radio',
            'options' => [
                '0' => 'Active',
                '1' => 'Inactive'
            ]
        ],
    ]
````

## Contributor
Babish Shrestha, Angel Maharjan
