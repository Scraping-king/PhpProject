 <!-- get is not secure -->
 
 <html>
 <body>
 <?php
 echo $_GET['username'];
 ?>
 <form method="get"> 
 <input type="hidden" name="username" value="DG">
 <button type="submit">click me</button>
 </form>
 </body>
 </html> 
 
 <!-- post is secure -->
 <html>
 <body>
 <?php
 echo $_POST['username'];
 ?>
 <form method="post"> 
 <input type="hidden" name="username" value="DG">
 <button type="submit">click me</button>
 </form>
 </body>
 </html>