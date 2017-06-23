<?php
class Model_Sidebar extends  Model {
    public function get_sidebar(){
        $row = $this->sql('SELECT * FROM tickets_category');
        return $row;
    }

}