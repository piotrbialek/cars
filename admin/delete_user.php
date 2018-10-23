<?php include("includes/header.php"); ?>
<?php if(!$session->isSignedIn()){redirect("login.php");} ?>

<?php echo "works id=".$_GET['id'];

if(empty($_GET['id'])){
    redirect('users.php');
}

$user=User::findById($_GET['id']);

if($user){

    $user->deletePhoto();
    $session->message("User {$user->username} has been deleted");
    redirect('users.php');

}else{
    redirect('users.php');
}

?>