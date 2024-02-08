<?php include("partials/menu.php"); ?>
    <!------main content section starts------>
    <div class="main-content">
    <div class="wrapper">
        <h1>MANAGE ADMIN</h1>
        <br/><br/>

        <?php 
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];//displaying session message
            unset($_SESSION['add']);//removing session message
        }
        ?>
        <br/><br/>

        <!-- Button to Add Admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br/><br/><br/><br/>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>

            <?php
                    //query to get all admin
                     $sql="SELECT* FROM  tbl_admin";

                     //excute teh query
                     $res=mysqli_query($conn,$sql);

                     //check whether the query is excuted or not
                     if($res==TRUE)
                     {
                        //count rows to check whether we have data in database
                        $rows=mysqli_num_rows($res);//function to get all the rows

                        $sn=1;//create a variable and assign the value

                        //check the num of rows
                        if($count> 0)
                        {
                            //we have data in database
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //using while loop to get all the data from database
                                //and while loop will run as long as we have data in database

                                //get individual data
                                $id=$rows['id'];
                                $full_name=$rows['full_name'];
                                $username=$rows['username'];

                                //display the values in our table
                                ?>
                                    <tr>
                                        <td><?php echo $sn++;?> </td>
                                        <td><?php echo $full_name;?></td>
                                        <td><?php echo $username;?></td>
                                        <td>
                                            <a href="a" class="btn-secondary">Update Admin</a>
                                            <a href="a" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>


                                <?php
                            }
                        }
                        else{
                            //we do not have data in database
                        }
                     }
            ?>

            
        </div>
    </div>
    <!-------main content section ends----->
<?php include("partials/footer.php"); ?> 