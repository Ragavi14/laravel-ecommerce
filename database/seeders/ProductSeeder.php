<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'watch',
            'price' => 300,
            'description' => 'Good Watch',
            'image' => 'https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        Product::create([
            'name' => 'Bag',
            'price' => 550,
            'description' => 'Good Bag',
            'image' => 'https://assets.ajio.com/medias/sys_master/root/20221215/9hWy/639a245df997ddfdbdd3f267/-473Wx593H-460754561-grey-MODEL.jpg'
        ]);
        Product::create([
            'name' => 'Earbuds',
            'price' => 100,
            'description' => 'Awesome product',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmkU_Iug1NKLsc0iP5Y-xnoBm5tmlo7zqOmEuXz9MOITKjDbiqqAf_YNoAkwJEyut7Xnw&usqp=CAU'
        ]);
        //
    }
}
