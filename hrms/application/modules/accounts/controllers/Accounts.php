<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'accounts_model'
		));
    if (! $this->session->userdata('isLogIn'))
      redirect('login');	
	}




// payment type add
  public function payment_type(){
    $data['title']  = display('payment_type');
    $data['paytype']= $this->accounts_model->paytype();
    $data['module'] = "accounts";
    $data['page']   = "payment_type";   
    echo Modules::run('template/layout', $data);
  }



public function add_paymenttype(){
     $parent_type = $this->input->post('parent_type',true);
     if(empty($parent_type)){
     $coa = $this->accounts_model->paymentparentcode();
   }else{
    $coa = $this->accounts_model->paymenchildcode();
   }
      if($coa->HeadCode!=NULL){
        $headcode=$coa->HeadCode+1;
      }else{
        if(empty($parent_type)){
        $headcode="102010001";
      }else{
      $headcode="10201020001";
        }
      }

      $headname = $this->input->post('typename',true);
      $createby = $this->session->userdata('fullname');
      $createdate = date('Y-m-d H:i:s');
      $data['aco']  = (Object) $coaData = [
        'HeadCode'         => $headcode,
        'HeadName'         => $headname,
        'PHeadName'        => (!empty($parent_type)?$parent_type:'Cash & Cash Equivalent'),
        'HeadLevel'        => (!empty($parent_type)?4:3),
        'IsActive'         => '1',
        'IsTransaction'    => '1',
        'IsGL'             => '0',
        'HeadType'         => 'A',
        'IsBudget'         => '0',
        'IsDepreciation'   => '0',
        'DepreciationRate' => '0',
        'CreateBy'         => $createby,
        'CreateDate'       => $createdate,
      ];

      $this->accounts_model->create_coa($coaData);

  $this->session->set_flashdata('message', display('save_successfully'));

     redirect('accounts/accounts/payment_type');
}
     // tree view controller
    public function show_tree($id = null){
		  $this->permission->method('accounts','read')->redirect();
        $data['title'] = display('accounts_form');
        $id      = ($id ?$id :2);

        $data = array(
            'userList' => $this->accounts_model->get_userlist(),
            'userID'   => set_value('userID'),
        );
    $data['module'] = "accounts";
    $data['page']   = "treeview";   
    echo Modules::run('template/layout', $data); 
    }
  

  public function selectedform($id){
    
		   $role_reult = $this->accounts_model->treeview_selectform($id);
					$baseurl = base_url().'accounts/accounts/insert_coa';


		if ($role_reult){
			$html = "";
			$html .= "
        <form name=\"form\" id=\"form\" action=\"".$baseurl."\" method=\"post\" enctype=\"multipart/form-data\">
                <div id=\"newData\">
   <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">

      <input type=\"hidden\" name=\"csrf_test_name\" id=\"CSRF_TOKEN\" value=\"".$this->security->get_csrf_hash()."\"/>
    
      <tr>
        <td>Head Code</td>
        <td><input type=\"text\" name=\"txtHeadCode\" id=\"txtHeadCode\" class=\"form_input\"  value=\"".$role_reult->HeadCode."\" readonly=\"readonly\"/></td>
      </tr>
      <tr>
        <td>Head Name</td>
        <td><input type=\"text\" name=\"txtHeadName\" id=\"txtHeadName\" class=\"form_input\" value=\"".$role_reult->HeadName."\"/>
<input type=\"hidden\" name=\"HeadName\" id=\"HeadName\" class=\"form_input\" value=\"".$role_reult->HeadName."\"/>
        </td>
      </tr>
      <tr>
        <td>Parent Head</td>
        <td><input type=\"text\" name=\"txtPHead\" id=\"txtPHead\" class=\"form_input\" readonly=\"readonly\" value=\"".$role_reult->PHeadName."\"/></td>
      </tr>
      <tr>

        <td>Head Level</td>
        <td><input type=\"text\" name=\"txtHeadLevel\" id=\"txtHeadLevel\" class=\"form_input\" readonly=\"readonly\" value=\"".$role_reult->HeadLevel."\"/></td>
      </tr>
       <tr>
        <td>Head Type</td>
        <td><input type=\"text\" name=\"txtHeadType\" id=\"txtHeadType\" class=\"form_input\" readonly=\"readonly\" value=\"".$role_reult->HeadType."\"/></td>
      </tr>

       <tr>
         <td>&nbsp;</td>
         <td><input type=\"checkbox\" name=\"IsTransaction\" value=\"1\" id=\"IsTransaction\" size=\"28\"  onchange=\"IsTransaction_change()\"";
         if($role_reult->IsTransaction==1){ $html .="checked";}
          $html .= "/><label for=\"IsTransaction\"> IsTransaction</label>
         <input type=\"checkbox\" value=\"1\" name=\"IsActive\" id=\"IsActive\" size=\"28\"";
          if($role_reult->IsActive==1){ $html .="checked";}
          $html .= "/><label for=\"IsActive\"> IsActive</label>
         <input type=\"checkbox\" value=\"1\" name=\"IsGL\" id=\"IsGL\" size=\"28\" onchange=\"IsGL_change();\"";
         if($role_reult->IsGL==1){ $html .="checked";}
          $html .= "/><label for=\"IsGL\"> IsGL</label>

        </td>";
      $html .= "</tr>
       <tr>
                    <td>&nbsp;</td>
                    <td>";
            
    
                     $html .="<input type=\"button\" name=\"btnNew\" id=\"btnNew\" value=\"New\" onClick=\"newdata(".$role_reult->HeadCode.")\" />
                      <input type=\"submit\" name=\"btnSave\" id=\"btnSave\" value=\"Save\" disabled=\"disabled\"/>";
 
          $html .=" <input type=\"submit\" name=\"btnUpdate\" id=\"btnUpdate\" value=\"Update\" />";
 
      
    $html .= "</tr></table>
 </form>
			";
		}

		echo json_encode($html);
	}

  public function newform($id){

    $newdata = $this->db->select('*')
            ->from('acc_coa')
            ->where('HeadCode',$id)
            ->get()
            ->row();

           
  $newidsinfo = $this->db->select('*,count(HeadCode) as hc')
            ->from('acc_coa')
            ->where('PHeadName',$newdata->HeadName)
            ->get()
            ->row();

$nid  = $newidsinfo->hc;
$n =$nid + 1;
if ($n / 10 < 1)
  $HeadCode = $id . "0" . $n;
else
  $HeadCode = $id . $n;

  $info['headcode'] =  $HeadCode;
  $info['rowdata'] =  $newdata;
  $info['headlabel'] =  $newdata->HeadLevel+1;
    echo json_encode($info);
  }

  public function insert_coa(){
    $headcode    = $this->input->post('txtHeadCode',true);
    $HeadName    = $this->input->post('txtHeadName',true);
    $PHeadName   = $this->input->post('txtPHead',true);
    $HeadLevel   = $this->input->post('txtHeadLevel',true);
    $txtHeadType = $this->input->post('txtHeadType',true);
    $isact       = $this->input->post('IsActive',true);
    $IsActive    = (!empty($isact)?$isact:0);
    $trns        = $this->input->post('IsTransaction',true);
    $IsTransaction = (!empty($trns)?$trns:0);
    $isgl        = $this->input->post('IsGL',true);
    $IsGL        = (!empty($isgl)?$isgl:0);
    $createby    = $this->session->userdata('id');
    $createdate=date('Y-m-d H:i:s');
       $postData = array(
      'HeadCode'       =>  $headcode,
      'HeadName'       =>  $HeadName,
      'PHeadName'      =>  $PHeadName,
      'HeadLevel'      =>  $HeadLevel,
      'IsActive'       =>  $IsActive,
      'IsTransaction'  =>  $IsTransaction,
      'IsGL'           =>  $IsGL,
      'HeadType'       => $txtHeadType,
      'IsBudget'       => 0,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
    ); 
 $upinfo = $this->db->select('*')
            ->from('acc_coa')
            ->where('HeadCode',$headcode)
            ->get()
            ->row();
            if(empty($upinfo)){
  $this->db->insert('acc_coa',$postData);
}else{

$hname =$this->input->post('HeadName',true);
$updata = array(
'PHeadName'      =>  $HeadName,
);

            
  $this->db->where('HeadCode',$headcode)
      ->update('acc_coa',$postData);
  $this->db->where('PHeadName',$hname)
      ->update('acc_coa',$updata);
}
    redirect($_SERVER['HTTP_REFERER']);
  }

   // Debit voucher Create 
  public function debit_voucher(){
     $this->permission->method('accounts','create')->redirect();
    $data['title']      = display('debit_voucher');
    $data['acc']        = $this->accounts_model->Transacc();
    $data['voucher_no'] = $this->accounts_model->voNO();
    $data['crcc']       = $this->accounts_model->Cracc();
    $data['module']     = "accounts";
    $data['page']       = "debit_voucher";   
    echo Modules::run('template/layout', $data);
  }

  // cash adjustment
  public function cash_adjustment(){
    $data['title']      = display('cash_adjustment');
    $data['voucher_no'] = $this->accounts_model->Cashvoucher();
    $data['module']     = "accounts";
    $data['page']       = "cash_adjustment";   
    echo Modules::run('template/layout', $data); 
  }

  //Bank Adjustment
 public function bank_adjustment(){
    $data['title']      = display('bank_adjustment');
    $data['voucher_no'] = $this->accounts_model->bankvoucher();
    $data['banks']      = $this->accounts_model->banklist();
    $data['module']     = "accounts";
    $data['page']       = "bank_adjustment";   
    echo Modules::run('template/layout', $data); 
  }

    //Create Cash Adjustment
 public function create_cash_adjustment(){
    $this->form_validation->set_rules('txtAmount', display('amount')  ,'required|max_length[100]');
    $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');
    $this->form_validation->set_rules('type', display('adjustment_type')  ,'required|max_length[20]');
    
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_cashadjustment()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/cash_adjustment/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/accounts/cash_adjustment");
    }else{
    $data['title']      = display('cash_adjustment');
    $data['voucher_no'] = $this->accounts_model->Cashvoucher();
    $data['module']     = "accounts";
    $data['page']       = "cash_adjustment";   
    echo Modules::run('template/layout', $data); 
     }

}


