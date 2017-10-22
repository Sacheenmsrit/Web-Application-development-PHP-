
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
  <h1><b> Bacterial Disease :</b></h1>
  <img src="F:\html pro\intertopics\cropdisease\pic28.jpg" alt="Sugercane" style="height:500px;width:900px;float:center">
  <h1><b> Root-knot nematode galls :</b></h1>
  <p style="font-size:20px">    Nematodes are small, multicellular wormlike animals. Many live freely in the soil, but there are some species that parasitize plant roots. They are a problem in tropical and subtropical regions of the world, where they may infect crops. Potato cyst nematodes (Globodera pallida and G. rostochiensis) are widely distributed in Europe and North and South America and cause $300 million worth of damage in Europe every year. Root knot nematodes have quite a large host range, whereas cyst nematodes tend to be able to infect only a few species. Nematodes are able to cause radical changes in root cells in order to facilitate their lifestyle.</p>

  <h3><b> Root-knot nematode galls :</b></h3>
  <p style="font-size:20px">   Nematodes are tiny microscopic animals with wormlike bodies and long, needlelike structures called stylets that suck nutrients from plant cells. They lay eggs that hatch as larvae and go through four stages before becoming adults. Nematodes have a 30-day life cycle, but they can remain in a dormant state for more than 30 years. </p>

  
  <p style="font-size:20px"> . Nematicides are chemicals used to control nematode infestations. Marigolds are resistant to nematodes and are often planted to help eliminate them from infected soil. Nematodes primarily attack plant roots, but they may also destroy other parts of the plant either internally or externally.</p>

  <h3><b> Protozoa and algae     :</b></h3>
  <p style="font-size:20px">  There are a few examples of plant diseases caused by protozoa (e.g., Phytomonas, a kinetoplastid). They are transmitted as zoospores that are very durable, and may be able to survive in a resting state in the soil for many years. They have also been shown to transmit plant viruses.</p>

  <h3><b> Parasitic plants         :</b></h3>
  <p style="font-size:20px">  Parasitic plants such as mistletoe and dodder are included in the study of phytopathology. Dodder, for example, is used as a conduit either for the transmission of viruses or virus-like agents from a host plant to a plant that is not typically a host or for an agent that is not graft-transmissible.</p>

</center>
</div>
<div id="footer">
Copyright © worldexplore.com
</div>



</body>
</html>





