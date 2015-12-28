<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $v_dados = array();
        $v_dados['base_url'] = base_url();
        $v_dados['apppath'] = APPPATH;
        $this->parser->parse('template', $v_dados);
    }

    public function email() {
        $msg = 'Nome: ' . $this->input->post('name');
        $msg .= '<br />E-mail: ' . $this->input->post('email');
        $msg .= '<br />Assunto: ' . $this->input->post('msg');

        $config['protocol'] = 'mail.linknacional.com.br';
        $config['smtp_host'] = 'localhost';
        $config['smtp_port'] = '26';
        $config['smtp_user'] = 'contato@fabiocalhas.com.br';
        $config['smtp_pass'] = '1qazxdr5';
        $config['charset'] = 'utf-8';
        $config['newline'] = '\r\n';
        $config['mailtype'] = 'html';
        $this->load->library('email', $config);

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to('contato@fabiocalhas.com.br');
        //$this->email->bcc($this->input->post('email'));

        $this->email->subject('Orçamento de ' . $this->input->post('name') . ' através do site Fabio Calhas.');
        $this->email->message($msg);

       $this->email->send();

       // echo $this->email->print_debugger();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */