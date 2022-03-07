

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

