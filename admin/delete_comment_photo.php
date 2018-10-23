<?php include("includes/header.php"); ?>
<?php if(!$session->isSignedIn()){redirect("login.php");} ?>

<?php echo "works id=".$_GET['id'];

if(empty($_GET['id'])){
    redirect("comment_photo.php?id={$comment->photo_id}");
}

$comment=Comment::findById($_GET['id']);

if($comment){

    $comment->delete();
    $session->message("User's ({$comment->author}) comment about the photo ({$comment->photo_id}) has been deleted");
    redirect("comment_photo.php?id={$comment->photo_id}");

}else{
    redirect("comment_photo.php?id={$comment->photo_id}");
}

?>