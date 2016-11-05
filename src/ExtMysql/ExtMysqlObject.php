<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @license   http://x-design.wz.cz/license ExtPHP framework license
 * @link       http://x-design.wz.cz
 * @category    framework
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
