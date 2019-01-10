<?php


use Phinx\Migration\AbstractMigration;

class CreateTableCategories extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('categories');
        $table->addColumn('id', 'integer')
            ->addColumn('name', 'string', ['limit' => 60])
            ->create();
    }
}
