
<link href="<?php echo base_url('application/modules/accounts/assets/css/update_contra_voucher.css'); ?>" rel="stylesheet" type="text/css"/>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                     <?php echo display('contra_voucher')?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                         <?php echo  form_open_multipart('accounts/update_contra_voucher') ?>
                     <div class="form-group row">
                        <label for="vo_no" class="col-sm-2 col-form-label">Voucher No</label>
                        <div class="col-sm-4">
                             <input type="text" name="txtVNo" id="txtVNo" value="<?php echo $voucher_info[0]['VNo'];?>" class="form-control" readonly>
                        </div>
                    </div> 
                    
                     <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-4">
                             <input type="text" name="dtpDate" id="dtpDate" class="form-control datepicker" value="<?php echo $voucher_info[0]['VDate'];?>">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="txtRemarks" class="col-sm-2 col-form-label">Remark</label>
                        <div class="col-sm-4">
                          <textarea  name="txtRemarks" id="txtRemarks" class="form-control"><?php echo $voucher_info[0]['Narration'];?></textarea>
                        </div>
                    </div> 
                       <div class="table-responsive update-contra-vc">
                            <table class="table table-bordered table-hover" id="debtAccVoucher"> 
                                <thead>
                                    <tr>
                                        <th class="text-center">Account Name</th>
                                         <th class="text-center">Code</th>
                                          <th class="text-center">Debit</th>
                                          <th class="text-center">Credit</th>
                                          <th class="text-center">Action</th>  
                                    </tr>
                                </thead>
                                <tbody id="debitvoucher">
                                   <?php
                                   $sl = 1;
                                   $total_debit = 0;
                                   $total_credit = 0;
                                    foreach($voucher_info as $vinfo){
                                      $total_debit += $vinfo['Debit'];
                                      $total_credit += $vinfo['Credit'];
                                      ?>
                                    <tr>
                                        <td class="debitvoucher-headcode">  
       <select name="cmbCode[]" id="cmbCode_<?php echo $sl?>" class="form-control" onchange="load_codecontra(this.value,<?php echo $sl?>)">
         <?php foreach ($acc as $acc1) {?>
   <option value="<?php echo $acc1->HeadCode;?>" <?php if($vinfo['COAID'] == $acc1->HeadCode){echo 'selected';}?>><?php echo $acc1->HeadName;?></option>
         <?php }?>
       </select>

                                         </td>
                                        <td><input type="text" name="txtCode[]"  class="form-control " value="<?php echo $vinfo['COAID'];?>"  id="txtCode_<?php echo $sl?>" readonly></td>
                                        <td><input type="number" name="txtAmount[]" value="<?php echo $vinfo['Debit'];?>" class="form-control total_price text-right"  id="txtAmount_<?php echo $sl?>" onkeyup="calculationcontra(<?php echo $sl?>)" >
                                           </td>
                                            <td ><input type="number" name="txtAmountcr[]" value="<?php echo $vinfo['Credit'];?>" class="form-control total_price1 text-right"  id="txtAmount<?php echo $sl?>_<?php echo $sl?>" onkeyup="calculationcontra(<?php echo $sl?>)" >
                                           </td>
                                       <td>
                                                <button class="btn btn-danger red debitvoucher-button" type="button" value="<?php echo display('delete')?>" onclick="deleteRowcontra(this)"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                    </tr>   
                                    <?php $sl++;}?>                           
                              
                                </tbody>                               
                             <tfoot>
                                    <tr>
                                      <td >
                                            <input type="button" id="add_more" class="btn btn-info" name="add_more"  onClick="addaccountcontra('debitvoucher');" value="<?php echo display('add_more') ?>" />
                                        </td>
                                        <td colspan="1" class="text-right"><label  for="reason" class="  col-form-label"><?php echo display('total') ?></label>
                                           </td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="form-control text-right " name="grand_total" value="<?php echo $total_debit;?>" readonly="readonly" value="0"/>
                                        </td>
                                         <td class="text-right">
                                            <input type="text" id="grandTotal1" class="form-control text-right " name="grand_total1" value="<?php echo $total_credit;?>" readonly="readonly" value="0"/>
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