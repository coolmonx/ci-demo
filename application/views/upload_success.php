<html>
 
   <head> 
      <title>Upload Form</title> 
   </head>
	
   <body>  
      <h3>Your file was successfully mixed!</h3>  
	<video>
    		<source src="<?php echo $output ?>" type="video/mp4" />
	</video>

    <p><?php echo anchor('fb/index', 'Back to beginning!'); ?></p>  
   </body>
	
</html>
