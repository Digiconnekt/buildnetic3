  <div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                      <?php echo display('update_debit_voucher')?>   
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                      
                         <?php echo  form_open_multipart('accounts/update_debit_voucher') ?>
                     <div class="form-group row">
                        <label for="vo_no" class="col-sm-2 col-form-label"><?php echo display('voucher_no') ?></label>
                        <div class="col-sm-4">
                             <input type="text" name="txtVNo" id="txtVNo" value="<?php echo $credit_info->VNo?>" class="form-control" readonly>
                        </div>
                    </div> 
                     <div class="form-group row">
                        <label for="ac" class="col-sm-2 col-form-label"><?php echo display('credit_account_head') ?></label>
                        <div class="col-sm-4">
                          <select name="cmbDebit" id="cmbDebit" class="form-control">
                            <option value='1020101'><?php echo display('cash_in_hand') ?></option>
                            <?php foreach ($crcc as $cracc) { ?>
                            <option value="<?php echo $cracc->HeadCode;?>" <?php if($credit_info->COAID == $cracc->HeadCode){
                              echo 'selected';
                            } ?>><?php echo $cracc->HeadName?></option>
                           <?php  } ?>

                          </select>
                        </div>
                    </div> 
                     <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label"><?php echo display('date') ?></label>
                        <div class="col-sm-4">
                             <input type="text" name="dtpDate" id="dtpDate" class="form-control datepicker" value="<?php  echo $credit_info->VDate;?>">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="txtRemarks" class="col-sm-2 col-form-label"><?php echo display('remark') ?></label>
                        <div class="col-sm-4">
                          <textarea  name="txtRemarks" id="txtRemarks" class="form-control"><?php  echo $credit_info->Narration;?></textarea>
                        </div>
                    </div> 
                       <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="debtAccVoucher"> 
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('account_name') ?></th>
                                         <th class="text-center"><?php echo display('code') ?></th>
                                          <th class="text-center"><?php echo display('amount') ?></th>
                                           <th class="text-center"><?php echo display('action') ?></th>  
                                    </tr>
                                </thead>
                                <tbody id="debitvoucher">
                                   <?php  $sl = 1; 
                                   foreach ($dbvoucher_info as $debitvoucher){?>
                                 
                                    <tr>
                                        <td class="">  
       <select name="cmbCode[]" id="cmbCode_<?php echo $sl; ?>" class="form-control" onchange="load_codeDebtv(this.value,<?php echo $sl; ?>)">
         <?php foreach ($acc as $acc1) {?>
   <option value="<?php echo $acc1->HeadCode;?>"  <?php if($debitvoucher->COAID ==$acc1->HeadCode){
    echo 'selected';
   } ?>><?php echo $acc1->HeadName;?></option>
         <?php }?>
       </select>

                                         </td>
                                        <td><input type="text" name="txtCode[]" value="<?php echo $debitvoucher->COAID;?>" class="form-control "  id="txtCode_<?php echo $sl; ?>" ></td>
                                        <td><input type="number" name="txtAmount[]" value="<?php echo $debitvoucher->Debit;?>" class="form-control total_price text-right"  id="txtAmount_<?php echo $sl; ?>" onkeyup="calculationDebtv(<?php echo $sl; ?>)" >
                                           </td>
                                       <td>
                                                <button  class="btn btn-danger red" type="button" value="<?php echo display('delete')?>" onclick="deleteRowDebtv(this)"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                    </tr>   
                                    <?php $sl++;} ?>                           
                              
                                </tbody>                               
                             <tfoot>
                                    <tr>
                                      <td >
                                            <input type="button" id="add_more" class="btn btn-info" name="add_more"  onClick="addaccountDebt('debitvoucher');" value="<?php echo display('add_more') ?>" />
                                        </td>
                                        <td colspan="1" class="text-right"><label  for="reason" class="  col-form-label"><?php echo display('total') ?></label>
                                           </td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="form-control text-right " name="grand_total" value="<?php  echo $credit_info->Credit;?>" readonly="readonly" />
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="form-group form-group-margin row">
                           
                            <div class="col-sm-12 text-right">

                                <input type="submit" id="add_receive" class="btn btn-success btn-large" name="save" value="<?php echo display('update') ?>" tabindex="9"/>
                                <input type="hidden" name="" id="base_url" value="<?php echo base_url();?>">
                                <input type="hidden" name="" id="headoption" value="<?php foreach ($acc as $acc2) {?><option value='<?php echo $acc2->HeadCode;?>'><?php echo $acc2->HeadName;?></option><?php }?>">
                            </div>
                        </div>
                  <?php echo form_close() ?>
            </div>  
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/dist/jstree.min.js" ></script>
<script src="<?php echo base_url('assets/js/account.js') ?>" type="text/javascript"></script>