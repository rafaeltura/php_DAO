<?php

    class Usuario 
    {
        private int $id;
        private string $nome;
        private string $email;

        public function getId(): int
        {
            return $this->id;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setId( int $value ): void
        {
            $this->id = trim( $value );
        }

        public function setNome( string $value ): void
        {
            $this->nome = trim( $value );
        }

        public function setEmail( string $value ): void
        {
            $this->email = strtolower( trim( $value ) );
        }
    }