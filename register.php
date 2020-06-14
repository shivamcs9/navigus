<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>NAVIGUS</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <style type="text/css">
 input[type=text], select 
 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


    input[type=submit] {
  width: 100%;
  background-color: #000066;
  color: white;
  padding: 10px 20px;
  margin: 4px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

  </style>

<style type="text/css">
  #footer {
    position: absolute;
    bottom: 0px;
    width: 100%;


</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body bgcolor="#b3ccff">  <script src="js/scripts.js"></script>


  <section class="text-gray-700 body-font">
  
</section>
<hr>
<header class="text-gray-500 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
        
      </svg>
      <span class="ml-3 text-xl">Navigus</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700 flex flex-wrap items-center text-base justify-center">
      
      <a class="mr-5 hover:text-white" href=user.php>Users</a>
      <a class="mr-5 hover:text-white" href="active.php">Active Users</a>
      <a class="mr-5 hover:text-white" href="previous.php">Previously Active Users</a>
      <a class="mr-5 hover:text-white" href="logout.php">Log Out</a>
    </nav>
    
  </div>
</header>
<hr>
<body background="">


<div>
<img src="" />
</div>
<form name="myform" method="post" onsubmit="javascript:return validate('myform','name','pwd','email','mob')" style="background-color: #fff; color: black; border-radius: 5px">
<table border="4px" align="center" bgcolor="" style="margin: 5px 0px 0px 900px;" height="400px" width="400px" cellpadding="5" >
  <tr><th colspan="2" align="center">REGISTER HERE</th><th></th>></tr>
<tr><th>Name</th><td><input type="text" name="name" placeholder="Enter user name" required /><span id="usererror"></span></td></tr>

<tr><th>Father Name</th><td><input type="text" name="fname" placeholder="Enter father name" ></input></td><tr>

<tr><th>Mother Name</th><td><input type="text" name="mname" placeholder="Enter mother name"></input></td><tr>

<tr><th>Pass</th><td><input type="text" name="pwd" placeholder="Enter your password" required ></input><span id="pwderror" class="text-danger font-weight-bold"></span></td><tr>

<tr><th>E-mail</th><td><input type="text" name="email" placeholder="Enter your email" required ></input><span id="emailerror" class="text-danger font-weight-bold"></span></td><tr>
  
  <tr><th>Profile picture</th><td><input type="file" name="image" value="image"/></td></tr>
<tr><th colspan="2"><input type="submit" name="subbtn"/>
</th></tr>

</table>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['subbtn']))
{
    extract($_POST);
       $link=mysqli_connect("localhost","root","","navigus");
   $qry="insert into register(Name,f_name,m_name,password,email,image)values('$name','$fname','$mname','$pwd','$email','$image')";

   
    mysqli_query($link,$qry);
    $count=mysqli_affected_rows($link);
   if($count>0)
  {
  header("location:index.php");
    echo "success...";
  }
   else
       echo "invalid....";
      }   
?>

<footer class="text-gray-500 bg-gray-900 body-font" id="footer">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      
      <span class="ml-3 text-xl">SHIVAM</span>
    </a>
    
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-600">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"><a href="https://www.facebook.com/navigus">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      
      <a class="ml-3 text-gray-600">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <a href="https://www.instagram.com/navig_us/">
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <a href="https://www.linkedin.com/company/navigus1/"><path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

</body>
</html>
