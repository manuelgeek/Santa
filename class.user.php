<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function generate_random_string($name_length = 12) 
    {
        $alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        return substr(str_shuffle(str_repeat($alpha_numeric, $name_length)), 0, $name_length);
    }
	
	public function register($uname,$umail,$message,$photo,$string)
	{
		try
		{
			$image = $this->upload($photo);
			
			$stmt = $this->conn->prepare("INSERT INTO christmas(name,email,message,photo,string) 
		                                               VALUES(:uname, :umail, :uphone, :upass, :string)");
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":uphone", $message);
			$stmt->bindparam(":upass", $image);
			$stmt->bindparam(":string", $string);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	public function upload($photo) 
	{
		try
		{
			$data = $photo;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name= rand(10000,10000000).date('His').'.png';
            $path = "images/" . $image_name;
            file_put_contents($path, $data);

             return $image_name;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}

	public function redirect($url)
	{
		header("Location: $url");
	}
	
}
?>