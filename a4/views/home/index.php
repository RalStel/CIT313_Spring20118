<?php
include('views/elements/header.php');?>
<style>


.sidenav {
    height: 100%;
    width: 320px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

</style>
<div class="container">
    <div id="image">
        
        
        <img src="smile.png" width="100%" class="img center top">
    </div>
	<div class="page-header">
    <h1>Final Course Project</h1>
    <h2>This site is about my final course project</h2>
    <div class="sidenav">
        <br>
        <br>
        <br>
        <h2>Get Weather</h2>
        <h3>Enter city name</h3>
        <input type="text" name="city" id="city" placeholder="City Name">
        <button id="submitWeather" class="btn btn-primary">Search City</button>
        <div id="show"></div>
</div>
  </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>