// Create Bank Adjustment
 public function create_bank_adjustment(){
    $this->form_validation->set_rules('txtAmount', display('amount')  ,'max_length[100]');
    $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');
    $this->form_validation->set_rules('type', display('adjustment_type')  ,'required|max_length[20]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_bankadjustment()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/accounts/bank_adjustment/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/accounts/bank_adjustment");
    }else{
      $data['title']      = display('bank_adjustment');
      $data['voucher_no'] = $this->accounts_model->bankvoucher();
      $data['banks']      = $this->accounts_model->banklist();
      $data['module']     = "accounts";
      $data['page']       = "bank_adjustment";   
      echo Modules::run('template/layout', $data); 
     }

}

   // Debit voucher code select onchange
  public function debtvouchercode($id){

    $debitvcode = $this->db->select('*')
            ->from('acc_coa')
            ->where('HeadCode',$id)
            ->get()
            ->row();
      $code = $debitvcode->HeadCode;       
echo json_encode($code);

   }
   //Supplier code 
    public function supplier_headcode($id){
$supplier_info = $this->db->select('supplier_name')->from('supplier_information')->where('supplier_id',$id)->get()->row();
$head_name =$id.'-'.$supplier_info->supplier_name;
    $supplierhcode = $this->db->select('*')
            ->from('acc_coa')
            ->where('HeadName',$head_name)
            ->get()
            ->row();
      $code = $supplierhcode->HeadCode;       
echo json_encode($code);

   }
   //Create Debit Voucher
 public function create_debit_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
      $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_debitvoucher()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/debit_voucher/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/debit_voucher");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/debit_voucher");
     }

}

 // Update Debit voucher 
