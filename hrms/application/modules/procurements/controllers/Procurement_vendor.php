<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement_vendor extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'procurements_model',
			'Country_model',
		));	

		$this->load->model('accounts/accounts_model');

		if (! $this->session->userdata('isLogIn'))
		redirect('login');
	}

	public function vendor_list(){

		$this->permission->check_label('vendor_list')->read()->redirect();

		$data['vendors']  = $this->procurements_model->vendor_data();
		$data['title'] = display('vendor_list');
		$data['module'] = "procurements";
		$data['page']   = "vendor/vendor_list"; 

		echo Modules::run('template/layout', $data); 

	}

	public function vendor_form(){

		$this->permission->check_label('vendor')->read()->redirect();

		$data['title'] = display('create_vendor');

        $this->form_validation->set_rules('vendor_name',display('vendor_name'),'required|is_unique[procurement_vendor.vendor_name]|max_length[200]');
        $this->form_validation->set_rules('mobile_no',display('mobile_no'),'required|max_length[50]|numeric');
        $this->form_validation->set_rules('email',display('email'),'required|is_unique[procurement_vendor.email]|max_length[100]');
        $this->form_validation->set_rules('address',display('address'),'required');
        $this->form_validation->set_rules('city',display('city'),'required|max_length[50]');
        $this->form_validation->set_rules('zip',display('zip'),'max_length[100]');
        $this->form_validation->set_rules('country',display('state'),'required');
        $this->form_validation->set_rules('previous_balance',display('previous_balance'),'required|max_length[20]');

         #-------------------------------#

        $data['vendor'] = (object)$postData = [

            'vendor_name' 		=> $this->input->post('vendor_name',TRUE),
            'mobile_no'  		=> $this->input->post('mobile_no',TRUE),
            'email'   			=> $this->input->post('email',TRUE),
            'address'			=> $this->input->post('address',TRUE),
            'city'    			=> $this->input->post('city',TRUE),
            'zip'   			=> $this->input->post('zip',TRUE),
            'country'    		=> $this->input->post('country',TRUE),
            'previous_balance'  => $this->input->post('previous_balance',TRUE),

        ];

         #-------------------------------#
        if ($this->form_validation->run() === true) {

			$this->permission->check_label('vendor')->create()->redirect();

            if ($this->procurements_model->create_vendor($postData)) {

            	$vendor_id = $this->db->insert_id();

            	// Making ready coa data
            	$coa = $this->procurements_model->headcode();
				if($coa->HeadCode!=NULL){
					$headcode=$coa->HeadCode+1;
				}else{
					$headcode="602020000001";
				}

				$c_code = $vendor_id;
				$c_name = str_replace(' ', '', $this->input->post('vendor_name',true));
				$c_acc=$c_code.'-'.$c_name;
				$createby = $this->session->userdata('fullname');
				$createdate = date('Y-m-d H:i:s');
				$data['aco']  = (Object) $coaData = [
					'HeadCode'         => $headcode,
					'HeadName'         => $c_acc,
					'PHeadName'        => 'Vendor Payable',
					'HeadLevel'        => '2',
					'IsActive'         => '1',
					'IsTransaction'    => '1',
					'IsGL'             => '0',
					'HeadType'         => 'L',
					'IsBudget'         => '0',
					'IsDepreciation'   => '0',
					'DepreciationRate' => '0',
					'CreateBy'         => $createby,
					'CreateDate'       => $createdate,
				];

				$this->procurements_model->create_coa($coaData);

               
                #set success message
               $this->session->set_flashdata('message', display('save_successfully'));

            }else {

             $this->session->set_flashdata('exception', display('please_try_again'));
            }
            redirect("procurements/procurement_vendor/vendor_list");


        }else{

        	$data['country_list'] = $this->Country_model->state();

			$data['module'] = "procurements";
			$data['page']   = "vendor/vendor_form"; 

			echo Modules::run('template/layout', $data); 

        }

	}

	//Update Quotation data
	public function vendor_update($id = null){

		$this->permission->check_label('vendor')->read()->redirect();

		$data['title'] = display('create_vendor');

	    $this->form_validation->set_rules('vendor_name',display('vendor_name'),'required|max_length[200]');
	    $this->form_validation->set_rules('mobile_no',display('mobile_no'),'required|max_length[50]|numeric');
	    $this->form_validation->set_rules('address',display('address'),'required');
	    $this->form_validation->set_rules('city',display('city'),'required|max_length[50]');
	    $this->form_validation->set_rules('zip',display('zip'),'max_length[100]');
	    $this->form_validation->set_rules('country',display('state'),'required');

	    if($this->input->post('email',TRUE) != $this->input->post('old_email',TRUE)){

	    	$this->form_validation->set_rules('email',display('email'),'required|is_unique[procurement_vendor.email]|max_length[100]');
	    }

	     #-------------------------------#

	    $vendor_id = $this->input->post('vendor_id',TRUE);
	    $old_accname = $id.'-'.str_replace(' ', '', $this->input->post('old_vendor_name',true));

	    $data['vendor'] = (object)$postData = [

	    	'id'				=> $vendor_id,
	        'vendor_name' 		=> $this->input->post('vendor_name',TRUE),
	        'mobile_no'  		=> $this->input->post('mobile_no',TRUE),
	        'email'   			=> $this->input->post('email',TRUE),
	        'address'			=> $this->input->post('address',TRUE),
	        'city'    			=> $this->input->post('city',TRUE),
	        'zip'   			=> $this->input->post('zip',TRUE),
	        'country'    		=> $this->input->post('country',TRUE),
	        'previous_balance'  => $this->input->post('previous_balance',TRUE),

	    ];

	     #-------------------------------#
	    if ($this->form_validation->run() === true) {

	    	if(!empty($vendor_id)){

	    		$this->permission->check_label('vendor')->update()->redirect();

	    		// Making ready acc_coa data

	    		$coa = $this->procurements_model->headcode();
				if($coa->HeadCode!=NULL){
					$headcode=$coa->HeadCode+1;
				}else{
					$headcode="602020000001";
				}

				$c_code = $vendor_id;
				$c_name = str_replace(' ', '', $this->input->post('vendor_name',true));
				$c_acc=$c_code.'-'.$c_name;
				$createby = $this->session->userdata('fullname');
				$createdate = date('Y-m-d H:i:s');

				$accHead = [
					'HeadName'=> $c_acc,
				];

				// End acc_coa data

		        if ($this->procurements_model->vendor_update($postData)) {

		        	// Updating acc_coa
		        	$this->db->where('HeadName', $old_accname)
					->update("acc_coa", $accHead);
		           
		            #set success message
		           $this->session->set_flashdata('message', display('save_successfully'));

		        }else {

		         $this->session->set_flashdata('exception', display('please_try_again'));
		        }
		        redirect("procurements/procurement_vendor/vendor_list");
	    	}

	    }else{

	    	if($id){
	    		$data['id'] = $id;
	    		$data['vendor_data']  = $this->procurements_model->single_vendor_data($id);
	    	}
	    	$data['country_list'] = $this->Country_model->state();

			$data['module'] = "procurements";
			$data['page']   = "vendor/vendor_update"; 

			echo Modules::run('template/layout', $data); 

	    }

	}

	public function delete_vendor($id = null) {

		$this->permission->check_label('vendor')->delete()->redirect();

		if ($this->procurements_model->delete_vendor($id)) {

			$this->session->set_flashdata('message', display('delete_successfully'));

		} else {

			$this->session->set_flashdata('exception', display('please_try_again'));
		}

		redirect("procurements/procurement_vendor/vendor_list");
    }


}
