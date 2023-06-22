<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            "name" => "Kreslo kožené",
            "price" => 109.0,
            "amount" => 10,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0003\1\900x900.png'), 
            "featured" => 1,
            "color" => 2,
            "material" => 4,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Drevený stôl",
            "price" => 80.0,
            "amount" => 100,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0004\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Knižnica XXL",
            "price" => 250.0,
            "amount" => 70,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0005\1\900x900.png'), 
            "featured" => 1,
            "color" => 3,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Stolička kuchynská",
            "price" => 50.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0002\1\900x900.png'), 
            "featured" => 1,
            "color" => 3,
            "material" => 1,
            "category" => 1,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rohová sedačka oranžová",
            "price" => 299.0,
            "amount" => 4,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0006\1\900x900.png'), 
            "featured" => 1,
            "color" => 4,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detská Stolička",
            "price" => 19,
            "amount" => 20,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0007\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 1,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Hojdacie kreslo",
            "price" => 7.00,
            "amount" => 6,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0009\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detské kreslo",
            "price" => 38.0,
            "amount" => 45,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0010\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kreslo kožené",
            "price" => 125.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0011\1\900x900.png'), 
            "featured" => 0,
            "color" => 5,
            "material" => 4,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kreslo kožené",
            "price" => 125.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0012\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 4,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kreslo kožené s opierkou",
            "price" => 430.0,
            "amount" => 9,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0013\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 4,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kreslo kožené s opierkou",
            "price" => 430.0,
            "amount" => 9,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0014\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 4,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Sklápacie kreslo",
            "price" => 180.0,
            "amount" => 100,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0015\1\900x900.png'), 
            "featured" => 0,
            "color" => 7,
            "material" => 3,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Sklápacie kreslo",
            "price" => 220.0,
            "amount" => 45,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0016\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rozkladacie kreslo",
            "price" => 170.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0017\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 3,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Trojpohovka",
            "price" => 430.0,
            "amount" => 20,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0018\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Príručný stolík",
            "price" => 8.0,
            "amount" => 4,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0019\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Príručný stolík",
            "price" => 8.0,
            "amount" => 4,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0020\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Konferenčný stolík",
            "price" => 33.0,
            "amount" => 50,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0021\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Konferenčný stolík",
            "price" => 33.0,
            "amount" => 50,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0022\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Podnožka",
            "price" => 80.0,
            "amount" => 1,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0023\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Pracovný stôl",
            "price" => 26.0,
            "amount" => 15,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0024\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Pracovný stôl",
            "price" => 126.0,
            "amount" => 26,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0025\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Pracovný stôl",
            "price" => 100.0,
            "amount" => 50,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0026\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detský stolík",
            "price" => 23.0,
            "amount" => 15,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0027\1\900x900.png'), 
            "featured" => 0,
            "color" => 7,
            "material" => 2,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Policový diel",
            "price" => 120.0,
            "amount" => 40,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0028\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Skriňová zostava",
            "price" => 680.0,
            "amount" => 5,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0029\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Skriňa",
            "price" => 535.0,
            "amount" => 15,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0030\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Skriňa",
            "price" => 299.0,
            "amount" => 11,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0031\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Knižnica",
            "price" => 55.0,
            "amount" => 35,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0032\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Knižnica",
            "price" => 109.0,
            "amount" => 35,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0033\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Úložný diel s nohami",
            "price" => 90.0,
            "amount" => 4,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0034\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Komoda",
            "price" => 65.0,
            "amount" => 26,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0035\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 6,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Komoda",
            "price" => 40.0,
            "amount" => 35,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0036\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 6,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Komoda",
            "price" => 50.0,
            "amount" => 4,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0037\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 6,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Úložný priestor",
            "price" => 70.0,
            "amount" => 1,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0038\1\900x900.png'), 
            "featured" => 0,
            "color" => 4,
            "material" => 1,
            "category" => 6,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Trojpohovka s ležadlom",
            "price" => 549.0,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0039\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Trojpohovka s ležadlom",
            "price" => 549.0,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0040\1\900x900.png'), 
            "featured" => 0,
            "color" => 7,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Štvorpohovka",
            "price" => 830.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0041\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Štvorpohovka",
            "price" => 830.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0042\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Trojpohovka",
            "price" => 449.0,
            "amount" => 26,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0043\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rohová sedačka",
            "price" => 840.0,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0044\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rohová sedačka",
            "price" => 840.0,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0045\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rohová sedačka",
            "price" => 1109.0,
            "amount" => 5,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0046\1\900x900.png'), 
            "featured" => 0,
            "color" => 7,
            "material" => 3,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rám postele",
            "price" => 400.0,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0047\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Vysoký rám postele",
            "price" => 449.0,
            "amount" => 5,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0048\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Čalúnená posteľ",
            "price" => 1231.0,
            "amount" => 35,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0049\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 3,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rám postele",
            "price" => 159.0,
            "amount" => 4,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0050\1\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rám rozkladacej postele",
            "price" => 319.0,
            "amount" => 15,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0051\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Rám posch.postele",
            "price" => 149.0,
            "amount" => 50,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0052\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detská postieľka",
            "price" => 50.0,
            "amount" => 30,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0053\1\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Postieľka so zásuvkou",
            "price" => 270.0,
            "amount" => 100,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0054\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detská postieľka",
            "price" => 90.0,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0055\1\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 7,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Aleo Vera",
            "price" => 7.0,
            "amount" => 500,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0056\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 5,
            "category" => 8,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Succulent",
            "price" => 5.0,
            "amount" => 100,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0057\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 5,
            "category" => 8,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Clusia",
            "price" => 5.0,
            "amount" => 600,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0058\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 5,
            "category" => 8,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Yucca Elephantipes",
            "price" => 20.0,
            "amount" => 50,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0059\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 5,
            "category" => 8,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Dracena Fragrans",
            "price" => 3.0,
            "amount" => 250,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0060\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 5,
            "category" => 8,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Fejka",
            "price" => 25.0,
            "amount" => 9,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\0061\1\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 5,
            "category" => 8,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Jedálenská stolička",
            "price" => 60.0,
            "amount" => 0,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1007\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 2,
            "category" => 1,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Stolička s poťahom",
            "price" => 64.9,
            "amount" => 56,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1008\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 3,
            "category" => 1,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kancelárska stolička",
            "price" => 200.0,
            "amount" => 13,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1009\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 4,
            "category" => 1,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kreslo látkové",
            "price" => 149.9,
            "amount" => 200,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1010\900x900.png'), 
            "featured" => 0,
            "color" => 8,
            "material" => 3,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Hojdacie kreslo",
            "price" => 219.0,
            "amount" => 20,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1011\900x900.png'), 
            "featured" => 0,
            "color" => 3,
            "material" => 4,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Drevené kreslo",
            "price" => 79.9,
            "amount" => 50,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1012\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 2,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Konferenčný stolík",
            "price" => 29.9,
            "amount" => 13,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1013\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Nočný stolík",
            "price" => 50.0,
            "amount" => 0,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1014\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detský stôl",
            "price" => 32.9,
            "amount" => 14,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1015\900x900.png'), 
            "featured" => 0,
            "color" => 8,
            "material" => 2,
            "category" => 3,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Šatníková skriňa",
            "price" => 360.0,
            "amount" => 22,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1016\900x900.png'), 
            "featured" => 0,
            "color" => 1,
            "material" => 1,
            "category" => 4,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Detská komoda",
            "price" => 82.0,
            "amount" => 16,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1017\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 1,
            "category" => 6,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Drevená komoda",
            "price" => 89.9,
            "amount" => 60,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1018\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 1,
            "category" => 6,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Kožená dvojsedačka",
            "price" => 650.0,
            "amount" => 5,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1019\900x900.png'), 
            "featured" => 0,
            "color" => 2,
            "material" => 4,
            "category" => 5,
        ]);    
        DB::table('products')->insert(
        [
            "name" => "Látková sedacia súprava",
            "price" => 689.0,
            "amount" => 0,
            "description" => "Officiis impedit sed adipisci. Animi est tenetur vitae officiis incidunt. Enim provident temporibus quae animi deleniti. Laudantium nostrum ex in rerum velit et. Nemo veritatis dicta et est. Accusamus in corrupti nesciunt deserunt asperiores sint labore. Sapiente consequuntur adipisci minus perspiciatis a accusamus optio alias. Iure corporis quidem ab inventore ut minima hic assumenda. Dolorum ut laudantium enim culpa quis maxime dolores neque. Repellendus voluptate qui non culpa. Deserunt non provident rem voluptatem. Et et rerum aut voluptates aut pariatur sint. Debitis fugiat et delectus est dicta consequatur sit est. Modi impedit expedita sit. Dignissimos porro alias quis error expedita nulla et dolor. Eligendi ut aut est cum et iure esse. Mollitia aut enim qui minima vitae fugiat aspernatur amet. Dicta nihil saepe dolores possimus non. Optio voluptate voluptatibus quis est. Accusamus nihil omnis sint numquam quibusdam perspiciatis. Quas ad ea officiis. Enim quo id aliquam ducimus est fuga ut.",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),
            "image" => Crypt::encryptString('images\products\1020\900x900.png'), 
            "featured" => 0,
            "color" => 6,
            "material" => 3,
            "category" => 5,
        ]);
    }
}
