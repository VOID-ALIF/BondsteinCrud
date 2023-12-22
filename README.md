# Laravel CRUD Application

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

[![Build Status](https://github.com/laravel/framework/workflows/tests/badge.svg)](https://github.com/laravel/framework/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://opensource.org/licenses/MIT)

A CRUD application built with Laravel, using Laragon as the development environment.

## Features

- **Generated View Files:** Includes files for Create, Edit, Index, Show, etc.
- **Generated Controller:** `ProductController.php`
- **Generated Model:** `Product`
- **Generated Validation Files:** Form validation in controller methods
- **Generated Migration Files:** Includes migrations for the "products" table
- **Generated Routes:** Inside the `crud-package` of the `BondsteinCrud` Laravel project (`crud-routes.php`, `routes.php`)

## Getting Started
## !!!!! Important !!!!!
## Download all the files and folders by zipping it and extract the (.zip) file in "BondsteinCrud" folder 
1. Serve the website using the following command in the terminal:

    ```bash
    cd BondsteinCrud
    php artisan serve
    ```
    
2. Visit [http://127.0.0.1:8000/products](http://127.0.0.1:8000/products) to view the CRUD operations in the products page. You can create new products, show, edit, and delete.

## Comments

- A line in `CrudGeneratorServiceProvider.php` has been commented out to load routes from a single file as Laravel cannot load multiple routes.

  ```php
  public function boot()
  {
      // $this->loadRoutesFrom(__DIR__.'/routes.php');
  }
       
## Note
Run the following command for the routes to be automatically appended to the Laravel project's web.php file when you boot the Laravel application:
     
     php artisan vendor:publish --tag=config
If the above doesn't work, you can try:

     php artisan vendor:publish --all

## Contact Information
To get in touch: [alif.rahman.c@gmail.com](mailto:alif.rahman.c@gmail.com)

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
