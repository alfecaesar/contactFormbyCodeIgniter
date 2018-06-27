<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
				$this->form_validation->set_rules('phonenum', 'Phone Number', 'required');
				$this->form_validation->set_rules('message', 'Message / Comments', 'required');
				

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('contactform');
                }
                else
                {
                        $this->load->view('contactformsucess');
                }
        }
}