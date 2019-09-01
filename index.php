

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////
<?php
echo ("<div><table><tr><th>AHMAD</th></tr></table></div>");
?>


/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

<?php

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;




    foreach( $countries as $values => $a ){
        echo $values." =>  ". $a;
    }


?>




/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/



<?php

$A="*";
$B="*";

$num=10;

for ($i = 0; $i <=($num); $i++) {
    echo $A."<br>";
     $A= $A + "*" ;
    
}


?>





/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days






<form  method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>


<?php


$A1 = 1981 ;
$B1 = 11;
$C1 = 04;


$A2 = 2013 ;
$B2 = 09;
$C2 = 04;



echo ($A2-$A1."-".$B2-$B1."-".$C2-$C1);

?>


/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */







<form  method="post">
<input type="text" name="name" placeholder="Your Name"><br>
<input type="submit">
</form>


<?php



echo ($_POST["name"]);



?>





