<?php

namespace App\Models;

use App\Connection;
use PDO;

class Meeting {
    private $coder;
    private $topic;
    private $mytime;

    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->connect();
    }

    public function insert($coder, $topic, $mytime) 
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        
        $sql = "INSERT INTO meeting(coder, topic, mytime) VALUE(?,?,?)";
        $insert = $this->connection->prepare($sql);
        $arrayData = array($this->coder, $this->topic, $this->mytime);
        $resultInsert = $insert->execute($arrayData);
        $idInsert = $this->connection->lastInsertId();
        return $idInsert;
    
    }

    public function getList()
    {
        $sql = "SELECT * FROM meeting";
        $execute = $this->connection->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function update($id, $coder, $topic, $mytime)
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        $sql = "UPDATE meeting SET coder=?, topic=?, mytime=? WHERE id=$id";
        $update = $this->connection->prepare($sql);
        $arrayData = array($this->coder, $this->topic, $this->mytime);
        $resultExecute = $update->execute($arrayData);
        return $resultExecute;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM meeting WHERE id = ?";
        $arrayWhere = array($id);
        $execute = $this->connection->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    } 

    public function delete($id)
    {
        
        $sql = "DELETE FROM meeting WHERE id=?";
        $arrayWhere = array($id);
        $delete = $this->connection->prepare($sql);
        $resultDelete = $delete->execute($arrayWhere);
        return $resultDelete;
    } 


}

