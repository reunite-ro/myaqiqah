<?php

class M_cds extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
    
    function save($cd_data){
        if (isset($cd_data['orderid'])) {
            // to update
            $this->db->where(array( 'orderid' => $cd_data['orderid']));
            $this->db->update('order', $cd_data);
        } else {
            // to insert    
            $this->db->insert('order', $cd_data);
        }
            
        return ($this->db->affected_rows() > 0);
    }
    
    function delete($orderid){
        $this->db->where(array('id' => $orderid));
        $this->db->delete('order');
        
        return ($this->db->affected_rows() > 0);
    }
    
    function get_by_id($orderid){
        $q = $this->db->get_where('order', array('orderid' => $orderid));
        if ($q->num_rows() > 0) {
            return $q->row_array();
        }
        return false;
    }
    
    function get_all(){
        $q = $this->db->get('order');
        if ($q->num_rows() > 0) {
            return $q->result_array();
        }
        return false;
    }
    
    
}