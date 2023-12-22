# Laravel CRUD Application [This is a basic structure to complete a task]
# [Time spent 3.5 hours]
# A CRUD application made using laravel
# Using Laragon which is one of the best development environments available for laravel.

# Generated View Files: Create, Edit, Index, Show, etc.
# Generated controller: "ProductController.php"
# Generated model: "Product" 
# Generated validation files: form validation in controller methods
# Generated Migration Files: includes migrations for the "products" table
# Generated routes: inside the crud-package of BondsteinCrud laravel project created- crud-routes.php, routes.php

# Serve the website in the command using cmd/cmder scripts. 
    1. cd BondsteinCrud
    2. php artisan serve
# Please visit this link after serving the laravel website: http://127.0.0.1:8000/products to view the Crud operations in the products page.
# You can create new products, show, edit, delete.

# Ihave commented this line in the CrudGeneratorServiceProvider.php to load routes from a single file. [Can't load multiple routes]
      public function boot()
      {
          // $this->loadRoutesFrom(__DIR__.'/routes.php');
  
       }
       
# NB: please run the below command for the routes to be automatically appended to the laravel projects 'web.php' file when you boot the laravel application.
     php artisan vendor:publish --tag=config 

# if above doesnt work
     php artisan vendor:publish --all

# Thank you, Please get in touch if you want or need more about the project.
