<html>
<script type="text/javascript" src="livevalidation.js"></script>
 <head>
  <title>Index</title>
 </head>
 <body>
 <?php 
 



 ?> 
 
 
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="return validateForm()" method="post">
 <p>Your name: <input type="text" name="name" id="name"; ?>"></p>
 <p>Your age: <input type="text" name="age" id = "age"></p>
 <p><input type="submit" value="submit"></p>
</form>

<script type="text/javascript">
 var a = new LiveValidation('name');
 a.add(Validate.Presence);
 var b = new LiveValidation('age;);
 b.add(Validate.Numericality );
 </script>

Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
 </body>
</html>