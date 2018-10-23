<?php include("includes/header.php"); ?>
<?php if(!$session->isSignedIn()){redirect("login.php");} ?>

<?php echo "works id=".$_GET['id'];

if(empty($_GET['id'])){
    redirect('photos.php');
}

$photo=Photo::findById($_GET['id']);

if($photo){

    $photo->deletePhoto();
    $session->message("Photo {$photo->filename} has been deleted");
    redirect('photos.php');

}else{
    redirect('photos.php');
}

?>