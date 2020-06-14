 <?php
session_start();
if((!isset($_SESSION['un']))&&(!isset($_SESSION['ps'])))
   {
   header("location:home.php");
    } 
   ?>
<!doctype html>
<script type="text/javascript">
function myFunction() 
{
  alert("please login.......");   // The function returns the product of p1 and p2
}
 </script>
<style type="text/css">
  #footer {
    position: absolute;
    bottom: 0px;
    width: 100%;
</style>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>NAVIGUS</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body bgcolor="#b3ccff">
  <script src="js/scripts.js"></script>


  <section class="text-gray-700 body-font">
  
</section>
<hr>
<header class="text-gray-500 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      
      <span class="ml-3 text-xl">Navigus</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700 flex flex-wrap items-center text-base justify-center">
      
      <a class="mr-5 hover:text-white" href="">Users</a>
      <a class="mr-5 hover:text-white" href="">Active Users</a>
      <a class="mr-5 hover:text-white" href="">Previously Active Users</a>
      <a class="mr-5 hover:text-white" href="">Log Out</a>
    </nav>
    
  </div>
</header>
<form name="my form" method="post" style="background-color: #fff; color: black; border-radius: 5px">
<table border="4px" align="right" style="margin :200px 50px 0px 0px;" width="400px;"  >

<tr><td>Your Name</td><td><input type="text" name="un" placeholder="enter user name" REQUIRED/></td></tr>
<tr><td>Password</td><td><input type="password" name="ps" placeholder="enter user password" REQUIRED/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="sub" value="LOG-OUT......"/></td></tr>
</table>
</form>
<hr>
<hr>
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

   <?php
if(isset($_POST['sub']))
{
    extract($_POST);
    
   $link=mysqli_connect("localhost","root","","navigus");
   
   $qry="select * from register where Name='$un'and password='$ps'";
   //$q1="update register set status='1'where Name='$un'and password='$ps'";
   $resultset=mysqli_query($link,$qry);
   $row=mysqli_fetch_row($resultset);
   $count=mysqli_affected_rows($link);
    
      
         
      if($count>0) 
      {      
        $q1="update register set status='0'where Name='$un'and password='$ps'";
        $v=mysqli_query($link,$q1);
        if($v)
        {
          echo "valid...";
        }
        else
        {
          echo "invalid..";
        }


        session_start();
         $_SESSION['un']=$row[0];
         $_SESSION['ps']=$row[3];
          if(isset($_SESSION['un']))
            {
              session_destroy();
              header("location:home.php");
            }
               
          header("Location:index.php");
      }
       
       
       else
       {
        echo "<script>alert('you are invalid user....')</script>";
         header("Location:error.php");
       }
    }


 
    ?>
    


 
</div>


</body>
</html>





























