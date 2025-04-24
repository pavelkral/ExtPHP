<?php
/**
 * ExtPHP framework
 */

class ExtMysqlModel
{
    
    
    public $int_showrows;
    public $int_foundrows;
    public $int_pagecount;
    public $int_startrow;
    public $str_query;
    public $obj_result;
    public $arr_data;
    public $arr_links;
    public $str_nextlink;
    public $str_prevlink;
    public $str_endlink;
    public $str_firstlink;



    /**
     * ExtDbSqlModel::__construct()
     * 
     * 
     */
     
    public function __construct(){

       
            $this->int_showrows = 10;
            $this->int_startrow = 1;
     
        
    }

    /**
     * ExtDbSqlModel::setShowRows()
     * 
     * @param int $introws
     * 
     */
     
    public function setShowRows($introws){
        
        $this->int_showrows = $introws;
        
    }
 

    /**
     * ExtDbSqlModel::setQuery()
     * 
     * @param string $strquery
     * 
     */
     
    public function setQuery($strquery){
     
        $this->str_query = $strquery;
        
    }
    
    /**
     * ExtDbSqlModel::prepairPages()
     * 
     * @return
     */
     
    public function prepairPages(){
        
        if (isset($_GET["showrows"])) {
              $this->int_showrows = intval($_GET["showrows"]);
        } else {
            $this->int_showrows = 10;
        }
     
            if (!isset($_GET["start"])) {
                    $this->int_startrow = 1;
            } else {
                $this->int_startrow = intval($_GET["start"]);
            }
        
    }



   
 
    /**
     * ExtDbSqlModel::buildQuery()
     * 
     * @return
     */
     
    public function buildQuery(){

          mysqli_query(ExtMysql::getConnection(),"SET CHARACTER SET utf8");
        
          $this->obj_result = mysqli_query(ExtMysql::getConnection(),$this->str_query);
          $this->int_foundrows = mysqli_num_rows($this->obj_result);
    
          $this->int_pagecount = $this->int_foundrows / $this->int_showrows;
          $this->int_pagecount = ceil($this->int_pagecount);
    
    
            if ($this->int_foundrows < $this->int_showrows) {
                $this->obj_result = mysqli_query(ExtMysql::getConnection(),$this->str_query);
    
            } else {
                $this->obj_result = mysqli_query(ExtMysql::getConnection(),"" . $this->str_query . "" . " limit " . ($this->int_startrow - 1) . ", " . $this->int_showrows);
            }
 
 
                try
                {
                    if (!$this->obj_result) {
        	               throw new ExtException('Cant built model.');
                    }
                }
                catch (ExtException $e){
                    echo $e->errMsg();
                }
      
    }
   
    /**
     * ExtDbSqlModel::createPages()
     * 
     * @return
     */
     
    public function createPages(){
        
        
        if ($this->int_pagecount <= 1) {
            
        }
         else {

            $offset = 1;
            $selected = '';
            $curent = 1;
            $arr = array();
            
              for ($i = 1; $i <= ($this->int_pagecount); $i++) {

               if ($i >= 2) {
                    $offset += $this->int_showrows;
                } else {
                }
                    
                   if ($offset == $_GET["start"]) {
                        $selected = 'class="active1"';
                        $curent = $i;
                    } 
                    elseif ($this->int_startrow == 1 && $i == 1) {
                        $selected = 'class="active1"';
                         $curent = $i;
                    } 
                     else{
                        $selected = '';
                    }
                    
                 $arr[$i] =  "<li><a " . $selected . " href=\"?start=" . ($offset) . "&amp;showrows=" . ($this->int_showrows) . "\"><strong>" . $i . "</strong></a></li>";
           
            }
            
            
            
            $this->arr_links[0]= $arr[$curent-2];
            $this->arr_links[1]= $arr[$curent-1];
            $this->arr_links[2]= $arr[$curent];
            $this->arr_links[3]= $arr[$curent+1];
            $this->arr_links[4]= $arr[$curent+2];
        }
     
        
        
        if ($this->int_startrow < $this->int_showrows) {
                $this->str_prevlink = "";
        } 
            else {
                $this->str_prevlink = "<li><a href=\"?start=" . ($this->int_startrow - $this->int_showrows) . "&amp;showrows=" . ($this->int_showrows) . "\">&lt;&lt;</a></li>";
            }
        if ($this->int_startrow + $this->int_showrows > $this->int_foundrows) {
                $this->str_nextlink = "";
        } 
            else {
                $this->str_nextlink = "<li><a href=\"?start=" . ($this->int_startrow + $this->int_showrows) . "&amp;showrows=" . ($this->int_showrows) . "\">&gt;&gt;</a></li>";
            }
        
         if ($this->int_startrow == 1){
                $this->str_firstlink = "Začátek"; 
         } 
             else {
                $this->str_firstlink = "<li><a href=\"?start=1\">Začátek</a></li>";
             }
        if ($this->int_startrow>$this->int_foundrows-$this->int_showrows){
                $this->str_endlink = "Konec";
        }  
            else {
                
                //if ($this->int_pagecount == $this->int_showrows) {
//                    $this->str_endlink = "<a href=\"?start=".($this->int_foundrows-$this->int_foundrows%$this->int_showrows)."\">Konec</a>";
//                    //echo 'bad';
//                	} else {
//                  //  echo 'ok';
                    $this->str_endlink = "<li><a href=\"?start=".($this->int_foundrows-$this->int_foundrows%$this->int_showrows+1)."\">Konec</a></li>";
               // }
               
            }
        
         
    }

    /**
     * ExtDbSqlModel::fetch()
     * 
     * @return
     */
     
    public function fetch(){
        
        $i = 0;
        $row = 0;

        while ($myrow = mysqli_fetch_array($this->obj_result)) {
            for ($i = 0; $i < mysqli_num_fields($this->obj_result); $i++) {
                $fieldname = mysqli_fetch_field_direct($this->obj_result, $i);
                $this->arr_data[$row][$fieldname->name] = $myrow[$fieldname->name];
            }
            $row++;
        }

    }

    /**
     * ExtDbSqlModel::freeResult()
     * 
     * @return
     */
     
    public function freeResult(){
        
        mysqli_free_result($this->obj_result);
        
    }


}
?>
