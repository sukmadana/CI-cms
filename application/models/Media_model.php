<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_Model {

    public function saveData($name, $url, $ext, $size) 
    {
        $data = array(
            'image_name'    => $name,
            'image_url'     => $url,
            'image_ext'     => $ext,
            'image_size'    => $size
        );

        return $this->db->insert('m_media',$data);
    }

    public function getDataImage()
    {
        return $this->db->get('m_media')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('m_media', ['id' => $id])->row();
    }

    public function updateData($id, $name, $alt)
    {
        $data = array(
            'image_name'    => $name,
            'image_alt'     => $alt
        );

        $this->db->where('id',$id);
        return $this->db->update('m_media',$data);
    }

    public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('m_media');
	}
}