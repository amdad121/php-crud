<?php 

include_once 'config.php';
/**
* Database
*/
class Database
{	
	private $dbname = 'crud';
	private $dbhost = 'localhost';
	private $dbuser = 'root';
	private $dbpass = '';

	private $pdo;
	private $error;

	function __construct()
	{
		if (!isset($this->pdo)) {
			try {
				$conn = new PDO('mysql:host='.$this->dbhost.'; dbname='.$this->dbname, "$this->dbuser", "$this->dbpass");
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo = $conn;
			} catch (PDOException $e) {
				echo $e->getMessage();
				die();
			}
		}
	}
	public function create($query, $dta)
	{
		$stmt = $this->pdo->prepare($query);
		$stmt->execute($dta);
		return $stmt;
	}

	public function read($query)
	{
		$stmt = $this->pdo->prepare($query);
		$stmt->execute();
		if (!empty($stmt)) {
			return $stmt;
		} else {
			return false;
		}
	}

	public function update($query, $dta)
	{
		$stmt = $this->pdo->prepare($query);
		$stmt->execute($dta);
		return $stmt;
	}

	public function readById($id)
	{
		$query = "SELECT * FROM user WHERE id=:id";
		$stmt = $this->pdo->prepare($query);
		$stmt->execute(array(
			':id'	=> $id,
			));

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function delete($id)
	{
		$query = "DELETE FROM user WHERE ID=:id";
		$stmt = $this->pdo->prepare($query);
		$stmt->execute(array(
			':id'	=> $id
			));
		return $stmt;
	}
}