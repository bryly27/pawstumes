<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class paw extends CI_Model {
     

    function get_all()
    {
        return $this->db->query("SELECT id, link, created_at, description, file_type from photos ORDER BY created_at DESC")->result_array();
    }

    function get_user($username)
    {
        return $this->db->query("SELECT username, password from users WHERE username = ?", $username)->row_array();
    }

    function add_pet($link)
    {
        $this->db->query("INSERT INTO photos (link, created_at, updated_at, description, file_type) VALUES (?, NOW(), NOW(), ?, ?)", array($link['link'], $link['description'], $link['file_type']));
    }

    function delete($id)
    {
        $this->db->query("DELETE FROM photos WHERE id = ?", $id);
    }

    function edit($info)
    {
        $this->db->query("UPDATE photos SET description = ? WHERE id = ?", array($info['description'], $info['id']));
    }

}
