<?php include("header.php"); ?>
<?php 
/***************************************Print Array*********************************************************** */

?>
<div class="card mt-5">
<div class="card-header">
        For Loop
        </div>
<div class="card-body row">

<?php 
$arr = ["PHP", "HTML", "CSS", "JavaScript"];
for($i=0;$i<count($arr);$i++){
?>
<div class="card col">
  <div class="card-body">
    <p class="card-text text-center"><?php echo $arr[$i]; ?></p>
  </div>
</div>

<?php } ?>
</div>
</div>


<div class="card ">
<div class="card-header">
        Foreach Loop
        </div>
<div class="card-body row">

<?php 
$arr = ["PHP", "HTML", "CSS", "JavaScript"];
foreach($arr as $val){
?>
<div class="card col">
  <div class="card-body">
    <p class="card-text text-center"><?php echo $val; ?></p>
  </div>
</div>

<?php } ?>
</div>
</div>


<?php 
/*************************************** Info Table*********************************************************** */
$info  = ["Name"=>"AhmedMostafa","Age"=>26,"Email"=>"ahmed@gmail.com","Collage"=>"Faculty of commerce"];
?>
<div class="card mt-3">
<div class="card-header">
       Info Table
        </div>
        <div class="card-body row">

<table class="table text-center table-bordered">

    <tr> <td>Name</td> <td> <?php echo $info['Name']; ?></td>    </tr>
    <tr> <td>Email</td> <td> <?php echo $info['Email']; ?></td> </tr>
    <tr> <td>Age</td> <td> <?php echo $info['Age']; ?></td> </tr>
    <tr>  <td>Collage</td> <td> <?php echo $info['Collage']; ?></td> </tr>

</table>

</div>
</div>

<?php 
/***************************************Form*********************************************************** */
?>

<div class="card mt-3">
<div class="card-header">
    Form
        </div>
        <div class="card-body row">
<form action="data.php" method="post" class="row">

  <div class="mb-3 col-4">
    <label class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" >
  </div>
  <div class="mb-3 col-4">
    <label class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control"  >
  </div>
  <div class="mb-3 col-4">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control"  >
  </div>

  <div class="mb-3 col-12">
    <label class="form-label">Country</label>
    <select class="form-select" aria-label="Default select example" name="country">
  <option selected value="">Select Country</option>
  <option value="eg">eg</option>
  <option value="sa">sa</option>
  <option value="usa">usa</option>
</select>
  </div>


  <div class="mb-3 col-12">
    <label class="form-label">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" value="male" name="gender" id="male" checked>
  <label class="form-check-label" for="male">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="female" name="gender"  id="female" >
  <label class="form-check-label" for="female">
  Female
  </label>
</div>
</div>
<div class="mb-3 col-12">
<label class="form-label">Skills</label>
<div class="row">
<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="PHP" class="form-check-input" id="PHP">
    <label class="form-check-label" for="PHP">PHP</label>
</div>

<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="JS" class="form-check-input" id="JS">
    <label class="form-check-label" for="JS">JS</label>
</div>

<div class="mb-3 form-check col-2">
    <input type="checkbox" name="skills[]" value="CSS" class="form-check-input" id="CSS">
    <label class="form-check-label" for="CSS">CSS</label>
</div>


</div>


  </div>
  <div class="mb-3 col-4">
  <button type="submit" class="btn btn-primary" name="submit" value="OK">Submit</button>
</div>
</form>

</div>
</div>

<?php include("footer.php"); ?>
