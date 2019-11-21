<?php
class CommandsModel extends CI_Model{
    function __construct()
    {
        parent::__construct(); // construct the Model class
    }
    public function get_commands(){
        if(!empty($this->input->get("search"))){
          $this->db->like('command', $this->input->get("search"));
          //$this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("commands");
        return $query->result();
    }
    public function insert_command()
    {    
        $data = array(
            'command' => $this->input->post('command'),
        );
        return $this->db->insert('commands', $data);
    }
    public function update_command($id) 
    {
        $data=array(
            'title' => $this->input->post('command'),
        );
        if($id==0){
            return $this->db->insert('commands',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('commands',$data);
        }        
    }
}
?>