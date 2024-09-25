<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_moncash_columns_to_payment_config extends CI_Migration {

    public function up() {
        // Ajouter les colonnes moncash_client_id, moncash_secret_id, et moncash_mode si elles n'existent pas
        $fields = array(
            'moncash_client_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'moncash_secret_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'moncash_mode' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => TRUE,
            ),
        );

        // Vérifier et ajouter les colonnes si elles n'existent pas
        foreach ($fields as $column => $attributes) {
            if (!$this->db->field_exists($column, 'payment_config')) {
                $this->dbforge->add_column('payment_config', array($column => $attributes));
            }
        }
    }

    public function down() {
        // Supprimer les colonnes ajoutées
        $this->dbforge->drop_column('payment_config', 'moncash_client_id');
        $this->dbforge->drop_column('payment_config', 'moncash_secret_id');
        $this->dbforge->drop_column('payment_config', 'moncash_mode');
    }
}
