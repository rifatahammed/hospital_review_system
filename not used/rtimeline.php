<?php
$con = new PDO("mysql:host=localhost;dbname=hrsdb",'root','');
if(isset($_POST["submit"])){
  $str = $_POST["search"];
  $sth = $con -> prepare("SELECT * FROM 'search' WHERE hospital = '$str' ");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth-> execute();

  if($row = $sth->fetch())
  {
    ?>
    <br><br><br>
    <table>
      <tr>
        <th>Username</th>
        <th>Hospital Name</th>
        <th>Divison</th>
        <th>Experience</th>
      </tr>
      <tr>
        <td><?php echo $row-> hospital; ?></td>
    </table>
<?php
  else{
    echo "Name Doesn't Exist"
  } ?>
}
?>