public function update_debit_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->update_debitvoucher()) { 
          $this->session->set_flashdata('message', display('update_successfully'));
          redirect('accounts/aprove_v/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/aprove_v");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/accounts/aprove_v");
     }

}

 //Credit voucher 
 public function credit_voucher(){
     $this->permission->method('accounts','create')->redirect();
    $data['title']      = display('credit_voucher');
    $data['acc']        = $this->accounts_model->Transacc();
    $data['voucher_no'] = $this->accounts_model->crVno();
    $data['crcc']       = $this->accounts_model->Cracc();
    $data['module']     = "accounts";
    $data['page']       = "credit_voucher";   
    echo Modules::run('template/layout', $data);  
  }

   //Create Credit Voucher
 public function create_credit_voucher(){
    $this->permission->method('accounts','create')->redirect();
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
    $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');

         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_creditvoucher()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/credit_voucher/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/credit_voucher");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/credit_voucher");
     }

}
// Contra Voucher form
 public function contra_voucher(){
    $data['title']      = display('contra_voucher');
    $data['acc']        = $this->accounts_model->Transacc();
    $data['voucher_no'] = $this->accounts_model->contra();
    $data['module']     = "accounts";
    $data['page']       = "contra_voucher";   
    echo Modules::run('template/layout', $data); 
  }

   //Create Contra Voucher
 public function create_contra_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
     $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_contravoucher()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/contra_voucher/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/contra_voucher");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/contra_voucher");
     }

}
 // Journal voucher
 public function journal_voucher(){
    $this->permission->method('accounts','create')->redirect();
    $data['title']      = display('journal_voucher');
    $data['acc']        = $this->accounts_model->Transacc();
    $data['voucher_no'] = $this->accounts_model->journal();
    $data['page']       = 'journal_voucher';
    $data['module']     = "accounts";
    echo Modules::run('template/layout', $data);
  }

    //Create Journal Voucher
 public function create_journal_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
     $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_journalvoucher()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/journal_voucher/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/journal_voucher");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/journal_voucher");
     }

}
 //Aprove voucher
  public function aprove_v(){
    $data['title']   = display('voucher_approve');
    $data['aprroves'] = $this->accounts_model->approve_voucher(); 
    $data['module']  = "accounts";
    $data['page']    = "voucher_approve";   
    echo Modules::run('template/layout', $data);
}
 // isApprove
 public function isactive($id = null, $action = null)
  {

    $action = ($action=='active'?1:0);

    $postData = array(
      'VNo'      => $id,
      'IsAppove' => $action
    );

    if ($this->accounts_model->approved($postData)) {
      $this->session->set_flashdata('message', display('successfully_approved'));
    } else {
      $this->session->set_flashdata('exception', display('please_try_again'));
    }

    redirect($_SERVER['HTTP_REFERER']);
  }

   //Update voucher 
  public function voucher_update($id= null){
    $vtype =$this->db->select('*')
                    ->from('acc_transaction')
                    ->where('VNo',$id)
                    ->get()
                    ->row();
                   
                    if($vtype->Vtype =="DV"){
    $data['title']          = display('update_debit_voucher');
    $data['dbvoucher_info'] = $this->accounts_model->dbvoucher_updata($id);
    $data['credit_info']    = $this->accounts_model->crvoucher_updata($id);
    $data['module']         = "accounts";
    $data['page']            =  'update_dbt_crtvoucher';    
    } 
    if($vtype->Vtype =="CV"){
    $data['title']          = display('update_credit_voucher');
    $data['crvoucher_info'] = $this->accounts_model->crdtvoucher_updata($id);
    $data['debit_info']     = $this->accounts_model->debitvoucher_updata($id);
    $data['module']         = "accounts";
    $data['page']           =  'update_credit_bdtvoucher';  
    }
    if($vtype->Vtype =="JV"){
    $data['title'] = 'Update'.' '.display('journal_voucher');
    $data['acc'] = $this->accounts_model->Transacc();
    $data['voucher_info'] = $this->accounts_model->journal_updata($id);
    $data['module']         = "accounts";
    $data['page']           =  'update_journal_voucher';   
    } 


     if($vtype->Vtype =="Contra"){
    $data['title']          = 'Update'.' '.display('contra_voucher');
    $data['acc']            = $this->accounts_model->Transacc();
    $data['voucher_info']   = $this->accounts_model->journal_updata($id);
    $data['module']         = "accounts";
    $data['page']           =  'update_contra_voucher';   
    } 

    $data['crcc']           = $this->accounts_model->Cracc();
    $data['acc']            = $this->accounts_model->Transacc();
     echo Modules::run('template/layout', $data);
  }
  // update credit voucher 
  public function update_credit_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->update_creditvoucher()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/aprove_v/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/aprove_v");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/aprove_v");
     }

}

