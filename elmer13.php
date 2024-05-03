<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color: white;
	color: white;
}


.topnav {
  background-color: white;
   position: fixed;
  top: 0;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 5px 95px;
  text-decoration: none;
  font-size: 35px;

}

.topnav a.active {
  background-color: #04AA6D;
  color: black;
}

.topnavblue {
  float: right;
   width: 40%;
  height: 10px;
  weight:5% 0;
  padding-top: 100%;
  text-align: right;
  padding: 0px 22px;
  
}
.topnav a:hover {
    transition: transform .2s;
    -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(.9);

}body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button.btn12{
margin: 50px 5px;
padding:50px;
}
button.btn13{
margin: 0px;


}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40;
  Hieght: 60;
  border-radius: 50;
}

.container {
  height: 220px;
  width: 500px;
  color: black;
    margin-top: -500px 
    margin-bottom: -500px 

}
.container2 {
  height:800px;
  width: 500px;
  color: black;


}

.modal {
  display: none;
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: -2%  10% ;
  border: 1px solid #888;
  width: 80%; 
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.zoom1 {
  padding: 18px;
  background-color: white;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid #AF601A;
  color: black;
  border-radius: 10px;
}
.zoom {
  padding: 18px;
  background-color: #AF601A;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid #AF601A;
  color: white;
  border-radius: 10px;
}

.zoom:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.zoom1:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.container6 {
  text-align: center;
  color: white;
}

.label2 {
  color: Black;
  padding: 8px;
  font-family: Arial;
  font-size: 40px;
}
	.container123{
	text-align: center;
	color: white;
}
.button256 {
  background-color: #AF601A; 
  border: none;
  color: white;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}

.img-hover-zoom {
  height: 250px; 
  width: 250px; 
  overflow: hidden; 
  align-items: center;
}

.img-hover-zoom img {
  transition: transform .5s ease;
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  align-items: center;
}
.img-hover-zoom:hover img {
  transform: scale(1.1);
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  padding: 10px 90px;
  align-items: center;
  text-decoration: none;
}
.btn1245 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-118%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12456 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-65%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12457 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-140%, -130%);
  background-color: white;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12458 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-95%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
 a { text-decoration: none; }
 .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -15px 0px;
  color: black;
} .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -15px 0px;
  color: black;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.zoom45.btn12 {
  background-color: black;
  border: none;
  cursor: pointer;
  padding: 3px 0px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 400px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align: left;
    left: 50%;
    transform: translateX(-50%);
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  color: white;
  padding: -5px 100px;
  text-decoration: none;
  display: block;
  text-align: left;
  transform: translate(-15%);
  font-size: 27px;
}

.dropdown-content a:hover {
  background-color: black;
}
.rectangle {
  height: 863px;
  width: 100%;
  background-color: #555;
}
    .container552{
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>
<div class="topnav" class="header" id="myHeader">
<header>
&nbsp;
  <a href="elmer1.php" ><img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="topnavblue">
	<button class="zoom1" class="btn12" onclick="document.getElementById('id01').style.display='block'" style="width:180px; ">Login</button>
	<button class="zoom" class="btn13" onclick="document.getElementById('id02').style.display='block'" style="width:180px; background-color: #AF601A;">Sign Up</button>
  </div>
  </header>
</div>


<div id="id01" class="modal">
  
  <form class="container552" class="modal-content animate" action="elmer2.php" method="post">
  <center>
    <div class="imgcontainer">
	
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
	  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br>
	  <button class="zoom1" class="btn13" type="submit" style="width:auto;" >Login</button>
	  <br>
	  </form>
	  </div>
</div>
<div id="id02" class="modal">
<form class="container552" class="modal-content animate" action="elmer2.php" method="post">
  <center>
      <div class="imgcontainer">
	        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img align="center" src="Bigb2.png" class="center" width="250" height="80" href="#about">
	   </div>
	   <div class="container2">
	   
    <h1>Sign Up</h1>
    <label>Please fill in this form to create an account.</label>
	<br>
	<br>
   <label for="email"><b>First Name </b></label>
    <input type="text" placeholder="First Name" name="name" required>
	
	<label for="email"><b>Last Name </b></label>
    <input type="text" placeholder="Last Name" name="name" required>
    
     <label for="email"><b> Birth Date </b></label>
    <input type="text" placeholder="Birth Date" name="Date" required>
	
	<label for="email"><b>Address </b></label>
    <input type="text" placeholder="Address" name="address" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	<label for="email"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
	<center>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
		  <a href="elmer2.php"><button class="zoom1" class="btn13" type="submit" style="width:auto;">Sign up</button></a>
		  </form> 
</center>
	  </div>
</div>
<div class="rectangle" align="left">
<br><br><br><br><br><br>
<h1>How can we help?</h1>
<h3>Can't log in?</h3><br>

<h4>Don't worry – we're right here to help you.</h4><br>

⚠️ Grab N' Go: Have any question about a particular order? Just log into the account you used to place the order with. Our customer care team is right here to support you!
</div>

</body>
</html>