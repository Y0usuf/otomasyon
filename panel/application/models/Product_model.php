<?php

class Product_model extends CI_Model
{
    private $tableName = '';

    function __construct()
    {
        parent::__construct();
        $this->tableName = 'products';
    }

    public function get(array $where = array())
    {
        return $this->db
            ->where($where)
            ->get($this->tableName)
            ->row();
    }

    public function get_all(array $where = array(), String $order = 'id DESC')
    {
        return $this->db
            ->where($where)
            ->order_by($order)
            ->get($this->tableName)
            ->result();
    }

    public function add(array $data = array())
    {
        return $this->db
            ->insert($this->tableName, $data);
    }

    public function update(array $where = array(), array $data = array())
    {
        return $this->db
            ->where($where)
            ->update($this->tableName, $data);
    }

    public function delete(array $where = array())
    {
        return $this->db
            ->where($where)
            ->delete($this->tableName);
    }
}
