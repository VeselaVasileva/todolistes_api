<?php
    namespace model;

    class Task
    {
        /**
         * table's name in database
         */
        private string $table = 'tasks';

        /**
         * ID
         */
        private string $id;

        /**
         * task's content
         */
        private string $content;

        /**
         * task created at date
         */
        private string $createdAt;

        /**
         * task deleted ?
         */
        private boolean $deleted; 

        /**
         * task deleted at date
         */
        private string $deletedAt;

        /**
         * task is done ?
         */
        private boolean $done; 

        /**
         * task done at date
         */
        private string $donedAt;

        /**
         * task position in list or parent task
         */
        private int $position;

		/**
         * parent task's ID
         */
        private string $parentId; 

		/**
         * list's ID
         */
        private string $listId; 	
    }

?>