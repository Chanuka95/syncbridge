<?php 

class user_Model extends CI_Model{

    function userReg(){

        $data = array(

            "fName" => $this->input->post('firstName'),
            "lName" => $this->input->post('lastName'),
            "email" => $this->input->post('email'),
            "password" => sha1($this->input->post('password'))

        );

        return $this->db->insert('users',$data);

    }

    function signInUser(){

        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $res = $this->db->get('users');

        if($res->num_rows()==1){
            return $res->row(0);
            
        }else{
            return false;
        }

    }

}

?>