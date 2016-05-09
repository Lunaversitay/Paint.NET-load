<?php include('includez/core.php') ?>
<!DOCTYPE html>

<head>

<title>PaintNET Load</title>

<link href="assets/style.css" rel="stylesheet">

<!-- get a font -->
<link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<!-- fonts are delt with here -->
<style>

h1,
h2,
h3,
h4{
  font-family: 'Arimo', sans-serif;
}

p,
strong{
  font-family: 'Arimo', sans-serif;
}

</style>
</head>

<body>


<div class="daddy-container">

<div class="top-field">
<img src='<?php echo $steam_profile_pic; ?>' style="border-radius: 150px;-webkit-box-shadow: 0px 0px 30px 8px rgba(0,0,0,0.69);-moz-box-shadow: 0px 0px 30px 8px rgba(0,0,0,0.69);box-shadow: 0px 0px 30px 8px rgba(0,0,0,0.69);" width="148px" height="148px">
<h2 style="margin: 0;font-weight:100;padding-top:5px;"><strong style="font-weight: 700;"><?php echo $snazzy_welcome; ?></strong>, <?php echo $steam_persona; ?></h3>
<p style="margin: 0;"><?php echo $steam64id; ?></p> <!-- Why do people need to know their steam 64? Idk some people are retarded -->

</div> <!-- END of top field -->

<div class="left-field">

<h1>Server Rules</h1>
<p><?php echo $rule_1; ?><p>
  <p><?php echo $rule_2; ?><p>
    <p><?php echo $rule_3; ?><p>
      <p><?php echo $rule_4; ?><p> <!-- I got bored and started pressing tab ;) -->
        <p><?php echo $rule_5; ?><p>
          <p><?php echo $rule_6; ?><p>
            <p><?php echo $rule_7; ?><p>
              <p><?php echo $rule_8; ?><p>
                <p><?php echo $rule_9; ?><p>

</div>

<div class="right-field">

<h1><strong>Server</strong> Information</h1>

<i class="fa fa-info-circle fa-3x" aria-hidden="true"></i><h2 id="box-text"><div id="servername">Server Name</div></h2><br>
<i class="fa fa-desktop fa-3x" aria-hidden="true"></i><h2 id="box-text"><div id="gamemode">Gamemode</div></h2><br>
<hr>
<h3>File Percentage: <div style="margin: 0;" id="percent">This will turn into a number and Calculate In-Game</div></h3>
<p><strong>Note:</strong> After downloading our files once, it'll load much faster</p>
</div>

</div> <!-- End of daddy -->



<!-- our Javascript -->
<script src="includez/lunar.js"></script>
</body>
