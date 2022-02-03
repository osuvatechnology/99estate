{{-- <?php
$dbcon=mysqli_connect('localhost','root','','99estate');
If(isset($_POST['submit'])){

    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $password = $_POST['form_password'];
    $cp = $_POST['form_cp'];
    $phone = $_POST['form_phone'];
    $address = $_POST['form_message'];

    $sql="INSERT INTO registereduser(Fullname,Emailid,Password1,Contactno,Address1)
    values('$name','$email','$password','$phone','$address')";



$qry=$dbcon->query($sql);

    if($qry){
        echo "<SCRIPT>
                alert('Successfully save')
                // window.location.replace('connection.php');
                 window.location.replace('/buysalerent');
            </SCRIPT>";
        }else{
            echo "not inserted";
        }



}



?> --}}

@include('FrontEnd.header')
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="home">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<form action="/create" method="post">

    <input type="text" class="form-control" placeholder="Full Name" name="form_name">
    <input type="text" class="form-control" placeholder="Enter Email" name="form_email">
    <input type="password" class="form-control" placeholder="Password" name="form_pass">
    <input type="password" class="form-control" placeholder="Confirm Password" name="cp">

    <input type="text" class="form-control" placeholder="Contact Number" name="form_phone">

    <textarea rows="6" class="form-control" placeholder="Address" name="form_message"></textarea>
    <input type="hidden" name="_token" value="<?=csrf_token()?>" >
<button type="submit" class="btn btn-success" name="Submit">Register</button>




</div>

</div>
</div>
</div>

@include('FrontEnd.footer')
