<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 {
		 parent::__construct();
	 }

	 public function validate_image() {
		$check = TRUE;
		if ((!isset($_FILES['image'])) || $_FILES['image']['size'] == 0) {
			$this->form_validation->set_message('validate_image', 'The {field} field is required');
			$check = FALSE;
		}
		else if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
			$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['image']['tmp_name']);
			$type = $_FILES['image']['type'];
			if (!in_array($detectedType, $allowedTypes)) {
				$this->form_validation->set_message('validate_image', 'Invalid Image Content!');
				$check = FALSE;
			}
			if(filesize($_FILES['image']['tmp_name']) > 1000000) {
				$this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 10MB!');
				$check = FALSE;
			}
			if(!in_array($extension, $allowedExts)) {
				$this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
				$check = FALSE;
			}
		}
		return $check;
	}
	
}
