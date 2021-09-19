<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["subject"]))  
      {  
           $error = "<label class='text-danger'>Enter Subject</label>";  
      }  
     else if(empty($_POST["message"]))  
      {  
           $error = "<label class='text-danger'>Enter Message</label>";  
      } 
      else  
      {  
           if(file_exists('employee_data.json'))  
           {  
                $current_data = file_get_contents('employee_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'subject'     =>     $_POST["subject"], 
                    'message'  =>   $_POST["message"]
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('employee_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Thank you for contacting us, we will get back to you as soon as possible</p>";  
                }  
           }  
           else  
           {  
                $error = 'Some Error Occured';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
             
          <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>GUILIB | Contact Us</title>
          <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/guiliblogo.jpeg" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">    

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
         
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Email</label>  
                     <input type="email" name="gender" class="form-control" /><br />  
                     <label>Subject</label>  
                     <input type="text" name="designation" class="form-control" /><br />  
                    <input type="comment" name="comment" class="form-control" /><br /> 
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>






























