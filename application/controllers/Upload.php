<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function do_upload() {

         $userData = $this->session->userdata('userData');

         $new_name = time().'_'.$userData['oauth_uid'];
         $config['file_name'] = $new_name;
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'mp3|acc|m4a|ogg'; 
         $config['max_size']      = 5000; 
         //$config['max_width']     = 1024; 
         //$config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('fb/index', array('error'=>$error, 'userData'=>$userData)); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
	    $file_ext = $this->upload->data('file_ext');

            // mix file
            $output = shell_exec('ffmpeg -i /var/www/html/hbo/videos/Missandei_noaudio.mp4 -i /var/www/html/hbo/uploads/'.$new_name.$file_ext.' -acodec aac -strict -2 /var/www/html/hbo/outputs/'.$userData['oauth_uid'].'.mp4 2>&1');

	    $video = 'http://52.220.113.104/hbo/outputs/'.$userData['oauth_uid'].'.mp4';

            $this->load->view('upload_success', array('output'=>$video)); 
         } 
      }
   } 
?>
