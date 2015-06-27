<?php
class Wordgenerators extends CI_Controller
{

    public function buildform()
    {
        $this->load->view('wordgeneratorform/form');
    }

    public function generateword()
    {
        // If counter session variable is set, increment counter session by one
        // on the "Generate Random Word" button submission
        if($this->session->userdata('counter'))
        {
            $counter = $this->session->userdata('counter');
            $this->session->set_userdata('counter', $counter + 1);
        }
        // Else the counter session variable is NOT set,
        // then set it and assign it to 1
        else
        {
            $this->session->set_userdata('counter', 1);
        }

        // Word will be 10 characters in length
        $length = 10;

        // Generates all the characters in the alphabet in caps AND
        // from A to Z
        $alphabet = range('A', 'Z');

        // Shuffles letters in alphabet
        shuffle($alphabet);

        // Get 10 random characters from the cap letter alphabet
        $rand_word_10_char =  substr(implode($alphabet), 0, $length);

        $this->session->set_userdata('rand_word', $rand_word_10_char);

        $this->load->view('wordgeneratorform/form');
        redirect("");
    }

    public function reset()
    {
        $this->session->sess_destroy();

        redirect("");
    }
}






?>