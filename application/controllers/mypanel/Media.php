<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect('mypanel/auth', 'refresh');
        }
        $this->load->model('media_model');
    }

    public function index() 
    {
        $data['title'] = 'Media';
        $data['content'] = 'admin/media';
        $data['css'] = array('admin/css/media_css');
        $data['js'] = array('admin/js/media_js');
        $this->load->view('admin/main_part',$data);
    }

    public function upload()
    {
        if(!empty($_FILES['file']['name'])){

            // Set preference
            $config['upload_path'] = 'files/uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '8000'; // max_size in kb
            $config['file_name'] = $_FILES['file']['name'];

            
            
            //Load upload library
            $this->load->library('upload',$config); 
            
            // File upload
            if($this->upload->do_upload('file')){
                // Get data about the file
                $uploadData = $this->upload->data();
                
                $name = $uploadData['file_name'];
                $url = base_url() . 'files/uploads/'. $name;
                $ext = $uploadData['file_ext'];
                $size = $uploadData['file_size'];
                $this->media_model->saveData($name, $url, $ext, $size);
            }
        }
    }

    public function getImage()
    {
        $images = $this->media_model->getDataImage();
        echo json_encode($images);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('image_name');
        $alt = $this->input->post('image_alt');

        $data = $this->media_model->updateData($id, $name, $alt);
        echo json_encode($data);
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $imgData = $this->media_model->getById($id);
        unlink($imgData->image_url);
        $data = $this->media_model->delete($id);

        echo json_encode($data);
    }
}