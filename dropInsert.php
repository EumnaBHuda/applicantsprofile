<form action="" method="post">
<select name="dropdown">
<option value="APL">APL</option>
<option value="BBLT">BBLT</option>
<option value="BBLT">BBLTJ</option>
<option value="BGN">BGN</option>
<option value="Bootcamp">Bootcamp</option>
<option value="Summit">Summit</option>
</select>
<input type="submit" name="Submit" value="Submit" />
</form>

<?php
if (isset($_POST['Submit']))
 {
	$con = mysql_connect("localhost","root","");

  		if (!$con)
  		{
    		die('Could not connect: ' . mysql_error());
  		}
        else 
		{
  		mysql_select_db("eahmed_test", $con);
		}
		
		$drop = $_POST['dropdown'];
		
  
        if($drop = "APL")
        {
           $query = mysql_query("INSERT INTO `apl`(`program`) VALUES ('$drop');");
		    //echo "<br>".$drop."inserted";
        }
		 elseif($drop = "BBLT")
        {
           $query = mysql_query("INSERT INTO `bblt`(`program`) VALUES ('$drop');");
		    //echo "<br>".$drop."inserted";
        }
		elseif($drop = "BBLTJ")
        {
           $query = mysql_query("INSERT INTO `bbltj`(`program`) VALUES ('$drop');");
		   echo "<br>".$drop."inserted";
       }
		// elseif($drop = "BGN")
       // {
          // $query = mysql_query("INSERT INTO `bgn`(`program`) VALUES ('$drop');");
		    //echo "<br>".$drop."inserted";
       // }
		// elseif($drop = "Bootcamp")
        //{
          // $query = mysql_query("INSERT INTO `bootcamp`(`program`) VALUES ('$drop');");
		    //echo "<br>".$drop."inserted";
        //}
		// elseif($drop = "Summit")
        //{
          // $query = mysql_query("INSERT INTO `summit`(`program`) VALUES ('$drop');");
		    //echo "<br>".$drop."inserted";
       // }
       //echo $drop;
}
	
	else // else we didn't submit the form, so display the form
	{}
?>
