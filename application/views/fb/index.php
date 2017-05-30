<?php
if(!empty($authUrl)) {
    echo '<br/><center><a href="'.$authUrl.'"><img src="https://scontent.fbkk1-4.fna.fbcdn.net/v/t39.2365-6/17639236_1785253958471956_282550797298827264_n.png?oh=6d4bcc6ce8ef0405bd98cc86bba37b0f&oe=599CB1EA" width="250px" alt=""/></a></center>';
}else{
?>
<div class="wrapper">
    <h1>Upload File </h1>
    <div class="welcome_txt">Welcome <b><?php echo $userData['first_name']; ?></b></div>
    <br/><br/>
    <?php if (isset($error)) { echo $error['error']; } ?>
    <?php echo form_open_multipart('upload/do_upload');?> 		
      <form action = "" method = "">
         <input type = "file" name = "userfile" size = "20" /> 
         <br /><br /> 
         <input type = "submit" value = "upload" /> 
      </form> 

<!--    
    <div class="fb_box">
        <p class="image"><img src="<?php echo $userData['picture_url']; ?>" alt="" width="300" height="220"/></p>
        <p><b>Facebook ID : </b><?php echo $userData['oauth_uid']; ?></p>
        <p><b>Name : </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email : </b><?php echo $userData['email']; ?></p>
        <p><b>Gender : </b><?php echo $userData['gender']; ?></p>
        <p><b>Locale : </b><?php echo $userData['locale']; ?></p>
        <p><b>You are login with : </b>Facebook</p>
        <p><a href="<?php echo $userData['profile_url']; ?>" target="_blank">Click to Visit Facebook Page</a></p>
        <p><b>Logout from <a href="<?php echo $logoutUrl; ?>">Facebook</a></b></p>
    </div>
-->
</div>
<?php } ?>