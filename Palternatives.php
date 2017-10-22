
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
  <li><a href="IntroPest.php">INTRODUCTION</a></li>
<li><a href="Pclass.php">CLASSIFICATON</a></li>
<li><a href="puses.php">USES</a></li>
<li><a href="Peffects.php">EFFECTS</a></li>

<li><a href="Palternatives.php">ALTERNATIVES</a></li>
<li><a href="UserBuyPest.php">BUY PESTICIDES</a></li>

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
  <h1><b> Alternatives :</b></h1>
  <ul>
    <li>Alternatives to pesticides are available and include methods of cultivation, use ofbiological pest controls (such as pheromones and microbial pesticides),genetic engineering, and methods of interfering with insect breeding.Application of composted yard waste has also been used as a way of controlling pests. These methods are becoming increasingly popular and often are safer than traditional chemical pesticides. In addition, EPA is registering reduced-risk conventional pesticides in increasing numbers.</li><br>
    <li>Cultivation practices include polyculture(growing multiple types of plants), crop rotation, planting crops in areas where the pests that damage them do not live, timing planting according to when pests will be least problematic, and use of trap crops that attract pests away from the real crop. In the U.S., farmers have had success controlling insects by spraying with hot water at a cost that is about the same as pesticide spraying.[unreliable source?]</li><br>
    <li>Release of other organisms that fight the pest is another example of an alternative to pesticide use. These organisms can include natural predators or parasites of the pests. Biological pesticides based onentomopathogenic fungi, bacteria andviruses cause disease in the pest species can also be used.</li><br>
    <li style="float:left;font-size:20px;">Push pull strategy</li><br><br><br>
      <ul>
        <li>The term "push-pull" was established in 1987 as an approach for integrated pest management (IPM). This strategy uses a mixture of behavior-modifying stimuli to manipulate the distribution and abundance of insects. "Push" means the insects are repelled or deterred away from whatever resource that is being protected. "Pull" means that certain stimuli (semiochemical stimuli, pheromones, food additives, visual stimuli, genetically altered plants, etc.) are used to attract pests to trap crops where they will be killed. There are numerous different components involved in order to implement a Push-Pull Strategy in IPM.</li><br>
        <li>Many case studies testing the effectiveness of the push-pull approach have been done across the world. The most successful push-pull strategy was developed in Africa for subsistence farming. Another successful case study was performed on the control ofHelicoverpa in cotton crops in Australia. In Europe, the Middle East, and the United States, push-pull strategies were successfully used in the controlling of Sitona lineatus in bean fields.</li><br>
       </ul>
      <li style="float:left;font-size:20px;">Effectiveness</li><br><br><br>
      <ul>
        <li>Some evidence shows that alternatives to pesticides can be equally effective as the use of chemicals. For example, Sweden has halved its use of pesticides with hardly any reduction in crops.[unreliable source?] In Indonesia, farmers have reduced pesticide use on rice fields by 65% and experienced a 15% crop increase.[unreliable source?] A study of Maize fields in northern Florida found that the application of composted yard waste with high carbon to nitrogen ratio to agricultural fields was highly effective at reducing the population of plant-parasiticnematodes and increasing crop yield, with yield increases ranging from 10% to 212%; the observed effects were long-term, often not appearing until the third season of the study.</li><br>
        </ul>
    </li><br>
  </ul>

</div>
</center>
</div>
<div id="footer">
Copyright © worldexplore.com
</div>



</body>
</html>





