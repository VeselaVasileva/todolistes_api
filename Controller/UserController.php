<?php
    
    namespace controllers;
    include_once 'Controller\AbstractController.php';
    include_once 'Repository\UserRepository.php';

    use controllers\AbsractController;
    use repository\UserRepository;

 
    class UserController extends AbstractController
    {
        private $userRepository;

        function __construct() {
            $this->userRepository = new UserRepository();
        }
       

        public function index() {
            ob_start();
            require ('Vue\connection.php');
            return ob_get_clean();
        }

        public function connection() {
            $datas = $this->userRepository->find($_POST);
            if (empty($datas)) {
                return false;
            } else {
                header('Location:../lists/showUser/'.$datas['id']);
            }
        }

        public function addUser()
        {   ob_start();
            require ('Vue\newUser.php');
            return ob_get_clean();
        }

        public function showUser(string $userId) {
            ob_start();
            $datas = $this->userRepository->find(['id' => $userId]);
            require ('Vue\myProfile.php');
            return ob_get_clean();
        }
    }
?>