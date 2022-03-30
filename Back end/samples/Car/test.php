<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>try</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<button onclick="try2()" style="color:blue;">try me</button>
<p id="1">text here</p>
<script>
function try2() {
  $.ajax({
  type: "POST",
  url: "try.php",
  success: function(data){
    $('#1').html(data);
  }
  });
}
</script>

</body>
</html>