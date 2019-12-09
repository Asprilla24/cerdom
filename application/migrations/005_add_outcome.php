<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_outcome extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'date' => array(
                'type' => 'TIMESTAMP',
                'default' => 'now()',
                'null' => FALSE,
            ),
            'amount' => array(
                'type' => 'DECIMAL',
                'constraint' => '14,2',
                'null' => FALSE,
            ),
            'note' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE,
            ),
            'images' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
            'source_id' => array(
                'type' => 'INT',
                'constraint' => '5',
                'null' => FALSE,
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '5',
                'null' => FALSE,
            ),
            'category_id' => array(
                'type' => 'INT',
                'constraint' => '5',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('outcome');
    }

    public function down()
    {
            $this->dbforge->drop_table('outcome');
    }
}