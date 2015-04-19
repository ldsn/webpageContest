<?php
/**
 * 数据库操作类
 * @author Jason
 * @param $dbconfig 数据库配置
 * @param $dbh      数据连接句柄
 */

namespace ldsn;

class DB
{
	private static $dbconfig;
	private static $dbh;

	/**
	 * 数据初始化
	 * @param $dbconfig  初始化数据库配置数据
	 * @author Jason
	 */
	public static function init($dbconfig)
	{
		self::$dbconfig = $dbconfig;
	}
	/**
	 * 数据库连接
	 * @author Jason
	 * 
	 */
	public static function connect()
	{
		extract(self::$dbconfig);
		try{
			$dsn = "$dbms:host=$dbhost;dbname=$dbname";
			$dbh = new \PDO($dsn,$dbuser,$dbpassword,array(\PDO::ATTR_PERSISTENT => true));
			$dbh ->query("SET NAMES UTF8");
			self::$dbh = $dbh;
		} catch (PDOException $e) {
		    die ("Error!: " . $e->getMessage() . "<br/>");
		}
	}
	/**
	 * 首页查找数量
	 */
	public function findnum($table)
	{
		$stmt = self::$dbh->prepare("SELECT * FROM $table");
		$stmt ->execute();
		$stmt ->fetch();
		$row  = $stmt ->rowCount();
		return $row;
	}
	/**
	 * 插入报名数据
	 */
	public function insert($data)
	{	
		$sql  = "INSERT INTO register (user, type, major, email, phone, time) 
				VALUES (:user, :type, :major, :email, :phone, :time)";
		extract($data);
		$stmt = self::$dbh->prepare($sql);
		$stmt->bindParam(':user', $user);
		$stmt->bindParam(':type', $type);
		$stmt->bindParam(':major', $major);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':time', $time);
		$row = $stmt->execute();
		return $row;
	}
	/**
	 * 插入上传作品数据
	 */
	public function upfile($data)
	{
		$sql  = "INSERT INTO baoming (user, type, major, email, phone, name, description, upfile, time) 
				VALUES (:user, :type, :major, :email, :phone, :name, :description, :upfile, :time)";
		extract($data);
		$stmt = self::$dbh->prepare($sql);
		$stmt->bindParam(':user', $user);
		$stmt->bindParam(':type', $type);
		$stmt->bindParam(':major', $major);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':upfile', $upfile);
		$stmt->bindParam(':time', $time);
		$row = $stmt->execute();
		return $row;
	}
	/**
	 * 取出报名数据
	 */
	public function findall($table,$type)
	{
		$stmt = self::$dbh->prepare("SELECT * FROM $table WHERE type = $type");
		$stmt ->execute();
		// $row  = $stmt ->fetch();
		// return $row;
		$one = null;
		$i = 0;
		while ($row = $stmt->fetch()) {
		    $one[$i] = $row;
		    $i++;
		  }
		 return $one;
	}
	public function getf()
	{
		$stmt = self::$dbh->prepare("SELECT * FROM fnum WHERE type = 0 LIMIT 1");
		$stmt ->execute();
		$res  = $stmt->fetch();
		$stmt = self::$dbh->prepare("UPDATE fnum SET type = :type WHERE id = :id ");
		$stmt ->execute(array(':type'=>1,':id'=>$res['id']));
		return $res['fnum'];
	}
}