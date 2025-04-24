<?php
/**
 * ExtPHP framework
 */

class ExtMysqlObject
{


    public $data;
    public $result;
  


    /**
     * ExtDbSqlObject::__construct()
     * 
     * @param mixed $query
     * @return
     */
     
    public function __construct($query){
    
        $this->result = mysqli_query(ExtMysql::getConnection(),$query);
        $this->data = mysqli_fetch_object($this->result);
        $this->freeResult();
    
    }

    /**
     * ExtDbSqlObject::freeResult()
     * 
     * @return
     */
     
    public function freeResult(){
        mysqli_free_result($this->result);
    }
  

}
?>
