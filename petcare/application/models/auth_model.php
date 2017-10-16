<?php
class Auth_model extends CI_Model
{

    /**
     * model_user constructor.
     */
    public function __construct()
    {
    }

    public function getUser($data){
        $query = $this->db->get_where('usuario',$data);
        return $query;
    }
}