<?php

class Billing {



    public function pre_()
    {
        $this->left();
        $this->load->view("other_reports//pre");
        $this->load->view("right");
    }

    public function ()
    {

        $data['report'] = $this->db->get("industry.")->result();
        if (isset($_POST['to_excel'])) {
            $this->export_to_excel("other_reports//report", $data, '');
        } else {
            $this->load->view("other_reports//report", $data);
        }
    }



}

?>