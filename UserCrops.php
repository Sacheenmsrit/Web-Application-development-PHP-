<!DOCTYPE html>
<html>
<head>
	  <?php
session_start();
?>
<meta charset="UTF-8">
<title>UserHomepage</title>
<script type="text/javascript">
window.onload = function(){
    window.displayImgCount = 0;
    function cycleImage(){
        if (displayImgCount !== 0) {
            document.getElementById("img" + displayImgCount).style.display = "none";
        }
        displayImgCount = displayImgCount === 6 ? 1 : displayImgCount + 1;
        document.getElementById("img" + displayImgCount).style.display = "block";
        setTimeout(cycleImage, 1500);
    }
    cycleImage();
}
</script>
<style>

body{ background-image:url("http://hdwallpapers.org.in/uploads/burj_khalifa_dubai_photos_hd_wallpaper_160216085830.jpg");
	background-repeat:no-repeat;
	background-size:cover;
		background-attachment: fixed;
	background-position: right top;
	padding-top: 0px;
	padding-left:0px;
	padding-right:0px;
	padding-bottom:0px;
	background-opacity: 0.5;
    	filter: alpha(opacity=50);

     }
#h {
	overflow:auto;
	color:white;
	border-align:center;
	border:2px solid grey;  
	text-align:center;
	font-size:75px;	
	width:100%;
	height:auto;
	
	background-color:black;
	background: red; /* For browsers that do not support gradients */
  	background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(0,255,0,1)); /*Safari 5.1-6*/
  	background: -o-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Opera 11.1-12*/
  	background: -moz-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Fx 3.6-15*/
  	background: linear-gradient(to right, rgba(255,0,0,0), rgba(0,255,0,1)); /*Standard*/
	text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
	box-shadow: 10px 10px 5px green;
	}

.section {
    float: left;
    width: 1000px;
    height: 1175px;
    margin: 1px;
     

}

.after-box {
    clear: left;
	float:right;
     color:white;
	height:50px;     
}
ul.pagination1 {
    display: inline-block;
    padding: 0;
    margin: 1px;
   float:left;
background-color:black;
	background: red; /* For browsers that do not support gradients */
  	background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(0,255,0,1)); /*Safari 5.1-6*/
  	background: -o-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Opera 11.1-12*/
  	background: -moz-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Fx 3.6-15*/
  	background: linear-gradient(to right, rgba(255,0,0,0), rgba(0,255,0,1)); /*Standard*/
	tex-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
	box-shadow: 10px 10px 5px green;
}

ul.pagination1 li {display: inline;}

ul.pagination1 li a {
    color: black;
    float: left;
    padding: 8px 15px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid green;
border-bottom: 1px solid black;  
  
	font-size: 18px;
}

ul.pagination1 li  {
    background-color: #eee;
    color: black;
    border: 1px solid #ddd;
}

ul.pagination1 li a:hover:not(.active) {background-color: lightgrey;}
ul.pagination2 {
    float: left;
    width: 225px;
    height: 1150px;
    margin: 0px;
    
	text-align:center;
    
    display: inline-block;
    padding: 10px;
    margin: 3px;
float:left;
background: red; /* For browsers that do not support gradients */
  	background: -webkit-linear-gradient(left,rgba(200,0,0,0),rgba(0,200,0,1)); /*Safari 5.1-6*/
  	background: -o-linear-gradient(right,rgba(200,0,0,0),rgba(0,200,0,1)); /*Opera 11.1-12*/
  	background: -moz-linear-gradient(right,rgba(200,0,0,0),rgba(0,200,0,1)); /*Fx 3.6-15*/
  	background: linear-gradient(to right, rgba(200,0,0,0), rgba(0,200,0,1)); /*Standard*/
	tex-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
	box-shadow: 10px 10px 5px green;
}

ul.pagination2 li {display: inline;}

ul.pagination2 li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    font-size: 18px;
	margin:4px 0px 4px 0px;
	width:190px;
}

ul.pagination2 li a.active {
    background-color: green;
    color: black;
    border: 1px solid #ddd;
}

ul.pagination2 li a:hover:not(.active) {background-color: green;color:white;}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
.dropbtn {
    background-color: #32CD32;
    color: Black;
    padding: 10px;
    font-size: 16px;
    border: 1px solid black;
    cursor: pointer;
    
}

.dropdown {
    position: relative;
    display: inline-block;
    height:0px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: lightgrey}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.st
{
	border:3px solid black;
	margin-left:29px;
	 height:400px;
	  width:900px;
}    
</style>
</head>
<body>
<div class="h">
<h1 id="h"><img src="http://ncovt.com/pictures/CropLogo.gif" alt="logo" height="60px" 			width="100"><i><b><span style="color:#FF8C00">Agri</span><span style="color:white">Inf<img 			src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Spinning_Ashoka_Chakra.gif" 			alt="O" height="65px" width="65px"><span style="color:white">rm</span>.<span style="color:green">com</span></b></i></h1>
</div>

<ul class="pagination1">
  <li><a href="UserHomepage.html" class="active" checked>Home</a></li>
  <li><a href="Userphotogalary.html">Photo Gallary</a></li>
  <li><a href="Useraboutus.html">About us</a></li><li><a href="UserHomepage.html" class="active" checked>Home</a></li>
  <li><a href="Userphotogalary.html">Photo Gallary</a></li>
	<li><a href="Usercontactus.html" class="active" checked>Contact Us</a></li>
 <li><a href="Useroffers.html">Offers</a></li>
  <li><a href="Usernews.html">News</a></li>
  <li><a href="Userfeedback.html">Feedback</a></li>

