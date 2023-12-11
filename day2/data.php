<?php include("header.php"); ?>
<a class="btn mb-2 btn-warning" href="index.php">  Home</a>

<?php 
if($_POST['submit']){
    $skills = "";
    if(isset($_POST['skills'])){
        $skills = implode(" - ",$_POST['skills']);
    }
?>

  <div class="card mt-3">
<div class="card-header">
       Info Table
        </div>
        <div class="card-body row">

<table class="table text-center table-bordered">

    <tr> <td>First Name</td> <td> <?php echo ($_POST['fname'] !="")?$_POST['fname']:"Not found"; ?></td>    </tr>
    <tr> <td>Last Name</td> <td> <?php echo ($_POST['lname'] !="")?$_POST['lname']:"Not found"; ?></td>    </tr>
    <tr> <td>Address</td> <td> <?php echo ($_POST['address'] !="")?$_POST['address']:"Not found"; ?></td>    </tr>
    <tr> <td>Country</td> <td> <?php echo ($_POST['country'] !="")?$_POST['country']:"Not found"; ?></td>    </tr>
    <tr> <td>Gender</td> <td> <?php echo ($_POST['gender'] !="")?$_POST['gender']:"Not found"; ?></td>    </tr>
    <tr> <td>Skills</td> <td> <?php echo ($skills !="")?$skills:"Not found"; ?></td>    </tr>




</table>

</div>
</div>


<?php
}else{
    ?>
<div class="alert alert-danger" role="alert">
  Not Fount
</div>
    <?php
}
?>

<?php include("footer.php"); ?>
