<?php include('views/elements/header.php');?>

<div class="container">
   <div class="page-header">
   <h1>Add Comment</h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
       <?php echo $message?>
    </div>
  <?php }?>



    <?php if ($u->isRegistered()) { ?>
        <div class="row">
            <div class="span8">
                <form action="<?php echo BASE_URL?>managecomments/<?php echo $task?>" method="post" onsubmit="editor.post()">

                    <label for="date">Date</label>
                    <?php // set timezone
                    date_default_timezone_set('America/Indiana/Indianapolis');?>
                    <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">


                    <label>Comment</label>
                    <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"><?php echo $commentText?></textarea>
                    <br/>
                    <input type="hidden" name="pID" value="<?php echo $pID?>"/>

                    <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
                </form>


            </div>
        </div>
    <?php }
    else{?>
        <form class="" action="<?php echo BASE_URL?>login/" method="post" onsubmit="">
            <button id="submit" type="submit" class="btn btn-primary">Login</button>
        </form>
    <?php } ?>

</div>
<?php include('views/elements/footer.php');?>