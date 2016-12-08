<?php

class ClassPDO
{

    public $conexion;

    private $dsn;

    private $drive;

    private $host;

    private $database;

    private $username;

    private $password;

    public $resultado;

    public $lastInsertID;

    public $numbersRows;

    function __construct($drive = "mysql", $host = "localhost", $database = "test2", $username = "root", $password = "pws777")
    {
        $this->drive = $drive;
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->conection();
    }

    public function conection()
    {
        $this->dsn = $this->drive . ':host=' . $this->host . ';dbname=' . $this->database;
        try {
            $this->conexion = new PDO($this->dsn, $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "ERROR:" . $getmessage();
            die();
        }
    }

    public function find($table, $query = "", $option = array())
    {
        $fields = "*";
        $parameters = "";
        if (! empty($option["field"])) {
            $fields = $option["field"];
        }
        if (! empty($option["conditions"])) {
            $parameters = " where " . $option["conditions"];
        }
        if (! empty($option["group"])) {
            $parameters .= " group by " . $option["group"];
        }
        if (! empty($option["order"])) {
            $parameters .= " order by " . $option["order"];
        }
        if (! empty($option["limit"])) {
            $parameters .= " limit " . $option["limit"];
        }
        switch ($query) {
            case 'all':
                all:
                $sql = "select $fields from $table" . $parameters;
                $this->result = $this->conexion->query($sql);
                
                foreach (range(0, $this->result->columnCount() - 1) as $colum_index) {
                    $meta[] = $this->result->getColumnMeta($colum_index);
                }
                
                $record = $this->result->fetchALL(PDO::FETCH_NUM);
                
                for ($i = 0; $i < count($record); $i ++) {
                    $j = 0;
                    foreach ($meta as $value) {
                        $row[$i][$value["table"]][$value["name"]] = $record[$i][$j];
                        $j ++;
                    }
                    $this->result = $row;
                }
                
                if (! empty($row)) {
                    $this->result = $row;
                }
                break;
            
            case "first":
                $sql = "select $fields from $table" . $parameters;
                $result = $this->conexion->query($sql);
                $this->result = $result->fetch();
                break;
            case "count":
                $sql = "select count(*) from $table " . $parameters;
                $result = $this->conexion->query($sql);
                $this->result = $result->fetchColumn();
                break;
            
            default:
                gotoall;
        }
        return $this->result;
    }

    public function save($table, $data = array())
    {
        $sql = "select * from $table";
        $result = $this->conexion->query($sql);
        for ($i = 0; $i < $result->columnCount(); $i ++) {
            $meta = $result->getColumnMeta($i);
            $fields[$meta["name"]] = null;
        }
        
        $fieldsToSave = "id";
        $valueToSave = "NULL";
        
        foreach ($data as $key => $value) {
            if (array_key_exists($key, $fields)) {
                $fieldsToSave .= "," . $key;
                $valueToSave .= "," . "\"$value\"";
            }
        }
        $sql = "INSERT INTO $table ($fieldsToSave) values ($valueToSave)";
        
        $this->result = $this->conexion->query($sql);
        return $this->result;
    }

    public function update($table, $data = array())
    {
        $sql = "select * from $table";
        $result = $this->conexion->query($sql);
        for ($i = 0; $i < $result->columnCount(); $i ++) {
            $meta = $result->getColumnMeta($i);
            $fields[$meta["name"]] = null;
        }
        
        if (array_key_exists("id", $data)) {
            $fieldsToSave = "";
            $id = $data["id"];
            unset($data["id"]);
            foreach ($data as $key => $value) {
                if (array_key_exists($key, $fields)) {
                    $fieldsToSave .= $key . "=" . "\"$value\",";
                }
            }
            $fieldsToSave = substr_replace($fieldsToSave, "", - 1);
            $sql = "Update $table SET $fieldsToSave  where $table.id = $id;";
        }
        
        $this->result = $this->conexion->query($sql);
        return $this->result;
    }

    public function delete($table, $condition)
    {
        $sql = "Delete from $table where $condition";
        $this->result = $this->conexion->query($sql);
        return $this->result;
    }
}

?>
