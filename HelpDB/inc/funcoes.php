<?php
     //Função conexão
     function conexaoPDO(){
        $conn = new PDO('mysql:dbname=helpdb;user=root;password=;host=localhost:3306');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } //conexaoPDO

    //Função cadastrar
    function cadastrar($nome, $email, $login, $senha, $matricula, $curso){
        $conn = conexaoPDO();
        if($curso != 'Sem curso (Professor)'){
            $tipous = 1;
        } else {
            $tipous = 2;
        }
        $stmt = $conn->prepare('INSERT INTO usuario (nome, matricula, email, login, senha, tipous, curso, id_img) VALUES (:n, :m, :e, :l, :s, :t, :c, 1)');
        $stmt->bindValue(':n', $nome);
        $stmt->bindValue(':m', $matricula);
        $stmt->bindValue(':e', $email);
        $stmt->bindValue(':l', $login);
        $stmt->bindValue(':s', $senha);
        $stmt->bindValue(':t', $tipous);
        $stmt->bindValue(':c', $curso);
        $stmt->execute();
        $conn = NULL;

    }//cadastrar

    //Função login
    function logar($login, $senha){
        $conn = conexaoPDO();
        $stmt = $conn->prepare('SELECT u.*,i.* FROM usuario AS u JOIN img AS i ON(u.id_img = i.id_img) WHERE login = :a AND senha = :b;');
        $stmt->bindValue(':a',$login);
        $stmt->bindValue(':b',$senha);
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//logar

    //Função consultar login
    function consultarlog($login){
        $conn = conexaoPDO();
        $stmt = $conn->prepare('SELECT login FROM usuario WHERE login = :n');
        $stmt->bindValue(':n', $login);
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultlog

    //Função perguntar
    function perguntar($idusuario, $pergunta, $data, $catPer){
        $conn = conexaoPDO();
        $likePer = 0;
        $editPer = 0;
        $blockPer = 0;
        $stmt = $conn->prepare('INSERT INTO pergunta (idusuario, catper, descper, likeper, dataper, editper, blockper) VALUES (:i, :c, :d, :l, :dt, :e, :b)');
        $stmt->bindValue(':i',$idusuario);
        $stmt->bindValue(':c',$catPer);
        $stmt->bindValue(':d',$pergunta);
        $stmt->bindValue(':l',$likePer);
        $stmt->bindValue(':dt',$data);
        $stmt->bindValue(':e',$editPer);
        $stmt->bindValue(':b',$blockPer);
        $stmt->execute();
        $conn = NULL;
    }//perguntar

    //Função consultar pergunta por descrição
    function consultarPer($pergunta){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT descper FROM perguntas WHERE descper LIKE '$pergunta%';");
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultper

    //Função selecionar perguntas
    function selecPer(){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT u.nome, u.idusuario, u.id_img, p.idpergunta, p.descper, p.likeper, p.dataper, p.catper FROM pergunta AS p INNER JOIN usuario AS u ON(p.idusuario = u.idusuario) ORDER BY idpergunta DESC;");
        $stmt->execute();
        $result = $stmt->fetchALL();
        $conn = NULL;
        return $result;
    }//consultper

    //Função selecionar avatares
    function selecAva($id_img){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT address FROM img WHERE id_img = '$id_img';");
        $stmt->execute();
        $result = $stmt->fetchALL();
        foreach($result as $resulta);
        $conn = NULL;
        return $resulta['address'];
    }//consultava

    //Função selecionar perguntas do usuário
    function selecPerUs($idusuario){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT * FROM pergunta WHERE idusuario = '$idusuario' ORDER BY idpergunta DESC;");
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultperusu

    //Função selecionar pergunta para a resposta
    function selecPerg($idpergunta){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT u.nome, u.idusuario, u.id_img, p.idpergunta, p.descper, p.likeper, p.dataper, p.catper FROM pergunta AS p INNER JOIN usuario AS u ON(p.idusuario = u.idusuario) WHERE idpergunta = '$idpergunta'");
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultperres

    //Função responder
    function responder($idusuario, $idpergunta, $data, $resposta){
        $conn = conexaoPDO();
        $likeRes = 0;
        $editRes = 0;
        $blockRes = 0;
        $stmt = $conn->prepare('INSERT INTO resposta (idpergunta, idusuario, descres, likeres, datares, editres, blockres) VALUES (:ip, :iu, :d, :l, :dt, :e, :b)');
        $stmt->bindValue(':ip',$idpergunta);
        $stmt->bindValue(':iu',$idusuario);
        $stmt->bindValue(':d',$resposta);
        $stmt->bindValue(':l',$likeRes);
        $stmt->bindValue(':dt',$data);
        $stmt->bindValue(':e',$editRes);
        $stmt->bindValue(':b',$blockRes);
        $stmt->execute();
    }//Responder

    //Função consultar respostas
    function consultRes($idpergunta){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT u.nome, u.idusuario, p.idresposta, p.descres, p.likeres, p.datares,  FROM resposta AS r INNER JOIN usuario AS u ON(r.idusuario = u.idusuario) ORDER BY idresposta DESC;");
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultres

    //Função consultar resposta do usuário
    function consultResUs($idusuario){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT * FROM resposta WHERE idusuario = '$idusuario';");
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultresus

    //Função de consulta de avatares
    function consultImg(){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("SELECT * FROM img");
        $stmt->execute();
        $conn = NULL;
        return $stmt;
    }//consultimg

    // Função de like das perguntas
    function likePer($idpergunta, $tipous){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("INSERT INTO pergunta(likeper) VALUE('$tipous')  WHERE idpergunta = '$idpergunta';");
        $stmt->execute();
        $conn = NULL;
    }//likePer

    // Função de deslike das perguntas
    function deslikePer($idpergunta, $tipous){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("INSERT INTO pergunta(likeper) VALUE(-'$tipous')  WHERE idpergunta = '$idpergunta';");
        $stmt->execute();
        $conn = NULL;
    }//likePer

    // Função de like das respostas
    function likeRer($idpergunta, $tipous){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("INSERT INTO resposta(likeres) VALUE('$tipous')  WHERE idpergunta = '$idpergunta';");
        $stmt->execute();
        $conn = NULL;
    }//likePer

    // Função de deslike das respostas
    function deslikeRer($idpergunta, $tipous){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("INSERT INTO resposta(likeres) VALUE(-'$tipous')  WHERE idpergunta = '$idpergunta';");
        $stmt->execute();
        $conn = NULL;
    }//likePer

    // Função de logout
    function deslogar(){
        session_destroy();
    }//deslogar

    // Função de bloquear pergunta
    function blockPer($idpergunta){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("INSERT INTO pergunta(blockper) VALUE(1)  WHERE idpergunta = '$idpergunta';");
        $stmt->execute();
        $conn = NULL;
    }//blockPer

    // Função de bloquear re
    function blockRes($idpergunta){
        $conn = conexaoPDO();
        $stmt = $conn->prepare("INSERT INTO pergunta(blockper) VALUE(1)  WHERE idpergunta = '$idpergunta';");
        $stmt->execute();
        $conn = NULL;
    }//blockRes