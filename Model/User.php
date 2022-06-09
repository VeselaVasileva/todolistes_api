<?php
    namespace model;

    class User
    {
        //object|resource|array|string|int|float|bool|null
        /**
         * 
         */
        private string $id;

        /**
         * 
         */
        private string $nom;

		/**
         * 
         */
        private string $prenom;
		
		/**
         * 
         */
        private string $email;
		
		/**
         * 
         */
        private string $password;
		
        /**
         * 
         */
        private string $profilePhoto;

        /**
         * 
         */
        private string $createdAt;

        /**
         * 
         */
        private string $deletedAt;

        /**
         * 
         */
        private boolean $deleted;        
    }

?>