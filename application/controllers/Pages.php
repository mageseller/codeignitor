<?php
class Pages extends CI_Controller {
    public function __construct() {
    //load database in autoload libraries 
        parent::__construct(); 
        $this->load->model('CommandsModel');      
        $this->load->helper('form');
        $this->load->helper('url');   
    }
    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $commands = new CommandsModel;
        $data['data']=$commands->get_commands();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
    public function add()
    {
        $commands =new CommandsModel;
        $commands->insert_command();
        redirect(base_url());
    }
}