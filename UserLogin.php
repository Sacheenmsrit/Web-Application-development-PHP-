
<!DOCTYPE html>
<html>
<head>
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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="logsign.css"></link>
<title>Insert title here</title>
</head>
<body>
<div>
  <form action="UserLoginVal.php" method="post">
   <h3>User Name :</h3>
    <input type="text" name="username">

  <h3>Password :</h3>
    <input type="password" name="password">
   <input type="submit" value="Log in"> 

  <a  href="signupUser.jsp" style="color:black;text-decoration:none; align:center;"> Create New Account</a><br>
	 <a  href="Userforgatpassword.jsp" style="color:black;text-decoration:none; align:center;">  Forgot Password</a>
  </form>
</div>


</body>
</html>
