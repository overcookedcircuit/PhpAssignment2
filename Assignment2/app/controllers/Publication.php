<?php
namespace app\controllers;

#[\app\filters\Login]
class Publication extends \app\core\Controller{

    public function create(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			$publication = new \app\models\Publication();
			//populate it
			$publication->publication_id = $_SESSION['v'];
			$publication->profile_id = $_POST['profile_id'];
			$publication->publication_title = $_POST['publication_title'];
			$publication->publication_text = $_POST['publication_text'];
            $publication->timestamp = $_POST['timestamp'];
            $publication->publication_status = $_POST['publication_status'];
			//insert it
			$publication->insert();
			//redirect
			header('location:/Publication/main');
			
		}else{
			$this->view('Publication/create');
		}
    }

    public function main(){
        $this->view('Publication/main');
    }
}