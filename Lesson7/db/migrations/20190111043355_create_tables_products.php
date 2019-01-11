<?php


use Phinx\Migration\AbstractMigration;

class CreateTablesProducts extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string')
            ->addColumn('description', 'string')
            ->addColumn('price', 'float')
            ->addColumn('category_id', 'integer', ['null' => true])
            ->addForeignKey('category_id',
                'categories',
                'id',
                ['constraint'=>'category', 'delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
            ->create();
    }
}
