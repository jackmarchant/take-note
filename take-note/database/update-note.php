<?php
		$note = $_POST['note'];
		$id = $_POST['id'];
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



				class updateNotes {
					public $link;

					function __construct(){
						$db_connection = new dbConnection();
						$this->link = $db_connection->connect();
						return $this->link;
					}

					function updateNote($note,$id) {
						try {
							$query = $this->link->prepare("UPDATE notes SET Note=? WHERE ID=?");
							$values = array($note,$id);
							$query->execute($values);
							$counts = $query->rowCount();
							return $counts;
						}
						catch(PDOException $e){
							return $e->getMessage();
						}
						
					}
				}

				$update_note = new updateNotes();
				$update_note = $update_note->updateNote($note,$id);
	
	
?>