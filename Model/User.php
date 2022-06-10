<?php
    namespace model;

    class User
    {
        /**
         * table's name in database
         */
        private string $table = 'users';

        /**
         * ID
         */
        private string $id;

        /**
         * User's name 
         */
        private string $name;

		/**
         * User's firstname
         */
        private string $firstname;
		
		/**
         * User's email
         */
        private string $email;
		
		/**
         * User's password
         */
        private string $password;
		
        /**
         * User's profile photo
         */
        private string $avatar;

        /**
         * User created at date
         */
        private string $createdAt;

         /**
         * User is deleted ?
         */
        private boolean $deleted;

        /**
         * User deleted at date
         */
        private string $deletedAt;      
    }

?>