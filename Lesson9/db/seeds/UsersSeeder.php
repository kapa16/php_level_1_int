<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
{
    public function run()
    {
        $query = 'TRUNCATE users';
        $this->adapter->query($query);

        $data = [
            'name' => 'Tom',
            'email' => 'tom@br.ru',
            'password' => password_hash('123', PASSWORD_DEFAULT)
        ];

        $this->table('users')->insert($data)->save();
    }
}
