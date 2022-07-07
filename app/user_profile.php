<?php 
   include('db_connect_db_new.php');  
     session_start();	$r_id = $_SESSION['rid'];
   	$sql = "SELECT * FROM info_visitor WHERE ReceiptID = $r_id";
     $re = mysqli_query($link, $sql);
     $result = mysqli_fetch_array($re, MYSQLI_ASSOC);
     $qrcodepath = 'QRCodes/'.$r_id.".png";
	 $campath = 'upload/'.$r_id.".jpg";
   	
   ?>
<html>
   <head>
      <meta content="text/html; charset=windows-1252" http-equiv="content-type">
      <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
      <style>
         #col-1{
         margin-left:-10%;
         }
         span {
         text-underline-position: right;
         font-size: 20px;
         }
         @media print {
         /* style sheet for print goes here */
         .hide-from-printer{  display:none; }
         }
         .row{margin-top: 5%;margin-left: 20%;}
         @page { 
         size: A5 landscape;
         float: none;
         width: auto; 
         border: 0; 
         margin: 0 5%; 
         padding: 0; 
         font-size:13pt;
         }
         .navbar-nav li.active a {
         color: #fff !important;
         background-color:#29292c !important;
         }
         .navbar {
         margin-bottom: 0;
         background-color:##ff4d4d;
         border: 0;
         font-size: 15px !important;
         letter-spacing: 2px;
         opacity:0.9;
         color: #000000;
         }
      </style>
   </head>
   <body>
      <div  class="row" >
         <div class="col-sm-4" >
            <p style="width: 678px;" id="col-1">Date :<?php echo $result['Date'];?>&nbsp;&nbsp;
               Time in :&nbsp;<?php echo $result['TimeIN']?>
            </p>
            <span id="col-1" name="main"><b>Name :</b>&nbsp;
            <?php echo $result['Name'];?></span><br>
            <span id="col-1"><b>Contact No :</b>&nbsp;
            <?php echo $result['Contact']?><br>
            <span id="col-1"><b>Purpose :</b>&nbsp;
            <?php echo $result['Purpose'];?></span><br>
            <span id="col-1"><b>Meeting :</b>&nbsp;
            <?php echo $result['meetingTo'];?></span><br>
            <span id="col-1"><b>Receipt ID :</b>&nbsp;
            <?php echo $result['ReceiptID'];?></span><br>
            <span id="col-1"><b>Comment :</b>&nbsp;
            <?php echo $result['Comment'];?></span><br> 
			
			 
            </span>
         </div>
		 <div class="col-sm-8" > <?php echo "<span><img width='200' height='200' src='".$campath."'></span>";?></span> 
		<span><?php echo "<span><img width='200' height='200' src='".$qrcodepath."'></span>";?></span> 
		 </div>
  
          
      </div>
	 
   
       
      <p style="text-align:center;padding-top:20px;">NOTE : This visitor badge is only valid for 12 hours, please return it at the exit !</p>
      <br>
      <br>
      <div style="text-align:center;"> <button type="button" id="button" class="hide-from-printer btn btn-info"
         onclick="window.print()" value="Print Badge">Print Badge</button> <a type="button"
         id="button" class="hide-from-printer btn btn-warning" href="front.php">Back </a></div>
      <a type="button" id="button" class="hide-from-printer " href="front.php"> </a>
   </body>
</html>