<?php

class Person {
    private $id = 0;
    private $email = null;
    private $senha = null;

    public function setId(int $id) :void
    {
        $this->id = $id;
    }

    public function getId() :int
    {
        return $this->id;
    }


    public function setEmail(string $email) :void
    {
        $this->email = $email;
    }

    public function getEmail() :string
    {
        return $this->email;
    }



    public function setSenha(string $senha) :void
    {
        $this->senha = $senha;
    }

    public function getSenha() :string
    {
        return $this->senha;
    }


    private function connection() :\PDO
    {
        return new \PDO("mysql:host=localhost;dbname=7ssoqueedaora", "root", "");
    }

    // ... (métodos setId, getId, setName, getName, setAge, getAge, connection)

    public function create(): array
    {
        $con = $this->connection();
        $stmt = $con->prepare("INSERT INTO usuarios (id, email, senha) VALUES (NULL, :_email, :_senha)");
        $stmt->bindValue(":_email", $this->getEmail(), \PDO::PARAM_STR);
        $stmt->bindValue(":_senha", $this->getSenha(), \PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $this->setId($con->lastInsertId());
            return $this->read();
        }
        
        return [];
    }
    

    public function read(): array
    {
        $con = $this->connection();
        $stmt = null;

        if ($this->getId() === 0) {
            $stmt = $con->prepare("SELECT * FROM usuarios");
        } elseif ($this->getId() > 0) {
            $stmt = $con->prepare("SELECT * FROM usuarios WHERE id = :_id");
            $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);
        }

        if ($stmt && $stmt->execute()) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function update(): array
    {
        $con = $this->connection();
        $stmt = $con->prepare("UPDATE usuarios SET email = :_email, senha = :_senha WHERE id = :_id");
        $stmt->bindValue(":_email", $this->getEmail(), \PDO::PARAM_STR);
        $stmt->bindValue(":_senha", $this->getSenha(), \PDO::PARAM_STR);
        $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);
        if ($stmt->execute()) {
            return $this->read();
        }
        return [];
    }

    public function delete(): array
    {
        $person = $this->read();
        $con = $this->connection();
        $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :_id");
        $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);
        if ($stmt->execute()) {
            return $person;
        }
        return [];
    }
}
?>
