<?php

    interface UsuarioDao
    {
        public function add( Usuario $user ): void;
        public function findAll(): mixed;
        public function findById( int $id ): mixed;
        public function update( Usuario $user): void;
        public function delete( $id ): void;
    }