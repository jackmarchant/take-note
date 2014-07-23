<?php   
	if (isset($_POST['ID'])){
		$noteID = $_POST['ID'];

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

		class deleteNotes {
			public $link;

			function __construct(){
				$db_connection = new dbConnection();
				$this->link = $db_connection->connect();
				return $this->link;
			}

			function deleteNote($noteID) {
				try {
					$query = $this->link->prepare("DELETE FROM notes WHERE ID = ?");
					$values = array($noteID);
					$query->execute($values); 
					$counts = $query->rowCount();
					return $counts;
				}
				catch(PDOException $e)
				{
					return $e->getMessage();
				}

			}
		}
		$del_note = new deleteNotes();
		$del_note->deleteNote($noteID);
	}
		
	
		
?>