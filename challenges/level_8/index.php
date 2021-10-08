<?php
$token = "WASP{cOnGrATuLaTioNs_Challenge8_cOmPl3ted!}";
$cookie_name="Flag";
setcookie($cookie_name,$token, time() + (86400 * 30), "/");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <style>
      * {
    font-family: 'IBM Plex Mono', monospace;
    color: #9e5858ec;
}

.form-control {
    margin: auto;
    width: 50%;
    height: 500px;
    font-size: 300%;
    text-align: center;
    vertical-align: middle;
    line-height: 100px;
}

.textbox {
	border: 3px inset #FFA5A5;
	outline: 100px;
    height: 50px;
    width: 500px;
    max-width: 500px;
}

.button {
    border: 3px inset #FFA5A5;
	outline: 100px;
	height:50px;
	width: 100px;
    text-transform:uppercase;
    box-sizing: border-box;
    font-weight: bolder 1000px;
    text-align:center; 
    transition: all 0.15s; 
    }

.button:hover{
    color:#aa5353;
    border-color:#501a1a;
}

.button:active{
    color:#aa5353;
    border-color:#501a1a;
}
    
@media all and (max-width:30em){

    .button{
        display:block;
        margin:0.4em auto;
    }

    .textbox {
        display: inline;
    }
}
    </style>
  </head>
  
  <body>
    <section id="user-input">
      <form action="./index.php" method="post" >
          <div class="form-control">
            <br>
              <label for="message-image">Search...</label> <br> <!-- Search -->
              <input class = "textbox" type="text" id="ccc" name="message-image" /> <br>
              <button class = "button" type="submit">Submit</button>
          </div>      
      </form>
    </section>
  </body>
</html>

<?php
if(sizeof($_POST)!=0){
    echo $_POST['message-image'];
}
?>
