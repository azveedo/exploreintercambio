<?php
  
    class conexao

    {

      private $pdo;
        //usuario
        public function validaEmail ($nomeUs, $emailUs, $senhaUS, $telefoneUs, $paisUS, $estadoUs, $cidadeUs, $ruaUS, $bairroUS, $numeroUS)
        {
            $validaEmail = $this->pdo->prepare("select idUser from usuario where emailUser=:e");
            $validaEmail->bindValue(":e", $emailUs);
            $validaEmail->execute();
            
            if ($validaEmail->rowCount()>0) {
                
                echo ($emailUs);

            }
            else
            {
                $this->insereUser($nomeUs, $emailUs, $senhaUS, $telefoneUs, $paisUS, $estadoUs, $cidadeUs, $ruaUS, $bairroUS, $numeroUS);
                echo "<script>alert('Cadastrado com sucesso!')</script>";
            }
        }

        public function insereUser($nomeUs, $emailUs, $senhaUS, $telefoneUs, $paisUS, $estadoUs, $cidadeUs, $ruaUS, $bairroUS, $numeroUS)
        {
            $insereUser = $this->pdo->prepare("insert into usuario (nomeUser ,emailUser, senhaUser, telefoneUser, paisUser, estadoUser, cidadeUser, ruaUser, bairroUser, numeroUser) 
            values (:n, :e, :s, :t, :p, :est, :c, :r, :b, :num)");
            
            $insereUser->bindValue(":n", $nomeUs);
            $insereUser->bindValue(":e", $emailUs);
            $insereUser->bindValue(":s", $senhaUS);
            $insereUser->bindValue(":t", $telefoneUs);
            $insereUser->bindValue(":p", $paisUS);
            $insereUser->bindValue(":est", $estadoUs);
            $insereUser->bindValue(":c", $cidadeUs);
            $insereUser->bindValue(":r", $ruaUS);
            $insereUser->bindValue(":b", $bairroUS);
            $insereUser->bindValue(":num", $numeroUS);
            $insereUser->execute();
        }

        public function logarUser ($emailUs, $senhaUS)
        {
            $validaLogin = $this->pdo->prepare("select idUser from usuario
            where emailUser = :e and senhaUser = :s");

            $validaLogin->bindValue(":e", $emailUs);
            $validaLogin->bindValue(":s", $senhaUS);
            $validaLogin->execute();

            if($validaLogin->rowCount()>0)
            {
                $emailUs=$validaLogin->fetch();
                session_start();
                $_SESSION['idAcesso']=$emailUs['idUser'];
                return true;

            } 
            else
            {

                return false;

            }
        }

        
      }
 ?>