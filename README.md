# LaravelCRUD [This is a basic structure to complete task within 05 hours]
# [Time spent 3.5 hours]
# A CRUD application made using laravel
# Using Laragon which is one of the best development environments available for laravel.
# Serve the website in the command using cmd/cmder scripts. 
    1. cd BondsteinCrud
    2. php artisan serve

# Ihave commented this line in the CrudGeneratorServiceProvider.php to load routes from a single file.
      public function boot()
      {
          // $this->loadRoutesFrom(__DIR__.'/routes.php');
  
       }
       
# NB: please run the below command for the routes to be automatically appended to the laravel projects 'web.php' file when you boot the laravel application.
     php artisan vendor:publish --tag=config 

# if above doesnt work
     php artisan vendor:publish --all

# please visit this link after serving the laravel website: http://127.0.0.1:8000/products
# You can create new products, show, edit, delete.
