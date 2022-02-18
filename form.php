<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <style>
            body{
            background-image: url('background lightsa.jpg');
            
            }
            h4{
                color:black
            }
            h4{font-family: inherit}
            
            h1{
                color: bisque
                
            }
            h1{
                text-align: center
            }
             .content {
       max-width: 930px;
      margin: auto;
     background-color:burlywood;
    font-family:inherit;
     padding: 10px;}
            h2{
	      text-align:center;}
            li{
                display:inline;
            }
            ul {
           list-style-type:circle;
           margin: 0;
           padding: 0;
           overflow: hidden;
           background-color:#963f41;
           font-size:120%;
           word-spacing:20px; 
            }
            li {
          float: left;
          }

      li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
    }
        
            li a:hover {
  background-color:black;
            }
            
            .form{
            font-family:inherit;
            font-size: 170%;
            }
            
            
            input[type=text]{
                width:90%;
                padding:18px 20px;
                margin: 8px;
                box-sizing: border-box;
            }
            input[type=email]{
                width:90%;
                padding:18px 20px;
                margin: 8px;
                box-sizing: border-box;
            }
       
            
        
            textarea{
                width:90%;
                padding:80px 65px;
                margin: 8px;
                box-sizing: border-box;
            }
            input[type=submit]{
                width:30%;
                padding:10px 2px;
                
            }
         .absolute{
             position: absolute
            bottom:300px;
            width: 80%
           list-style-type:circle;
            text-align:center;
           margin:3px;
           padding:50px;
           overflow: hidden;
           background-color:#292930;
           font-size:100%;
           word-spacing:20px; 
            
            }
        
        </style>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>feedback for review4u</title>
    </head>
    <body>
    <ul>
           <li><a href="homepage.html" href="#home">Home</a></li>
           <li><a href="movies.html">Movies</a></li>
           <li><a href="books.html">Books</a></li>
           <li><a href="travelspots.html">Travelspots</a></li>
           <li><a href="food.html">Food</a></li>
        <li><a href="form.html">Feedback</a></li>
       </ul>
        <h1>FEEDBACK FORM</h1>
    <div class="content">
    <h3>We'd love to hear about what you thought of our website.
        let us know with a few notes!<br><br><br>
        
  <form action="C:\Users\George\Documents\miniproject\thank.html">
      <label for="fname">First Name:</label><br>
      <input type="text" id="fname" name="fname" value="<?php echo $fname;?>"><br>
      
      <label for="lname">Last Name:</label><br>
      <input type="text" id="lname" name="lname" value="<?php echo $lname;?>"><br>
      
      <label for="address">Address:</label><br>
      <input type="text" id="address" name="address" value="<?php echo $address;?>"><br>
      
      <label for="email2">Email Id:</label><br>
      <input type="email" id="email2" name="email2" value="<?php echo $email2;?>"><br>
      
      <label for="phone">Phone Number:</label><br>
      <input type="text" id="phone" name="phone" value="<?php echo $phone;?>"><br>
      
      <label for="feed">Your Feedback:</label><br>
      <textarea for="feed"></textarea><br><br><br>
        
      <input type="submit" name="submit" value="submit">
    
        
        </form> 
        
 </h3>
        </div>
    </body>
     <div class="absolute">
  <font color="white"><u>copyrightsby.review4u.</u>
        </font>  
    </div>
     Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
