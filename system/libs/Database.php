<?php 
    class Database extends PDO{

        public function __construct()
        {
            $connect = "mysql:dbname=webgiay; host=localhost; charset=utf8";
            $user = 'root';
            $password= '';
            parent::__construct($connect,$user,$password);
        }
        
        public function select($sql, $data = array()){
            $statement = $this->prepare($sql);
            foreach($data as $key =>$value){
                $statement ->bindParam($key,$value);
            }
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function insert($table, $data){
            $keys = implode(",",array_keys($data));
            $values = ":".implode(", :",array_keys($data));

            $sql = "INSERT INTO $table($keys) VALUES ($values)";
            $statement = $this->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }
            return $statement->execute();
        }

        public function update($table, $data, $cond){

            $valueKeys = "";
            foreach($data as $key => $value){
                $valueKeys .= "$key= :$key,";
            }
            $valueKeys = rtrim($valueKeys,",");

            $sql = "UPDATE $table SET $valueKeys WHERE $cond";
            $statement = $this->prepare($sql);
            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }
            return $statement->execute();
        }

        public function delete($table, $cond, $limit = 1){
            $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
            return $this->exec($sql);
        }

        public function affectedRows($sql, $username, $password)
        {
            $statement = $this->prepare($sql);
            $statement -> execute(array($username, $password));
            return $statement->rowCount();
        }

        public function selectUser($sql, $username, $password){
            $statement = $this->prepare($sql);
            $statement -> execute(array($username, $password));
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>