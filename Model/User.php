<?php


namespace TestProject\Model;
//valida admin
class User extends Blog
{
    public function login($sEmail)
    {
        $oStmt = $this->oDb->prepare('SELECT email, password FROM Users WHERE email = :email LIMIT 1');
        $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
        $oStmt->execute();
        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);

        return @$oRow->password;
    }
}
