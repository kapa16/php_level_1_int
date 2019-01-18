<?php


use Phinx\Migration\AbstractMigration;

class CreateShopTables extends AbstractMigration
{
    public function change()
    {
        //Таблица категорий товаров
        $exists = $this->hasTable('catalogs');
        if (!$exists) {
            $table = $this->table('catalogs', ['comment' => 'Разделы интернет-магазина']);
            $table->addColumn('name', 'string', ['comment' => 'Название раздела'])
                ->create();
        }

        //Таблица товаров
        $exists = $this->hasTable('products');
        if (!$exists) {
            $table = $this->table('products', ['comment' => 'Товарные позиции']);
            $table->addColumn('name', 'string', ['comment' => 'Название'])
                ->addColumn('description', 'text', ['comment' => 'Описание'])
                ->addColumn('price', 'decimal',
                    ['precision' => 10, 'scale' => 2, 'comment' => 'Цена'])
                ->addColumn('catalog_id', 'integer', ['signed' => false])
                ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        }

        //Таблица пользователей
        $exists = $this->hasTable('users');
        if (!$exists) {
            $table = $this->table('users', ['comment' => 'Покупатели']);
            $table->addColumn('name', 'string', ['comment' => 'Имя покупателя'])
                ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        }

        //Таблица заказов
        $exists = $this->hasTable('orders');
        if (!$exists) {
            $table = $this->table('orders', ['comment' => 'Заказы']);
            $table->addColumn('user_id', 'integer', ['signed' => false])
                ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        }

        //Состав заказов
        $exists = $this->hasTable('orders_products');
        if (!$exists) {
            $table = $this->table('orders_products', ['comment' => 'Заказы']);
            $table->addColumn('order_id', 'integer', ['signed' => false])
                ->addColumn('product_id', 'integer', ['signed' => false])
                ->addColumn('total', 'decimal',
                    ['signed' => false, 'default' => 1, 'comment' => 'Количество товарных позиций'])
                ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        }
    }
}
