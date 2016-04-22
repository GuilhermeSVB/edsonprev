<?php

require_once '../M/DB.php';

abstract class Crud extends DB {

    protected $table;

    abstract public function insert();

    abstract public function update($id);

    public function find($id) {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findbyorder() {
        $sql = "SELECT * FROM $this->table ORDER BY nome";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findAll() {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($cod) {
        $sql = "DELETE FROM $this->table WHERE cod = :cod";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':cod', $cod, PDO::PARAM_INT);
        return $stmt->execute();
    }

}