public function update_journal_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->update_journalvoucher()) { 
          $this->session->set_flashdata('message', display('successfully_updated'));
          redirect('accounts/aprove_v');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/accounts/aprove_v");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/accounts/aprove_v");
     }

}

public function update_contra_voucher(){
    $this->form_validation->set_rules('cmbDebit', display('cmbDebit')  ,'max_length[100]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->update_contravoucher()) { 
          $this->session->set_flashdata('message', display('successfully_updated'));
          redirect('accounts/aprove_v');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/aprove_v");
    }else{
      $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("accounts/aprove_v");
     }

}

  //Trial Balannce
    public function trial_balance(){
        $data['title']  = display('trial_balance');
        $data['module'] = "accounts";
        $data['page']   = "trial_balance";
        echo Modules::run('template/layout', $data); 
        }
     //Trial Balance Report
    public function trial_balance_report(){

      $data['software_info'] = '';
       $dtpFromDate     = $this->input->post('dtpFromDate');
       $dtpToDate       = $this->input->post('dtpToDate');
       $chkWithOpening  = $this->input->post('chkWithOpening',true);

       $results         = $this->accounts_model->trial_balance_report($dtpFromDate,$dtpToDate,$chkWithOpening);

       if ($results['WithOpening']) {
            $data['oResultTr']    = $results['oResultTr'];
            $data['oResultInEx']  = $results['oResultInEx'];
            $data['dtpFromDate']  = $dtpFromDate;
            $data['dtpToDate']    = $dtpToDate;
            $data['setting'] = $this->accounts_model->setting();

            // PDF Generator 
            $this->load->library('pdfgenerator');
            $dompdf = new DOMPDF();
            $page = $this->load->view('accounts/trial_balance_with_opening_pdf',$data,true);
            $dompdf->load_html($page);
            $dompdf->render();
            $output = $dompdf->output();
            file_put_contents('assets/data/pdf/Trial Balance With Opening As On '.$dtpFromDate.' To '.$dtpToDate.'.pdf', $output);


            $data['pdf']    = 'assets/data/pdf/Trial Balance With Opening As On '.$dtpFromDate.' To '.$dtpToDate.'.pdf';
            $data['title']  = display('trial_balance_report');
            $data['module'] = "accounts";
            $data['page']   = "trial_balance_with_opening";
            echo Modules::run('template/layout', $data);
       }else{

            $data['oResultTr']    = $results['oResultTr'];
            $data['oResultInEx']  = $results['oResultInEx'];
            $data['dtpFromDate']  = $dtpFromDate;
            $data['dtpToDate']    = $dtpToDate;
            $data['setting'] = $this->accounts_model->setting();
            // PDF Generator 
             $this->load->library('pdfgenerator');
            $dompdf = new DOMPDF();
            $page = $this->load->view('accounts/trial_balance_without_opening_pdf',$data,true);
            $dompdf->load_html($page);
            $dompdf->render();
            $output = $dompdf->output();
            file_put_contents('assets/data/pdf/Trial Balance As On '.$dtpFromDate.' To '.$dtpToDate.'.pdf', $output);
            $data['pdf']    = 'assets/data/pdf/Trial Balance As On '.$dtpFromDate.' To '.$dtpToDate.'.pdf';
     
            $data['title']  = display('trial_balance_report');
            $data['module'] = "accounts";
            $data['page']   = "trial_balance_without_opening";
            echo Modules::run('template/layout', $data);
       }

    }


    public function vouchar_cash($date){
        $vouchar_view = $this->accounts_model->get_vouchar_view($date);
        $data = array(
            'vouchar_view' => $vouchar_view,
        );

    $data['title'] = display('accounts_form');
     $content = $this->parser->parse('newaccount/vouchar_cash', $data, true);
    $this->template->full_admin_html_view($content);
    }
 // working
    public function general_ledger(){

        $general_ledger = $this->accounts_model->get_general_ledger();
        $data = array(
            'general_ledger' => $general_ledger,
        );

        $data['title']  = display('general_ledger');
        $data['module'] = "accounts";
        $data['page']   = "general_ledger";
        echo Modules::run('template/layout', $data);
    }

    public function general_led($Headid = NULL){
        $Headid = $this->input->post('Headid');
        $HeadName = $this->accounts_model->general_led_get($Headid);
        echo  "<option>Transaction Head</option>";
        $html = "";
        foreach($HeadName as $data){
            $html .="<option value='$data->HeadCode'>$data->HeadName</option>";
            
        }
        echo $html;
    }

    public function voucher_report_serach($vouchar=NULL){
       echo $vouchar = $this->input->post('vouchar',true);

        $voucher_report_serach = $this->accounts_model->voucher_report_serach($vouchar);

        if($voucher_report_serach->Amount==''){
             $pay='0.00';
        }else{
             $pay=$voucher_report_serach->Amount;
        }
        $baseurl = base_url().'accounts/vouchar_cash/'.$vouchar;
         $html = "";
         $html.="<td>
                   <a href=\"$baseurl\">CV-BAC-$vouchar</a>
                 </td>
                 <td>Aggregated Cash Credit Voucher of $vouchar</td>
                 <td>$pay</td>
                 <td align=\"center\">$vouchar</td>";
         echo $html;
    }
    //general ledger working
    public function accounts_report_search(){
        $cmbGLCode   = $this->input->post('cmbGLCode',true);
        $cmbCode     = $this->input->post('cmbCode',true);
        $dtpFromDate = $this->input->post('dtpFromDate');
        $dtpToDate   = $this->input->post('dtpToDate');
        $chkIsTransction = $this->input->post('chkIsTransction',true);
        $HeadName    = $this->accounts_model->general_led_report_headname($cmbGLCode);
        $HeadName2   = $this->accounts_model->general_led_report_headname2($cmbGLCode,$cmbCode,$dtpFromDate,$dtpToDate,$chkIsTransction);
         $pre_balance = $this->accounts_model->general_led_report_prebalance($cmbCode,$dtpFromDate);

        $data = array(
            'dtpFromDate' => $dtpFromDate,
            'dtpToDate'   => $dtpToDate,
            'HeadName'    => $HeadName,
            'HeadName2'   => $HeadName2,
            'prebalance'  =>  $pre_balance,
            'chkIsTransction' => $chkIsTransction,

        );
        $data['ledger'] = $this->db->select('*')->from('acc_coa')->where('HeadCode',$cmbCode)->get()->result_array();
        $data['title']  = display('general_ledger_report');
        $data['module'] = "accounts";
        $data['page']   = "general_ledger_report";
        echo Modules::run('template/layout', $data);

    }


    public function cash_book(){
        $data['title']   = display('cash_book');
        $data['module']  = "accounts";
        $data['company'] = '';
        $data['setting'] = $this->accounts_model->setting();
        $data['page']    = "cash_book";
        echo Modules::run('template/layout', $data);
    }
    public function bank_book(){
       $data['title']    = display('bank_book');
        $data['module']  = "accounts";
        $data['setting'] = $this->accounts_model->setting();
        $data['page']    = "bank_book";
        echo Modules::run('template/layout', $data);
    }
    // Inventory Report
     public function inventory_ledger(){
      $data['software_info'] = $this->Accounts_model->software_setting_info();
      $data['title'] = display('Inventory_ledger');
      $content = $this->parser->parse('newaccount/inventory_ledger', $data, true);
    $this->template->full_admin_html_view($content);
    }
     public function voucher_report(){
        $get_cash = $this->accounts_model->get_cash();
        $get_vouchar= $this->accounts_model->get_vouchar();
        $data = array(
            'get_cash'    => $get_cash,
            'get_vouchar' => $get_vouchar,
        );
        $data['title']  = display('voucher_report');
        $data['module'] = "accounts";
        $data['page']   = "coa";   
    echo Modules::run('template/layout', $data);
  }
   public function coa_print(){
     
        $data['title'] = display('accounts_form');
        $data['module'] = "accounts";
        $data['setting'] = $this->accounts_model->setting();
        $data['page']   = "coa_print";
        echo Modules::run('template/layout', $data);
    }
      //Profit loss report page
    public function profit_loss_report(){
       $data['title']   = display('general_ledger_report');
        $data['module'] = "accounts";
        $data['page']   = "profit_loss_report";
        echo Modules::run('template/layout', $data);
    }
     //Profit loss serch result
    public function profit_loss_report_search(){
        $dtpFromDate = $this->input->post('dtpFromDate');
        $dtpToDate   = $this->input->post('dtpToDate');

        $get_profit  = $this->accounts_model->profit_loss_serach();

        $data['oResultAsset']      = $get_profit['oResultAsset'];
        $data['oResultLiability']  = $get_profit['oResultLiability'];
        $data['dtpFromDate']  = $dtpFromDate;
        $data['dtpToDate']    = $dtpToDate;
        $data['pdf']    = 'assets/data/pdf/Statement of Comprehensive Income From '.$dtpFromDate.' To '.$dtpToDate.'.pdf';
        $data['title']  = display('general_ledger_report');
        $data['module'] = "accounts";
        $data['page']   = "profit_loss_report_search";
        echo Modules::run('template/layout', $data);
    }
     //Cash flow page
    public function cash_flow_report(){
        $data['title']  = display('cash_flow_report');
        $data['module'] = "accounts";
        $data['page']   = "cash_flow_report";
        echo Modules::run('template/layout', $data);
    }
     //Cash flow report search
    public function cash_flow_report_search(){
      $data['software_info'] ='';
        $dtpFromDate = $this->input->post('dtpFromDate');
        $dtpToDate   = $this->input->post('dtpToDate');

        $data['dtpFromDate']  = $dtpFromDate;
        $data['dtpToDate']    = $dtpToDate;

        // PDF Generator 
       $this->load->library('pdfgenerator');
        $dompdf = new DOMPDF();
        $page = $this->load->view('accounts/cash_flow_report_search_pdf',$data,true);
        $dompdf->load_html($page);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents('assets/data/pdf/Cash Flow Statement '.$dtpFromDate.' To '.$dtpToDate.'.pdf', $output);

        $data['pdf']    = 'assets/data/pdf/Cash Flow Statement '.$dtpFromDate.' To '.$dtpToDate.'.pdf';
        $data['title']  = display('general_ledger_report');
        $data['setting'] = $this->accounts_model->setting();
        $data['module'] = "accounts";
        $data['page']   = "cash_flow_report_search";
        echo Modules::run('template/layout', $data);;
    }

