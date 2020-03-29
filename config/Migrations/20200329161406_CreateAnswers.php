<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAnswers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('answers');
        $table->addColumn('questions_id', 'integer', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('value', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignkey("questions_id","questions","id",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->create();
    }
}
