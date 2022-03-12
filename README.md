

# ** E-commerce in Laravel**

Site de services d'accompagnement touristique

Un site qui vend des paquets sportifs différents avec accompagnement  de la part d'un professionnel,

comme moniteur ski, via-ferrata, aqua rafting,

**Git commandes**

```
go to the branch: git checkout [name]
```

Récupérer localement sur la branche

```
git pull after merge on github
```

Quand on est sur la branche, pour récupérer sur la branche ce qu'il y a dans le main:

```
git merge main 
```



### Migration:



Example pour ajouter une colonne dans la base de données:



```
<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



class UpdateProductTable extends Migration

{

  /**

   \* Run the migrations.

   *

   \* @return void

   */

  public function up()

  {

​    Schema::table('product', function (Blueprint $table) {

​      $table->integer('category')->unsigned()->nullable();

​    });

  }



  /**

   \* Reverse the migrations.

   *

   \* @return void

   */



  

  public function down()

  {

​    Schema::table('product', function (Blueprint $table) {

​      $table->dropColumn('category');

​    });

  }

}
```



```php
php artisan make:migration update_product_table

php artisan migrate --path=database/migrations/2022_03_07_103753_update_product_table.php
```

Pour créer un model et la migration associée:

```
php artisan make:model Categorie --migration
```
---
## Create API REST with:

<p align="center"><a href="https://laravel.com/docs/9.x/eloquent-resources" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a></p>

<p align="center"><a href="https://www.postman.com/" target="_blank"><img src="https://seeklogo.com/images/P/postman-logo-5110850F84-seeklogo.com.png" width="235"></a></p>

*click on logo to be redirected Laravel documentation or Postman website*

1. ### Create controller for API
`php artisan make:controller [TableName]Controller --api --model=[ModelName]`

*This command line created methods (index, store, show, update, destroy) into Controller*

2. ### Create routes into api.php
```php
Route::apiResource('[routename]', [TableName]Controller::class);
```
*This code created all routes to access methods into Controller*

3. ### Routes verification
`php artisan route:list`

4. ### Coding the methods of controller
*Look the code of project in github*

5. ### Postman
    - for a local server, install Postman for desktop
    - create new collection
    - add url route (localhost/...) one to one
    - specify type of request (get, post, put, patch, delete...)
    - click on send button to testing API requests

*The Responses of API requests must be to Json Format*

6. ### Securize access to API
*Coming soon ...*