
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                       
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="table-responsive">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('voucher_no') ?></th>
                                <th><?php echo display('remark') ?></th>
                                <th><?php echo display('debit') ?></th>
                                <th><?php echo display('credit') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                         
                            
                            <?php $sl = 1; 
                            foreach($aprroves as $appr) {
                             ?>
                             <tr>
                              <td><?php echo $sl; ?></td>
                                <td><?php echo $appr->VNo; ?></td>
                                <td><?php echo $appr->Narration; ?></td>
                                <td><?php echo $appr->Debit; ?></td>
                                <td><?php echo $appr->Credit; ?></td>
                                <td> 
                                <a href="<?php echo base_url("accounts/isactive/$appr->VNo/active") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="Approve"><?php echo display('approved')?></a>
                                 <a href="<?php echo base_url("accounts/voucher_update/$appr->VNo") ?>" class="btn btn-info btn-sm" title="Update"><i class="fa fa-edit"></i></a>
                            </td>    
                             </tr>
                         
                           <?php $sl++;}?>
                        </tbody>
                    </table>
                 
                </div>
            </div> 
        </div>
    </div>
</div>

 