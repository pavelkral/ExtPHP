<br />


<table style="padding: 0px;width: 100%;" cellpadding="10" border="1" cellspacing="3">
    <tr>
        <td colspan="3">
            <h1>Debug</h1>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <strong>URL request:</strong>
            <br />
            <span>
                <?php echo 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?></span>
            <br />
            <strong>Called</strong>

            <span>
                <pre><?php echo urldecode(htmlentities(print_r($this->route,true)));?></pre>
            </span>
            <br />
        </td>
        <td valign="top">
            <strong>Post:</strong> <br />
            <?php
    if($_POST == true)
    {
      echo "<table border= 1><tr style:padding:5px;><td><strong>key</strong></td><td>value</td></tr>";
      foreach($_POST as $key => $value){
            echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
      }
      echo "</table>";
    }
    ?>
        </td>
        <td valign="top">
            <strong>Get:</strong> <br />
            <?php
    if($_GET == true)
    {
      echo "<table border= 1><tr style:padding:5px;><td><strong>key</strong></td><td><strong>value</strong></td></tr>";
      foreach($_GET as $key => $value){
            echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
      }
      echo "</table>";
    }
    ?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><a href='<?php echo ExtHttpRequest::getScriptUrl();?>Default/'>Return - The default </a></td>
    </tr>
</table>