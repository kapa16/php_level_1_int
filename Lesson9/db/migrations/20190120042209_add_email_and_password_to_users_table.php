<?php


use Phinx\Migration\AbstractMigration;

class AddEmailAndPasswordToUsersTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('email', 'string', ['comment' => 'Адрес e-mail'])
            ->addColumn('password', 'string', ['comment' => 'Пароль'])
            ->update();
    }
}
