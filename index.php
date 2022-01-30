<?php

    require_once 'config.php';
    require_once './DAO/UsuarioDao.php';

    $usuarioDAO = new UsuarioDao( $pdo );

    $listaUsuarios = $usuarioDAO->findAll();

    foreach( $listaUsuarios as $usuarioObj ){
        echo $usuarioObj->getId() . ' - ' . $usuarioObj->getNome() . ' - ' . $usuarioObj->getEmail() . '</br>';
    }