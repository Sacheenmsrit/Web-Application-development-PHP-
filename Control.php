
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
    padding: 8px 16px;
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
  <li><a href="History.php">HISTORY</a></li>
<li><a href="Bact.php">BACTERIAL DISEASE</a></li>
<li><a href="Fungus.php">FUNGAL DISEASE</a></li>
<li><a href="Nema.php">NEMATODAL DISEASE</a></li>

<li><a href="Virus.php">VIRUS AND VIROIDS</a></li>
<li><a href="Control.php">CONTROL</a></li>

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
  <img src="F:\html pro\intertopics\cropdisease\pic28.jpg" alt="Sugercane" style="height:500px;width:600px;float:center">
  <h1><b> Control Methods :</b></h1>
  <ul>
    <li>Control of plant disease begins with good soil management. The best soil for most plants is loamy, with good drainage and aeration. This minimizes diseases that attack the roots and allows the roots to feed nutrients from the soil to the rest of the plant.</li><br>
    <li>Organic methods, such as the addition of compost, can improve soil quality, and fertilizers can be added to the soil to enrich the nutrient base. Soil pH measures the degree of acidity or alkalinity of the soil. </li><br>
    <li>Gardeners and farmers must be aware of the pH needs of their plants, since the right pH balance can help reduce susceptibility to disease, especially root diseases like club root or black root rot.</li><br>
    <li>Other important factors in the control of plant disease are the selection of disease-resistant plants (cultivars), proper watering, protection of plants from extreme weather conditions, and rotation of crops. </li><br>
    <li>. Disposal of infected plants is important in the control of diseases, as is the careful maintenance of tools and equipment used in farming and gardening. Many plant diseases can easily be spread by hand and by contact with infected tools, as well as by wind, rain, and soil contamination. </li><br>
    
  </ul>
  <h2><b> Plant Resistance :</b></h2>
  <ul>
    <li>Plant disease resistance protects plants from pathogens in two ways: mechanisms and by infection-induced responses of the immune system. </li><br><br>
    <li>. Relative to a susceptible plant, disease resistance is the reduction of pathogen growth on or in the plant, while the term disease tolerance describes plants that exhibit little disease damage despite substantial pathogen levels. </li><br>
    <li>Disease outcome is determined by the three-way interaction of the pathogen, the plant and the environmental conditions (an interaction known as the disease triangle).</li><br>
    <h3><b> Defence :</b></h3>
    <li>Defense-activating compounds can move cell-to-cell and systemically through the plant vascular system. However, plants do not have circulating immune cells, so most cell types exhibit a broad suite of antimicrobial defenses. </li><br>
    <li>Although obvious qualitative differences in disease resistance can be observed when multiple specimens are compared (allowing classification as “resistant” or “susceptible” after infection by the same pathogen strain at similar inoculum levels in similar environments), a gradation of quantitative differences in disease resistance is more typically observed between plant strains or genotypes. </li><br>
  </ul>

</center>
</div>
<div id="footer">
Copyright © worldexplore.com
</div>



</body>
</html>







