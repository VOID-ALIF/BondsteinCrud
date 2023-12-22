<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel CRUD Application [This is a basic structure to complete a task]
## [Time spent 3.5 hours]

## A CRUD application made using laravel
## Using Laragon which is one of the best development environments available for laravel.

## - Generated View Files: Create, Edit, Index, Show, etc.
## - Generated controller: "ProductController.php"
## - Generated model: "Product" 
## - Generated validation files: form validation in controller methods
## - Generated Migration Files: includes migrations for the "products" table
## - Generated routes: inside the crud-package of BondsteinCrud laravel project created- crud-routes.php, routes.php

## Serve the website in the command using cmd/cmder scripts. 
    1. cd BondsteinCrud
    2. php artisan serve
    
## Please visit this link after serving the laravel website: (http://127.0.0.1:8000/products) to view the Crud operations in the products page.
## You can create new products, show, edit, delete.

## Ihave commented this line in the CrudGeneratorServiceProvider.php to load routes from a single file. [Can't load multiple routes]
      public function boot()
      {
          // $this->loadRoutesFrom(__DIR__.'/routes.php');
  
       }
       
## NB: please run the below command for the routes to be automatically appended to the laravel projects 'web.php' file when you boot the laravel application.
     php artisan vendor:publish --tag=config 
## if above doesnt work
     php artisan vendor:publish --all

## Thank you, Please get in touch if you want or need more about the project.
## Contact Info: 
To contact: [alif.rahman.c@gmail.com](mailto:alif.rahman.c@gmail.com)

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
