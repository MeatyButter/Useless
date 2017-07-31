<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $json = File::get('database/data/categories.json');
        $data = json_decode($json);
        foreach( $data as $obj ):
        	Category::create(array(
        		'parent_id' => $obj->parent_id,
        		'name' 		=> $obj->name,
        		'slug' 		=> $obj->slug
        	));
        endforeach;
    }
}
