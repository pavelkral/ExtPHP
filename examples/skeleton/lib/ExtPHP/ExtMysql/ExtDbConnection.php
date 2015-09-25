<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */


class ExtDbConnection{
  

    public $dbConnection;
    protected  $driver;
    protected  $host;
    protected  $database;
    protected  $user;
    protected  $password;
  
    
  
    /**
     * ExtDbConnection::__construct()
     * 
     * @param mixed $driver
     * @param mixed $host
     * @param mixed $db
     * @param mixed $user
     * @param mixed $pwd
     * @return
     */
     
    public function __construct($driver=DATABASE_DRIVER,$host=DATABASE_HOST, $db=DATABASE_DB, $user=DATABASE_USER, $pwd=DATABASE_PASS){

        $this->host = $host;
        $this->driver = $driver;
        $this->database = $db;
        $this->user = $user;
        $this->password = $pwd;
        
        $this->connectDb();

    }
    
    /**
     * ExtDbConnection::connectDb()
     * 
     * @return
     */
     
    public function connectDb() {

        $this->dbConnection = mysql_connect($this->host, $this->user, $this->password);
	   mysql_query("SET CHARACTER SET utf8");

      if (!$this->dbConnection) {
            echo mysql_errno() . " : " . mysql_error();
            exit;
        } 
        else {
            $choice = mysql_select_db($this->database, $this->dbConnection);
            if (!$choice) {
                echo mysql_errno() . " : " . mysql_error();
                exit;
            }
        } 
    }

   /**
    * ExtDbConnection::close()
    * 
    * @return
    */
    
   public function close(){
 
       mysql_close ($this->dbConnection);

    }


}






?>
