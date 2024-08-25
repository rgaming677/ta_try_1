<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SatuvisiData extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_satuvisi' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_satuvisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug_kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tanggal_ubah' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_satuvisi', true);
        $this->forge->createTable('satuvisi_data');
    }

    public function down()
    {
        $this->forge->dropTable('satuvisi_data');
    }
}