public function balance_adjustment(){
    $data['title']      = display('balance_adjustment');
    $data['voucher_no'] = $this->accounts_model->balanceadjvoucher();
    $data['paytype']    = $this->accounts_model->paytype();
    $data['module']     = "accounts";
    $data['page']       = "balance_adjustment";   
    echo Modules::run('template/layout', $data); 

}

// Balance Adjustment Create
public function create_balance_adjustment(){

   $this->form_validation->set_rules('type', display('adjustment_type')  ,'required');
   $this->form_validation->set_rules('parent_type', display('parent_head')  ,'required');
   $this->form_validation->set_rules('parent_type', display('parent_head')  ,'required');
   $this->form_validation->set_rules('amount', display('amount')  ,'required');
   $this->form_validation->set_rules('txtRemarks', display('remarks')  ,'max_length[200]');
         if ($this->form_validation->run()) { 
        if ($this->accounts_model->insert_balanceadjustment()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('accounts/accounts/balance_adjustment/');
        }else{
          $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect("accounts/accounts/balance_adjustment");
    }else{
    $data['title']      = display('cash_adjustment');
    $data['voucher_no'] = $this->accounts_model->balanceadjvoucher();
    $data['paytype']    = $this->accounts_model->paytype();
    $data['module']     = "accounts";
    $data['page']       = "balance_adjustment";   
    echo Modules::run('template/layout', $data); 
     }
}

  
}
