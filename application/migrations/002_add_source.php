<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_source extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => FALSE,
            ),
            'beginning_balance' => array(
                'type' => 'DECIMAL',
                'constraint' => '14,2',
                'null' => FALSE,
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '5',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('source');
    }

    public function down()
    {
            $this->dbforge->drop_table('source');
    }
}