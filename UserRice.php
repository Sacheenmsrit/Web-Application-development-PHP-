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
    padding: 8px 55px;
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
  <li><a href="UserWheat.php">WHEAT</a></li>
<li><a href="UserMaize.php">MAIZE</a></li>
<li><a href="UserRice.php">RICE</a></li>
<li><a href="UserMillet.php">MILLET</a></li>
<li><a href="UserSugercane.php">SUGER CANE</a></li>
<li><a href="UserCotton.php">COTTON</a></li>
</ul>

</ul>
<div class="dropdown">
  <button class="dropbtn"><b><?php echo " ".$_SESSION['CurrentUser']." " ?></b></button>
  <div class="dropdown-content">
    <a href="UserProfile.php">Profile</a>
    <a href="#">Update Profile</a>
    <a href="Userdelete.php">Delete Account</a>
     <a href="UserLogout.php">Log Out</a>
  </div>
</div><br><br>
<ul class="pagination2">
<li><a href="UserCrops1.php">CROPS</a></li>
<li><a href="UserSeeds.php">SEEDS</a></li>
<li><a href="UserFertizers.php">FERTILIZERS</a></li>
<li><a href="UserPesticides.php">PESTICIDES</a></li>
<li><a href="UserEquipments.php">EQUIPMENTS</a></li>
<li><a href="UserTechnology.php">TECHNOLOGY</a></li>
<li><a href="UserCropDisease.php">CROP DISEASE</a></li>
</ul>
<div class="section">
<center><div style="height:1400px;width:700px;float:center">
  <h1><b> Rice :</b></h1>
  <img src="F:\html pro\intertopics\crops_sub\pic89.jpg" alt="Rice" style="height:400px;width:700px;float:center">
  <b><p style="font-size:20px">    <span style="color:red;">Rice</span> is the seed of the grass species Oryza sativa (Asian rice) or Oryza glaberrima (African rice). As a cereal grain, it is the most widely consumed staple food for a large part of the world's human population, especially in Asia. It is the agricultural commodity with the third-highest worldwide production, after sugarcane and maize, according to 2012 FAOSTAT data. </p>
  <p style="font-size:20px">    Wild rice, from which the crop was developed, may have its native range in Australia. Chinese legends attribute the domestication of rice to Shennong, the legendary emperor of China and inventor of Chinese agriculture. Genetic evidence has shown that rice originates from a single domestication 8,200–13,500 years ago in the Pearl River valley region ofChina. Previously, archaeological evidence had suggested that rice was domesticated in the Yangtze River valley region in China. </p>
  <p style="font-size:20px">Rice, a <span style="color:red;">monocot</span>, is normally grown as an <span style="color:red;">annual plant</span>, although in tropical areas it can survive as a <span style="color:red;">perennial</span> and can produce a <span style="color:red;">ratoon</span>crop for up to 30 years. The rice plant can grow to 1–1.8 m (3.3–5.9 ft) tall, occasionally more depending on the variety and soil fertility. It has long, slender leaves 50–100 cm (20–39 in) long and 2–2.5 cm (0.79–0.98 in) broad. The small <span style="color:red;">wind-pollinated</span> flowers are produced in a branched arching to pendulous <span style="color:red;">inflorescence</span> 30–50 cm (12–20 in) long. The edible seed is a grain (<span style="color:red;">caryopsis</span>) 5–12 mm (0.20–0.47 in) long and 2–3 mm (0.079–0.118 in) thick.</p>
  <p style="font-size:20px">Rice cultivation is well-suited to countries and regions with low labor costs and high rainfall, as it is labor-intensive to cultivate and requires ample water. However, rice can be grown practically anywhere, even on a steep hill or mountain area with the use of water-controlling terrace systems. Although its parent species are native to Asia and certain parts of Africa, centuries of trade and exportation have made it commonplace in many cultures worldwide.</p>
  <p style="font-size:20px">The traditional method for cultivating rice is flooding the fields while, or after, setting the young seedlings. </div></b>
</center>  
</div>
<div id="footer">
Copyright © worldexplore.com
</div>
</body>
</html>
