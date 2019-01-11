<?php


use Phinx\Seed\AbstractSeed;

class CategoriesSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['name' => 'Процессоры'],
            ['name' => 'Материнские платы'],
            ['name' => 'Видеокарты']
        ];
        $this->table('categories')
            ->insert($data)
            ->save();
    }
}
