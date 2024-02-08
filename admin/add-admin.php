<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br/><br/>
        <?php
            if(isset($_SESSION['add']));//checking whether the session is set or not
            {
                echo $_SESSION['add'];//display session message if set
                unset($_SESSION['add']);//remove session message
            }
        ?>

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

    //3. executing query and saving data into database
    $res = mysqli_query($conn,$sql) or die(mysqli_error());

    //4.check whether the(query is excuted or not) data is inserted or not  and display appropriate message
    if($res==TRUE)
    {
        //Data Inserted
        //echo "data inserted";
        //create a session variable to display message
        $_SESSION['add']="Admin Added succesfully";
        //redirect page to manage admin
        header("location:".SITEURL.'admin/manage-admin.php');

    }
    else{

        //Failed to insert Data
        //echo"Failed to insert";
        //create a session variable to display message
        $_SESSION['add']=" Failed to add Admin ";
        //redirect page to Add admin
        header("location:".SITEURL.'admin/manage-admin.php');
    }

   

}

?>



