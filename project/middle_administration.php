<?php require_once("functions.php");?>

<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass = "iasofficer@1";
$dbname ="project";
$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()){
die("database connection failed:" .
  mysqli_connect_error() .
  "(".mysqli_connect_errno() .")"
  );

}
?>
<?php
if(isset($_POST['submit']))
{
	
	$name=$_POST["name"];
	$qualification=$_POST["qualification"];
	$description=$_POST["description"];
	
	echo "CLICKED </br>" ;
	$fname=$_FILES['myfile']['name'] ;
	$ftmp=$_FILES['myfile']['tmp_name'] ;
	$store="photos/".$fname;
	
	if(move_uploaded_file($ftmp,$store));
	    echo "uploaded successfully";
		
	
	
	$query = "INSERT INTO administration(";
	$query .= "  address,name,qualification,description";
        $query .= ") VALUES (";
 	$query .= " '{$store}','{$name}','{$qualification}','{$description}' ";
	$query .= " ) ";
	$result = mysqli_query($connection,$query);
       if($result){
	   echo "page created.";
		redirect_to("administration.php");
}
	   }
       else{
	   echo "failed.".mysqli_error($connection);}
?>

<?php
  if(isset($connection)) {
	mysqli_close($connection);
  }
?>