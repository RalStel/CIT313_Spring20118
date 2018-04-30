
<?php include('views/elements/header.php'); 
?>
<?php
if (is_array($post)) {
    extract($post);
}
?>

<div class="container">
    <div class="page-header">

        <h1><?php echo $title; ?></h1>
    </div>
    <p><?php echo $content; ?></p>
    <sub><?php echo 'Posted on ' . $date . ' by <a href="' . BASE_URL . 'members/view/' . $uid . '">' . $first_name . ' ' . $last_name . '</a> in <a href="' . BASE_URL . 'category/view/' . $categoryid . '">' . $name . '</a>'; ?>
    </sub>
    <?php
    $cururl = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    $urlbits = explode('/', $cururl);
    $postID = end($urlbits);
    ?> 
    
 
   <h4>View Comments</h4>

 <?php if (is_array($comment)) {
 extract($comment);
 }
 ?>

 <p><?php echo $commentText ?></p>
 <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a>'; ?>
 </sub>


 <?php
 if($u->isAdmin()) {
 ?>
 <form class="" action="" method="post" onsubmit="editor.post()">
 <button id="submit" type="submit" class="btn btn-primary">Delete Comment</button>
 </form>
 <?php
 }
 ?>

 <form class="" action="<?php echo BASE_URL?>managecomments/add/<?php echo $task ?>" method="post" onsubmit="editor.post()">
 <button id="submit" type="submit" class="btn btn-primary">Comment</button>
 </form>

<?php include('views/elements/footer.php'); ?>