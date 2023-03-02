<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Autpupdate css part-->
<link rel="stylesheet" type="text/css" href="<?php echo MOD_URL.'autoupdate/assets/css/auto_update.css'; ?>">
<!-- Autpupdate js part-->
<script src="<?php echo MOD_URL.'autoupdate/assets/js/script.js'; ?>"></script>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-body">
            <?php if ($latest_version!=$current_version) { ?>
                <?php echo form_open_multipart("autoupdate/autoupdate/update") ?>
                    <div class="row blink-section">
                        <div class="form-group col-lg-8 col-sm-offset-2">
                            <blink class="text-success text-center"><?php echo @$message_txt ?></blink>
                            <blink class="text-waring text-center"><?php echo @$exception_txt ?></blink>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="alert alert-success text-center latest-version"><?php echo 'Latest Version'?> <br>V-<?php echo $latest_version ?></div>
                                </div> 
                                <div class="col-lg-6 ">
                                    <div class="alert alert-danger text-center current-version"><?php echo 'Current Version';?> <br>V-<?php echo $current_version ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="checkserver">
                    <div class="row">
                        <div class="form-group col-lg-6 col-sm-offset-3">
                            <p class="alert" id="errormsg"><?php echo "Before Update Check Your Server requiremnt for Update script.Check Your server php allow_url_fopen is enable,memory Limit More than 100M and max execution time is 300 or more";?></p>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success col-sm-offset-5" onclick="checkserver()"><i class="fa fa-wrench" aria-hidden="true"></i> <?php echo "Check server";?></button>
                    </div>
                    </div>
                    <div id="serverok">
                    <div class="row">
                        <div class="form-group col-lg-6 col-sm-offset-3 input-section">
                             
                            <p class="alert"><?php echo display('notesupdate')?></p>
                            <p class="alert">note: strongly recomanded to backup your <b>SOURCE FILE</b> and <b>DATABASE</b> before update. <a href="<?php echo base_url('dashboard/backup_restore/download')?>" class="btn btn-primary">Download Database</a></p>
                            
                            <label><?php echo display('purchase_key')?><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="purchase_key">
                            <input type="hidden" name="" id="base_url" value="<?php echo base_url();?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-offset-3">                           
                            <label><?php echo "Select Version";?><span class="text-danger">*</span></label>
                            <select name="version"  class="form-control">
                            <option value=""  selected="selected"><?php echo display('select_option') ?></option>
                                <?php $start=$latest_version-0.4;
                                for($i=$current_version+0.1;$i<=$latest_version;$i+=0.1){
                                ?>
                                <option value="<?php echo number_format((float)$i, 1, '.', '');?>"><?php echo "Hrm-v".number_format((float)$i, 1, '.', '');?></option>
                                <?php } ?>
                               
                              </select>
                              <p><a href="https://forum.bdtask.com" target="_blank">Do you Need support?</a> </p>
                        </div>
                    </div> 
                    <div>
                        <button type="submit" class="btn btn-success col-sm-offset-5" onclick="return confirm('are you sure want to update?')"><i class="fa fa-wrench" aria-hidden="true"></i> <?php echo display('update')?></button>
                    </div>
                    </div>
                <?php echo form_close() ?>

                <?php } else{  ?>
                    <div class="row noupdate-section">
                        <div class="form-group col-lg-4 col-sm-offset-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success text-center cur-ver"><?php echo 'Current Version'?> <br>V-<?php echo $current_version ?></div>
                                    <h2 class="text-center"><?php echo display('noupdates')?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
 