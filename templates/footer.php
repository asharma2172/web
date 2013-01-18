<br><br><br><br>
                
                  <center>
            
            <?php
            //displays a different footer if the user is logged in or not logged in
            $a = $_SESSION;
            if(empty($a)): ?>
            		  <a href = "index.html">Home</a> 
        			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href = "login.php">Login</a> 
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href = "register.php">Register</a> 
            
            
            
           <?php else: ?> 
                
        			   <a href = "links.php">Inbox</a> 
        			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href = "logout.php">Logout</a> 
                  
                  
          <?php endif ?>        
                  
                   </center>
                    <br>

                       <center><small><i>Copyright &#169; Akshay Sharma and Stephanie Havens</i></small></center>
            </div>

    </body>

</html>
