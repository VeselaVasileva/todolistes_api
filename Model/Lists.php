<?php
    namespace model;

    class Lists
    {
        /**
         * table's name in database
         */
        private string $table = 'lists';

        /**
         * ID
         */
        private string $id;

        /**
         * list's title
         */
        private string $title;

        /**
         * list created at date
         */
        private string $createdAt;

        /**
         * list created by userId
         */
        private string $createdBy;

        /**
         * list is deleted ?
         */
        private boolean $deleted;

        /**
         * list deletedAT
         */
        private string $deletedAt;        
    }

?>