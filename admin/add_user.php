<?php include("includes/header.php"); ?>
<?php if(!$session->isSignedIn()){redirect("login.php");} ?>

<?php

$user=new User();

if(isset($_POST['create'])){



    if($user){
        $user->username=$_POST['username'];
        $user->first_name=$_POST['first_name'];
        $user->last_name=$_POST['last_name'];
        $user->password=$_POST['password'];


        $user->setFile($_FILES['user_image']);
        if($user->uploadPhoto())
        {
            $user->save();
            $session->message("User ({$user->username}) has been added");
            redirect("users.php");
        }


//            var_dump($user->uploadPhoto());
//            var_dump($user->errors);




//        if($user->uploadPhoto()){
//            echo "<h2>OK</h2>";
//        }else{
//            echo "<h2>ERROR</h2>";
//        }

    }

}

?>





    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <?php include("includes/top_nav.php")?>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <?php include("includes/side_nav.php")?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Users
                        <small>Subheading</small>
                    </h1>
                    <form method="post" enctype="multipart/form-data">

                        <div class="col-md-6 col-md-offset-3">
                            <?php echo join("<br>",$user->errors); ?>
                           <div class="form-group">
                               <input type="file" name="user_image">
                           </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>


                            <div class="form-group">
                               <label for="first_name">First Name</label>
                               <input type="text" name="first_name" class="form-control">
                           </div>
                            <div class="form-group">
                               <label for="last_name">Last name</label>
                               <input type="text" name="last_name" class="form-control">
                           </div>
                            <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" name="password" class="form-control">
                           </div>
                            <div class="form-group">

                               <input type="submit" name="create" class="btn btn-primary pull-right">
                           </div>

                        </div>


                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>

