<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.input-textbody{
	width:100%;
	height:100%;
	margin-right:5px;
}
.head{
	display: flex;
	justify-content:center;
	color:white;
}
.logout{
	margin-left:60em;
	margin-top:20px;
	width: 70px;
	height:20px
}
.logout:hover{
	width: 90px;
	height:30px;
	letter-spacing:1.5;
}
@media only screen and (max-width:900px) {
    .logout{
        margin-left: 10em;
    }
}

    </style>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$('#diary').bind('input propertychange', function() {
  
  $.ajax({
      method:"POST",
      url:"update.php",
      data: {content: $("#diary").val() }
  })
});
	</script>
</body>
</html>