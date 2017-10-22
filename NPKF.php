
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
  <li><a href="Fclass.php">CLASIFICATION</a></li>
<li><a href="BINPKF.php">BINARY NPK </a></li>
<li><a href="NPKF.php">NPK FERTILIZERS</a></li>
<li><a href="ComF.php">COMPOUND </a></li>

<li><a href="FerApp.php">APPLICATION</a></li>
<li><a href="UserBuyFert.php">BUY FERTILIZERS </a></li>

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
<center><div style="height:1400px;width:1000px;float:center">
  <h1><b>  <span style="color:red">NPK</span> Fertilizers :</b></h1>
  <p style="font-size:20px">    NPK fertilizers are three-component fertilizers providing nitrogen, phosphorus, and potassium.</p>
  <p style="font-size:20px">   NPK rating is a rating system describing the amount of nitrogen, phosphorus, and potassium in a fertilizer. NPK ratings consist of three numbers separated by dashes (e.g., 10-10-10 or 16-4-8) describing the chemical content of fertilizers. The first number represents the percentage of nitrogen in the product; the second number, P2O5; the third, K2O. Fertilizers do not actually contain P2O5or K2O, but the system is a conventional shorthand for the amount of the phosphorus (P) or potassium (K) in a fertilizer. A 50-pound bag of fertilizer labeled 16-4-8 contains 8 pounds of nitrogen (16% of the 50 pounds) an amount of phosphorus and potassium equivalent to that in 2 pounds of P2O5 (4% of 50 pounds) and 4 pounds of K2O (8% of 50 pounds). Most fertilizers are labeled according to this N-P-K convention, though Australian convention, following an N-P-K-S system, adds a fourth number for sulfur.</p>
  <h2><b> <span style="color:red">Nitrogen</span> fertilizers :</b></h2>
    <p style="font-size:20px">    Nitrogen fertilizers are made from ammonia(NH3), which is sometimes injected into the ground directly. The ammonia is produced by the Haber-Bosch process.[5] In this energy-intensive process, natural gas (CH4) supplies the hydrogen, and the nitrogen (N2) is derived from the air. This ammonia is used as a feedstock for all other nitrogen fertilizers, such as anhydrous ammonium nitrate (NH4NO3) and urea (CO(NH2)2).</p>
    <p style="font-size:20px">    Deposits of sodium nitrate (NaNO3) (Chilean saltpeter) are also found in the Atacama desert in Chile and was one of the original (1830) nitrogen-rich fertilizers used.[12] It is still mined for fertilizer.</p>
  
    <p style="font-size:20px">    There has been technical work investigating on-site (on-farm) synthesis of nitrate fertilizer using solar photovoltaic power, which would enable farmers more control in soil fertility, while using far less surface area than conventional organic farming for nitrogen fertilizer.</p>
    <h2><b> <span style="color:red">Phosphate</span> fertilizers :</b></h2>
    <p style="font-size:20px">    All phosphate fertilizers are obtained by extraction from minerals containing theanion PO43−. In rare cases, fields are treated with the crushed mineral, but most often more soluble salts are produced by chemical treatment of phosphate minerals. The most popular phosphate-containing minerals are referred to collectively as phosphate rock. The main minerals are fluorapatiteCa5(PO4)3F (CFA) and hydroxyapatiteCa5(PO4)3OH. These minerals are converted to water-soluble phosphate salts by treatment with sulfuric or phosphoric acids. The large production of sulfuric acid as an industrial chemical is primarily due to its use as cheap acid in processing phosphate rock into phosphate fertilizer. The global primary uses for both sulfur and phosphoruscompounds relate to this basic process.</p>
    <p style="font-size:20px">    In the nitrophosphate process or Odda process (invented in 1927), phosphate rock with up to a 20% phosphorus (P) content is dissolved with nitric acid (HNO3) to produce a mixture of phosphoric acid (H3PO4) andcalcium nitrate (Ca(NO3)2). This mixture can be combined with a potassium fertilizer to produce a compound fertilizer with the three macronutrients N, P and K in easily dissolved form.</p>
   
</div>
</center>
</div>
<div id="footer">
Copyright © worldexplore.com
</div>



</body>
</html>



