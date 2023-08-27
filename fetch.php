<?php  
$connect = mysqli_connect("localhost", "root", "", "spesdb");
$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM spesaccounts 
  WHERE tertDegree LIKE '%".$search."%'
  OR id LIKE '%".$search."%' 
  OR surName LIKE '%".$search."%' 
  OR firstName LIKE '%".$search."%' 
  OR email LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM spesaccounts ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    <th>Action</th>
     <th>Course</th>
     <th>SPES ID</th>
     <th>Surname</th>
     <th>First Name</th>
     <th>Email</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><input type="checkbox" name="chkBox[]" value="check"></td>
    <td>'.$row["tertDegree"].'</td>
    <td>'.$row["id"].'</td>
    <td>'.$row["surName"].'</td>
    <td>'.$row["firstName"].'</td>
    <td>'.$row["email"].'</td>
   </tr>
  ';

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>

<!-- <?php  
$checkBox = implode(',', $_POST['chkBox']);

if(isset($_POST['submit']))
{       
    $query="INSERT INTO deployment VALUES ('" . $checkBox . "')";     

    mysql_query($query) or die (mysql_error() );

    echo "Complete";

}
?> -->