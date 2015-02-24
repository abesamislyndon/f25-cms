<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Transaction extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

    public function transaction_item_details()
    {    
        $this->load->model("item_model");
        $id = $this->uri->segment(3);
        $data['transaction_details'] = $this->item_model->item_history($id);
        $data['print_details'] = $this->item_model->item_history_print($id);
      
        $this->load->view('modal_form/transaction_history',$data);
    }

}

/* End of file transaction.php */
/* Location: ./application/controllers/transaction.php */