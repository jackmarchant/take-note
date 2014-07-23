<?php
	 if (isset($_POST['save'])){
	 	$title = strip_tags($_POST['title']);
		$note = nl2br($_POST['note']);
		if (empty($title) || empty($note))
		{
			$error_msg = '<p class="error_msg">Please complete all fields.</p>';
		}
		else
		{
			include_once('../../login_user.php');
			$date = new DateTime();
			$date = date_format($date, 'd-m-Y');
			session_start();
	    	$author = $_SESSION['user'];
	    
			class dbConnection {
				protected $db_conn;
				public $db_name = 'login';
				public $db_user = 'root';
				public $db_pass = '';
				public $db_host = 'localhost';

				function connect(){
					try {
							$this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_pass);
							return $this->db_conn;
					}
					catch(PDOException $e){
						return $e->getMessage();
					}
					
				}
			}



			class insertNotes {
				public $link;

				function __construct(){
					$db_connection = new dbConnection();
					$this->link = $db_connection->connect();
					return $this->link;
				}

				function saveNote($title,$note,$date,$author) {
					try {
						$query = $this->link->prepare("INSERT INTO notes (Title,Note,Date,Author) VALUES (?,?,?,?)");
						$values = array($title,$note,$date,$author);
						$query->execute($values);
						$counts = $query->rowCount();
						return $counts;
					}
					catch(PDOException $e){
						return $e->getMessage();
					}
					
				}
			}


			$new_note = new insertNotes();
			$new_note->saveNote($title,$note,$date,$author);
			if ($new_note == 1){
				setcookie('UserSession', '', time()-3600);
				setcookie('UserSession', $author, time()+1200,'/');
				header('location: index.php');
			}
		}
			

	}
?>