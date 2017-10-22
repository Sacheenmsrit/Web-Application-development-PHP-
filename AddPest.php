

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>sign up</title>
<style>
input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=text]:focus {
    border: 3px solid #555;
}
input[type=password]:focus {
    border: 3px solid #555;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
	margin: 18px 18px 18px 18px;
}
</style>
</head>
<body>
<div>
  <form action="datacapturePest.php" method="post">
	   <label for="BatchNo">Batch No&nbsp&nbsp&nbsp:</label>
    <input type="text" id="BatchNo" name="BatchNo">
    <label for="URL">IMAGE URL&nbsp&nbsp&nbsp:</label>
    <input type="text" id="URL" name="URL"><br>

    <label for="PRICE">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPRICE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
    <input type="text" id="PRICE" name="PRICE">

Description :
    <input type="text" id="Description" name="Description"><br>
    Quantity :
    <input type="text" id="Quantity" name="Quantity">
    <input type="submit" value="ADD">
  </form>
 
</div>

</body>
</html>



