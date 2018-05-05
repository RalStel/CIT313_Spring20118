
<?php
include('views/elements/header.php');?>

<?php 
if( is_array($user) ) {
	extract($user);}?>

<div class="container">
	<div class="page-header">

<h1>Member <?php echo $user['first_name'];?> <?php echo $user['last_name'];?></h1>
        <p>Email: <?php echo $user['email'];?></p>
  </div>


</div>
<form id="profile_form" action="<?php echo BASE_URL;?>members/" method="post">

<fieldset>
<legend>Profile Info</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name'];?>" maxlength="20" />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $user['last_name'];?>" maxlength="20" />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $user['email'];?>" maxlength="100" />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password"  maxlength="100" />

<br />

<label for="passwordtwo">Verify Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="passwordtwo"  maxlength="100" />

<br />
<input type="hidden" name="currentpass" value="<?php echo $user['password'] ?>"/>


 
<button id="submit" type="submit" class="btn btn-primary" >Update</button>
</fieldset>
</form>
<?php include('views/elements/footer.php');?>