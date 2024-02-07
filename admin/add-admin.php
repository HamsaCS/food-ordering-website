<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br/><br/>

        <form action=""  method="POST">

         <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text"  name="full_name" placeholder="Enter your Name">
                    </td>
                </tr>

                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="usernmae" placeholder=" Your username" >
                    </td>

                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your password" >
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin"  class="btn-secondary">
                    </td>
                </tr>




            </table>
        </form>
    </div>

</div>

<?php include('partials/footer.php'); ?>


<?php
//Procces the value from form nad save it in database


//check whether the submit button is clicked or not

if(isset($_POST['submit'])){
    //Button clicked
    //echo "Button Clicked";

    //1.get the data from form
    $full_name=$_post['full_name'];
    $username=$_post['username'];
    $password=md5($_post['password']);//Password Encryption with MD5

    //2.SQL query to save data into database
    $sql+"INSERT INTO tbl_admin SET
        full_name='$full_name',
        usernamename='$username',
        password='$password'

        
   
    ";
    // $res = mysqli_query($conn,$sql) or die(mysqli_error());

   

}

?>



