<?php


use Phinx\Seed\AbstractSeed;

class ProductsSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'name' => 'Intel Core i7',
                'description' => 'процессор такой',
                'price' => 10500,
                'category_id' => 1
            ],
            [
                'name' => 'Intel Core i5',
                'description' => 'процессор такой',
                'price' => 7600,
                'category_id' => 1
            ],
            [
                'name' => 'ASUS PRIME X470-PRO',
                'description' => 'AMD AM4 ATX motherboard with M.2',
                'price' => 13520,
                'category_id' => 2
            ],
            [
                'name' => 'ASUS ROG-STRIX-GTX1080TI-O11G-GAMING',
                'description' => 'ROG Strix GeForce® GTX 1080 Ti OC edition ',
                'price' => 69649,
                'category_id' => 3
            ],
        ];
        $this->table('products')
            ->insert($data)
            ->save();
    }
}
