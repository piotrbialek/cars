<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Dashboard</small>
            </h1>






            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $session->count; ?></div>
                                    <div>New Views</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">

                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-photo fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo Photo::countAll(); ?></div>
                                    <div>Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="photos.php">
                            <div class="panel-footer">
                                <span class="pull-left">Total Photos in Gallery</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo User::countAll(); ?>

                                    </div>

                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="users.php">
                            <div class="panel-footer">
                                <span class="pull-left">Total Users</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo Comment::countAll(); ?></div>
                                    <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="comments.php">
                            <div class="panel-footer">
                                <span class="pull-left">Total Comments</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div> <!--First Row-->

            <div class="row">

                <div id="piechart" style="width: 900px; height: 500px;"></div>


            </div>
















            <?php //if($database->connection){echo "connection ok";}?>
            <?php
            $sql = "SELECT * FROM users WHERE id=1";
//            $result = $database->query($sql);
//            $user_found = mysqli_fetch_array($result);
//            echo $user_found['password'];
//            echo "<br>";
            ?>
            <?php


//            $result_set=User::findAll();
//            while($row=mysqli_fetch_array($result_set)) {
//                echo $row["username"]."<br>";
//            }

//            $temp_id=2;
//            $found_user=User::findById($temp_id);
//            echo "find by id ($temp_id) =".$found_user->username.", id: $found_user->id<br>";



//            $user=User::instantation($found_user);
//            echo $user->last_name."<===lastname";

              //wypisuje wszystkich userow----
//            $users=User::findAll();
//
//            foreach ($users as $user) {
//
//                echo $user->username."<br>";
//
//            }
//            ---------------------------------



//            echo "<br>";
//            $user = new User();
//            $user->username="dasdasasd";
//            $user->password="123456sdasddas";
//            $user->first_name="asdqwe";
//            $user->last_name="zxc";
//            $user->create();
//            echo $user->id;


//            $user=User::findById(40);
//            $user->last_name = "stanisalwski";
//            $user->update();

//            $user=User::findById(33);
//            $user->delete();

//            $user=User::findById(35);
//            $user->password="pass2";
//            $user->save();

//            $user=new User();
//            $user->username="nowyuser22222";
//            $user->save();

//            echo "<br>";
//            $ph = new Photo();
//            $ph ->title="dasdasasd";
//            $ph ->filename="123456sdasddas";
//            $ph ->description="asdqwe";
//            $ph ->size=16;
//            $ph ->type="image";
//            $ph ->create();
//            echo $ph ->id;
//
//            $photos=Photo::findAll();
//            foreach ($photos as $photo) {
//
//                echo $photo->title."<br>";
//
//            }

            echo INCLUDES_PATH;

            ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
