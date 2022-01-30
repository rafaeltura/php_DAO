<?php

    use UsuarioDao as UsuarioDAOInterface;

    require_once 'models/Usuario.php';

    class UsuarioDao implements UsuarioDAOInterface
    {
        private $pdo;
        
        public function __construct( PDO $driver )
        {
            $this->pdo = $driver;
        }

        public function add( Usuario $user ): void
        {

        }

        public function findAll(): mixed
        {
            $lista = [];

            $sql = $this->pdo->query( 'Select * FROM usuarios;' );
            
            if( $sql->rowCount() > 0 ){
                $dados = $sql->fetchAll();

                foreach( $dados as $item ){
                    
                    $u = new Usuario();
                    $u->setId( $item[ 'id' ] );
                    $u->setNome( $item[ 'nome' ] );
                    $u->setEmail( $item[ 'email' ] );

                    $lista[] = $u;
                }
            }
        }
        
        public function findById( int $id ): mixed
        {}
        
        public function update( Usuario $user): void
        {}
        
        public function delete( $id ): void
        {}
    }