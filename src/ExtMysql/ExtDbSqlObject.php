<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */

class ExtDbSqlObject
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

        $this->result = mysql_query($query);
        $this->data = mysql_fetch_object($this->result);
        $this->freeResult();
    
    }

    /**
     * ExtDbSqlObject::freeResult()
     * 
     * @return
     */
     
    public function freeResult(){
        mysql_free_result($this->result);
    }


}
?>