</ul>
<div class="dropdown">
  <button class="dropbtn"><b><?php echo " ".$_SESSION['CurrentUser']." " ?></b></button>
  <div class="dropdown-content">
    <a href="AdminProfile.php">Profile</a>
    <a href="#">Update Profile</a>
    <a href="Admindelete.php">Delete Account</a>
     <a href="AdminLogout.php">Log Out</a>
  </div>
</div><br><br>
<ul class="pagination2">
<li><a href="UserWheat.php">WHEAT</a></li>
<li><a href="UserMaize.php">MAIZE</a></li>
<li><a href="UserRice.php">RICE</a></li>
<li><a href="UserMillet.php">MILLET</a></li>
<li><a href="UserSugercane.php">SUGER CANE</a></li>
<li><a href="UserCotton.php">COTTON</a></li>
</ul>
<div class="section">
<center><div style="height:1400px;width:700px;float:center">
  <h1><b> Wheat :</b></h1>
  <b><p style="font-size:20px">   <span style="color:chocolate;">Wheat</span> (Triticum spp.) is a <span style="color:red;">cereal grain,</span> (botanically, a type of <span style="color:red;">fruit</span> called a <span style="color:red;">caryopsis</span>) originally from the <span style="color:red;">Levant</span> region of the <span style="color:red;">Near East</span> but now cultivated worldwide. In 2013, world production of wheat was 713 million tons, making it the third most-produced <span style="color:red;">cereal</span> after <span style="color:red;">maize</span> (1,016 million tons) and rice (745 million tons). Wheat was the second most-produced cereal in 2009; world production in that year was 682 million tons, after maize (817 million tons), and with rice as a close third (679 million tons).  </p>
  <h1><b> Rice :</b></h1>
  <b><p style="font-size:20px">    <span style="color:red;">Rice</span> is the seed of the grass species Oryza sativa (Asian rice) or Oryza glaberrima (African rice). As a cereal grain, it is the most widely consumed staple food for a large part of the world's human population, especially in Asia. It is the agricultural commodity with the third-highest worldwide production, after sugarcane and maize, according to 2012 FAOSTAT data. </p>
    <h1><b> Millet :</b></h1>
  <p style="font-size:20px">   Millets are a group of highly variable small-seeded grasses, widely grown around the world as cereal crops or grains for fodder and human food. Millets are important crops in the semiarid tropics of Asia and Africa (especially in India, Mali, Nigeria, and Niger), with 97% of millet production in developing countries. The crop is favored due to its productivity and short growing season under dry, high-temperature conditions.</p>
  <h1><b> Maize :</b></h1>
  <p style="font-size:20px">  Maize (/<span style="color:red">maize</span>/ <span style="color:red">mayz;</span> <span style="color:red">Zea mays subsp.</span> <span style="color:red">mays,</span> from <span style="color:red">Spanish:</span> <span style="color:red">maíz</span> after Taíno mahiz), also known as corn, is a large grain plant first domesticated by indigenous peoples in <span style="color:red">Mexico</span> about 10,000 years ago. The six major types of corn are </p>
  <h1><b> Sugercane :</b></h1>
  <b><p style="font-size:20px">    Sugarcane, or sugar cane, is one of the several species of tall <span style="color:red;">perennial true grasses</span> of the genus <span style="color:red;">Saccharum,</span> tribe <span style="color:red;">Andropogoneae,</span> native to the warm temperate to tropical regions of <span style="color:red;">South Asia</span> and <span style="color:red;">Melanesia,</span> and used for <span style="color:red;">sugar</span> production. It has stout jointed fibrous stalks that are rich in the sugar <span style="color:red;">sucrose,</span> which accumulates in the <span style="color:red;">stalk</span> internodes.The plant is two to six metres (six feet seven inches to nineteen feet eight inches) tall. All sugar cane species interbreed and the major commercial <span style="color:red;">cultivars</span> are complex <span style="color:red;">hybrids.</span> Sugarcane belongs to the grass family Poaceae, an economically important seed plant family that includes maize, wheat, rice, and <span style="color:red;">sorghum</span> and many <span style="color:red;">forage</span> crops.</p>
  <p style="font-size:20px">   Sucrose, extracted and purified in specialized mill factories, is used as raw material in human food industries or is fermented to produce <span style="color:red;">ethanol.</span></p>
    <h1><b> Cotton :</b></h1>
  <b><p style="font-size:20px">   <span style="color:chocolate;">Cotton </span> is a soft, fluffy staple <span style="color:red;">fiber</span> that grows in a <span style="color:red;">boll,</span> or protective case, around the seeds of cotton plants of the genus <span style="color:red;">Gossypiumin</span> the family of <span style="color:red;">Malvaceae.</span> The fiber is almost pure <span style="color:red;">cellulose.</span> Under natural conditions, the cotton bolls will tend to increase the dispersal of the seeds.<span style="color:red;">[clarification needed]</span>.</p>

</center>
</div>
<div id="footer">
Copyright © worldexplore.com
</div>



</body>
</html>

