Chargify Wrapper for Laravel 4
=====================================

This is a wrapper using the chargley chargify SDK. It creates a service provider and facade for autoloading into laravel.

How to Install
---------------

### Laravel 5.0

1.  Install the `andrewlamers/chargify-laravel` package

    ```shell
    $ composer require andrewlamers/chargify-laravel
    ```

1. Update `config/app.php` to activate ChargifyLaravel

    ```php
    # Add `ChargifyLaravelServiceProvider` to the `providers` array
    'providers' => array(
        ...
        Andrewlamers\ChargifyLaravel\ChargifyLaravelServiceProvider::class,
    )

    # Add the `ChargifyLaravelFacade` to the `aliases` array
    'aliases' => array(
        ...
        'Chargify' => Andrewlamers\ChargifyLaravel\ChargifyLaravelFacade::class
    )
    ```

1.  Generate a template Chargify config file

    ```shell
    $ php artisan vendor:publish
    ```

1.  Update `app/config/chargify.php` with your chargify API Information

    ```php
    return array(
        'hostname' => 'mysite.chargify.com',
        'api_key' => 'my chargify api key',
        'shared_key' => 'my chargify shared key'
    );
    ```

### Laravel 4.2

1.  Install the `andrewlamers/chargify-laravel` 1.* version

    ```shell
    $ composer require andrewlamers/chargify-laravel:1.*
    ```

1. Update `config/app.php` to activate ChargifyLaravel

    ```php
    # Add `ChargifyLaravelServiceProvider` to the `providers` array
    'providers' => array(
        ...
        'Andrewlamers\ChargifyLaravel\ChargifyLaravelServiceProvider'
    )

    # Add the `ChargifyLaravelFacade` to the `aliases` array
    'aliases' => array(
        ...
        'Chargify' => 'Andrewlamers\ChargifyLaravel\ChargifyLaravelFacade'
    )
    ```

1.  Generate a template Chargify config file

    ```shell
    $ php artisan config:publish andrewlamers/chargify-laravel
    ```

1.  Update `app/config/packages/andrewlamers/chargify-laravel/config.php` with your chargify API Information

    ```php
    return array(
        'hostname' => 'mysite.chargify.com',
        'api_key' => 'my chargify api key',
        'shared_key' => 'my chargify shared key'
    );
    ```