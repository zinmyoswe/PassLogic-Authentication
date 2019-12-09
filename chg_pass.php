<?php include("confs/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>PassLogic Login</title>
<meta charset="utf-8">
<meta name="copyright" content="Secured by PassLogic">
<meta name="viewport" content="width=device-width,user-scalable=no">
<link rel="stylesheet" href="files/html5reset-1.6.1.css" type="text/css">
<link rel="stylesheet" href="files/common.css" type="text/css">
<link rel="stylesheet" media="screen and (min-width: 641px)" href="files/pc.css">
<link rel="stylesheet" media="screen and (max-width: 640px) and (min-width: 0px)" href="files/sp.css">
<link rel="stylesheet" type="text/css" href="files/style.css">

<!--[if IE9 ]>
<link rel="stylesheet" media="screen,print" href="files/ie9.css?ent-2.0.0" type="text/css">
<![endif]-->


<!-- <script src="jquery-3.2.1.min.js"></script> -->
<script src="files/jquery.js" type="text/javascript"></script>
<script src="files/base.js" type="text/javascript"></script>
<script src="files/passlogy_demo.js" type="text/javascript"></script>


<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Abel|Lato|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>


<style>
/* HIDE RADIO */

.box-random{
  width: 40px;
  height: 50px;
  border-radius: 10%;
}
</style>
<body>



<div id="contents">
<form action="#" method="post" enctype="multipart/form-data">
  <input type="hidden" name="login_id" value="1">
<h4>Change Password</h4>

<table id="randamNumbar">
<tr>
<td id="randamNumbarTableLeft">
  <table class="randamNumbarWidth">
      <tr>
        <?php
    for($i=1;$i<=16;$i++)
    {
?>
       
     
          <input type="radio" name="optradio[<?php echo $i; ?>]" value="<?php echo $i; ?>" > <?php echo $i; ?>

          <label for="">
            <img src="ic2.jpg" alt="" class="box-random">
    
          </label>
               
        
    <?php
    }
    ?>


      </tr>
  </table>
</td>

<style type="text/css" media="screen">

</style>
<td id="randamNumbarTableCenter">
  <table class="randamNumbarWidth">
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="16">
    16
  </p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="17">17</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="18">18</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="19">19</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="20">20</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="21">21</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="22">22</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="23">23</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="24">24</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="25">25</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="26">26</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="27">27</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="28">28</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="29">29</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="30">30</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="31">31</p></div></td>
  </tr>
  </table>
</td>
<td id="randamNumbarTableRight">
  <table class="randamNumbarWidth">
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="32">32</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="33">33</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="34">34</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="35">35</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="36">36</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="37">37</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="38">38</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="39">39</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="40">40</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="41">41</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="42">42</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="43">43</p></div></td>
  </tr>
  <tr>
  <td><div class="randamNumberBoxRadius"><p id="44">44</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="45">45</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="46">46</p></div></td>
  <td><div class="randamNumberBoxRadius"><p id="47">47</p></div></td>
  </tr>
  </table>
</td>
</tr>
<tr>
<td colspan="3"><div class="secured">Developed By <a href="https://github.com/zinmyoswe"><i class="fab fa-github"></i> ZINMYOSWE</a></div></td>
</tr>
</table>

<input type="submit" name="submit" value="Submit" class="btn btn-outline-primary"/>
</form>

<?php 

if(isset($_POST['submit']))  
{ 
  if(!empty($_POST['optradio'])) {
  $login_id = $_POST['login_id'];
 foreach($_POST['optradio'] as $option_num => $option_val){
    echo $option_num." ".$option_val."<br>";
    mysqli_query($mysqli, "INSERT INTO no_logic(login_id,num) VALUES('$login_id','$option_num')");
 }

 echo "<script>window.location='menu.php?w2=successfully inserted!!!'</script>";

}else{
  echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> Please Select Atleast One Option..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
}
}
?>








</div>

<section>
  <?php
    include('confs/config.php');
    $results = array();
    $sql = "select * from assign1 where id='3'";
    
    $run = mysqli_query($mysqli,$sql);
    
    
      while($row = mysqli_fetch_assoc($run)) {
        $results[] = explode(',', $row['assign']);    
        
?>
    
      
<p><?php print_r($results) ?></p>



<?php echo $results[0][0]."".$results[0][1] ."".$results[0][2]?>

      <?php } ?>



  </section>

<div id="footer">
  <p class="copyrights">ZINMYOSWE @2019</p>
</div>


</body>
</html>
