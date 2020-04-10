<html>
<head>
<script type="text/javascript">
   function success()
   {
      alert("Submitted Successfully");
   }
</script>
</head>
<body style="background-color:yellow;">

<h1 style="color:Red;">Marks Percentage Calculator</h1>

<form action="Percentage.php" method="post">

Registration Number: 
<input type="Number" name="reg" required/>
<br>
<br>

JAVA: 
<input type="Number" name="java" required/>
<br>
<br>
Python:
 <input type="Number" name="python" required/>
 <br>
 <br>
Soft Skills: 
<input type="Number" name="soft" required/>
<br>
<br>
Quantitative Aptitude: 
<input type="Number" name="aptitude" required/>
<br>
<br>
Verbal Ability : 
<input type="Number" name="verbal" required/>
<br>
<br>
DBMS: 
<input type="Number" name="dbms" required/>
<br>
<br>
Web Development:
<input type="Number" name="web">
<br>
<br>
Cloud Computing:
<input type="Number" name="cloud">
<br>
<br>
Operating Systems:
<input type="Number" name="os">
<br>
<br>
Computer Networks:
<input type="Number" name="cn">
<br>
<br>

<button type="submit" onclick="success()" >Submit</button>

</form>

<?php

$connect = mysqli_connect('localhost','aj','1102','percentage');

$reg = $_POST['reg'];
$java = $_POST['java'];
$python = $_POST['python'];
$soft = $_POST['soft'];
$aptitude= $_POST['aptitude'];
$verbal= $_POST['verbal'];
$dbms= $_POST['dbms'];
$web= $_POST['web'];
$cloud= $_POST['cloud'];
$os= $_POST['os'];
$cn= $_POST['cn'];


$sum= ($java+ $python + $soft + $aptitude + $verbal + $dbms + $web + $cloud + $os +$cn);
$percentage = ($sum/1000)*100;
$t= "INSERT INTO student(Reg_Number,Java,Python,Soft_Skills,Quantitative_Aptitude,Verbal,DBMS,Web_Development,Cloud_Computing,Operating_System,Computer_Networks,Percentage) VALUES ('$reg','$java','$python','$soft','$aptitude','$verbal','$dbms','$web',$cloud','$os','$cn','$percentage')";

$result = mysqli_query($connect,$t);

echo "Percentage for $reg is $percentage";

?>
</body>
</html>