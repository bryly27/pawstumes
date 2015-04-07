<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class paw extends CI_Model {
     

    function get_all()
    {
        return $this->db->query("SELECT id, link, created_at from photos ORDER BY created_at DESC")->result_array();
    }

    function get_user($username)
    {
        return $this->db->query("SELECT username, password from users WHERE username = ?", $username)->row_array();
    }

    function add_pet($link)
    {
        $this->db->query("INSERT INTO photos (link, created_at, updated_at) VALUES (?, NOW(), NOW())", $link);
    }

    function delete($id)
    {
        $this->db->query("DELETE FROM photos WHERE id = ?", $id);
    }

}
