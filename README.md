<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## PHP  Required Extensions
1) Download and Install imagick
2) Update php.ini file by adding this line
       extension_dir = "localhost/_Location_to_your_php/ext_" or "C:/laragon/bin/php/php-8.1.16-Win32-vs16-x64/ext"
       extension=php_imagick.dll
3) Restart your server and check with the help of this code
    <?php
        phpinfo();
    ?>
## PDF Generator pack
1) https://github.com/barryvdh/laravel-dompdf
## Excel
## QR Code
## e-Mail System

## Composers required
1) composer require barryvdh/laravel-dompdf
2) php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
3) composer require simplesoftwareio/simple-qrcode

## PHP Version 8.0+ Version and latest phpmyadmin is required


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
