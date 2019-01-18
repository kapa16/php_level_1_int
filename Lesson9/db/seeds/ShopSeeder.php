<?php


use Phinx\Seed\AbstractSeed;

class ShopSeeder extends AbstractSeed
{
    public function run()
    {
        $query = 'TRUNCATE products';
        $result = $this->adapter->query($query);

        $query = 'TRUNCATE catalogs';
        $result = $this->adapter->query($query);

        $data = [
            ['name' => 'Процессоры'],
            ['name' => 'Материнские платы'],
            ['name' => 'Видеокарты'],
        ];
        $this->table('catalogs')->insert($data)->save();

        $query = 'SELECT * FROM catalogs';
        $result = $this->adapter->query($query);

        $catalogs = [];
        while ($catalog = $result->fetch(PDO::FETCH_ASSOC)) {
            $catalogs[$catalog['name']] = $catalog['id'];
        }


    }
}
