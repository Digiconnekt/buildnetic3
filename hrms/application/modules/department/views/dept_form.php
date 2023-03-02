<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-bd"> 

             <div class="panel-heading panel-aligner" >
                    <div class="panel-title">
                        <h4><?php echo display('department') ?></h4>
                    </div>
                    <div class="mr-25">

                       <?php if($this->permission->method('department','create')->access()): ?>  
                        <button type="button" class="btn btn-primary btn-md" data-target="#add" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <?php echo display('add_new_dept')?></button> 
                        <?php endif; ?>
                         <?php if($this->permission->method('department','read')->access()): ?>  
                        <a href="<?php echo base_url();?>/department/Department_controller/dept_view" class="btn btn-primary"><?php echo display('manage_dept')?></a>
                        <?php endif; ?>
                         <?php if($this->permission->method('add_division','create')->access()): ?>  
                        <a href="<?php echo base_url();?>/department/Division_controller/division_form" class="btn btn-info"><?php echo display('add_division')?></a>
                        <?php endif; ?>
                        <?php if($this->permission->method('division_list','read')->access()): ?>  
                        <a href="<?php echo base_url();?>/department/Division_controller/index" class="btn btn-info"><?php echo display('division_list')?></a>
                        <?php endif; ?>


                    </div>

             </div>

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('department_name') ?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row->department_name; ?></td>
                                     
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
 
 
 <div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong><h4><i class='fa fa-university' aria-hidden='true'></i>Department Form</h4></strong></center>
            </div>
            <div class="modal-body">
               
    
   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                       
                    </div>
                </div>
                <div class="panel-body">

                    <?php echo  form_open('department/Department_controller/create_dept'); ?>
                   
                       <div class="form-group row">
                           
                            <label for="department_name" class="col-sm-3 col-form-label">
                            <?php echo display('department_name') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="department_name" class=" form-control" placeholder="<?php echo display('department_name') ?>">
                               
                            </div>
                           
                        </div>
                       
                        
             
                        <div class="form-group form-group-margin text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>


