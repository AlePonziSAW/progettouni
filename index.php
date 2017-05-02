<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sito - Login/Register</title>
        <link rel="stylesheet" href="login.css">
	<!-- 	<link rel="icon" source="favicon-16x16.png" type="image/x-icon"> -->
    </head>

    <body>
<?php
	session_start();
	//echo var_dump($_SESSION["loggedin"] == true);
	if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
		header('location: inside.php');	
	}
	if(isset($_COOKIE["autologin"])) {
		
		$_SESSION["user"] = $_COOKIE["autologin"];//qua devo trovare il cookie value_------___________------------_____________----------------_________-----------
        $_SESSION["loggedin"] = true;
		header('location: inside.php');
	}
?>
	
<!-- Registration Popup -->
	
<div id="regDiv" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="register.php" method="post">

    <div class="container" style="text-align:center;">
		<br><b>Registration</b><br><br>
		
	  <label><b>Email</b></label><br>
      <input type="text" placeholder="Enter your e-mail" name="email" required><br>
	
      <label><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="user" required><br>

      <label><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="pass" required><br>
	  
	  <label><b>Password Confirm</b></label><br>
      <input type="password" placeholder="Reapeat Password" name="repeatpass" required><br><br>

      <button type="submit">Register</button><br><br>
  <!--     <span class="psw">Forgot <a href="#" >password?</a></span><br> -->
    </div>

  </form>
</div>
	
<div id="header">
	<div id="main">
	  <span style="font-size:30px;cursor:pointer;" onmouseover="openNav()">&#9776;</span>
	  <span id="Title">MyWebPageHome</span>
	  <form style="font-size:15px;" action="login.php" method="post" >
		  <table>
			<tbody>
				<tr>
					<td>
					User/Mail 
					</td>
					<td>
					Password 
					</td>
					<!-- <td>
					<input type="checkbox" checked="checked" style="width:100%;height:100%;"> Remember me
					</td> -->
					
				</tr>
				<tr>
					<td>
					<input type="text" name="user">
					</td>
					<td>
					<input type="password" name="pass">
					</td>
					<td>
					<input class="pulsante" type="submit" value="Login" style="width:150%;">
					</td>
					<!-- <td>
					<button class="pulsante" onclick="openRegistration()">Registration</button>
					</td> -->
				</tr>
				
				<tr>
					<td>
					Remember me
					</td>
					<td>
					<input type="checkbox" style="align=left;font-size:5px;width=100%;height=100%" name="remember">
					</td>
				</tr>
				
			</tbody>
		   </table>
	  </form>
	</div>
	<div id="fading"></div>
</div>
	
<!-- SideNav -->
	
<div id="mySidenav" onmouseleave="closeNav()" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Cos'è Mysite?</a>
  <a href="#">Info</a>
  <a href="#">Eventualmente...</a>
  <a href="#">..altre...</a>
  <a href="#">..voci qua...</a>
  <a href="#" onclick="openRegistration()">Register</a>
</div>



<!--	Slideshow	-->

<div class="slideshow-container">

	<div class="mySlides">
	  
	  <img src="img1.jpg">
	  <div class="text" style="position:fixed;right:5%;top:20%;text-align:right;">
		Nel mezzo del cammin di nostra vita<br>
		mi ritrovai per una selva oscura,<br>
		ché la diritta via era smarrita.     <br>  <br>                                    

		Ahi quanto a dir qual era è cosa dura<br>
		esta selva selvaggia e aspra e forte<br>
		che nel pensier rinova la paura!        <br><br>                              

		Tant’è amara che poco è più morte;<br>
		ma per trattar del ben ch’i’ vi trovai,<br>
		dirò de l’altre cose ch’i’ v’ho scorte.    <br><br>                            

		Io non so ben ridir com’i’ v’intrai,<br>
		tant’era pien di sonno a quel punto<br>
		che la verace via abbandonai.          <br><br>                               

		Ma poi ch’i’ fui al piè d’un colle giunto,<br>
		là dove terminava quella valle<br>
		che m’avea di paura il cor compunto,<br><br>                            

		guardai in alto e vidi le sue spalle<br>
		vestite già de’ raggi del pianeta<br>
		che mena dritto altrui per ogne calle.<br><br>         
	  </div>
	  
	</div>

	<div class="mySlides">
	  
	  <img src="img2.jpg">
	  <div class="text" style="position:fixed;right:5%;top:20%;text-align:right;">
		Well I heard there was a secret chord<br>
		That David played and it pleased the Lord<br>
		But you don't really care for music, do you?<br>
		Well it goes like this: the fourth, the fifth<br>
		The minor fall and the major lift<br>
		The baffled king composing Hallelujah<br><br>
		Hallelujah [x4]<br><br>
		Your faith was strong but you needed proof<br>
		You saw her bathing on the roof<br>
		Her beauty and the moonlight overthrew you<br>
		She tied you to her kitchen chair<br>
		She broke your throne and she cut your hair<br>
		And from your lips she drew the Hallelujah<br>
	  </div>
	</div>

	<div class="mySlides">
	  
	  <img src="img3.jpg">
	  <div class="text" style="position:fixed;right:5%;top:20%;text-align:right;">
		  Somebody once told me the world is gonna roll me<br>
		  I ain't the sharpest tool in the shed<br>
		  She was looking kind of dumb with her finger and her thumb<br>
		  In the shape of an "L" on her forehead<br><br>
		  
		  Well the years start coming and they don't stop coming<br>
		  Fed to the rules and I hit the ground running<br>
		  Didn't make sense not to live for fun<br>
		  Your brain gets smart but your head gets dumb<br>
		  So much to do, so much to see<br>
		  So what's wrong with taking the back streets?<br>
		  You'll never know if you don't go<br>
		  You'll never shine if you don't glow<br>

	  
	</div>

</div>

<div class>


</div>

<script src="scripts.js"></script>

</body>
</html>