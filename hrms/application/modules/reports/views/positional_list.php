<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">

                    <div class="panel-heading">
                      <div class="panel-title">
                          <h4>
                          </h4>
                      </div>
                    </div>

                    <div class="panel-body">
                       
                      <div class="row">     
                           
                    
                     <div class="form-group row">
                       <?php echo form_open('reports/Employee_controller/positional_list',array('class' => 'form-inline', 'id' => 'validate'));?>
                         <label class="select col-sm-2"><?php echo display('search') ?>:</label>
                         <div class="col-sm-4">
                             <?php echo form_dropdown('employee_id', $dropdownemp, (!empty($id)?$id:" "), ' class="form-control"') ?> 
                         </div>
                         <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>
                            <input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printData();"/>
                         </div>
                       <?php echo form_close()?>
                     </div>
                        
                           
                     </div>
                    </div>
                </div>

            </div>
        </div>

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-bd"> 

            <div class="panel-heading">
              <div class="panel-title">
                  <h4>
                    <?php echo display('positional_info')?>
                  </h4>
              </div>
            </div>

            <div class="panel-body" id="printArea">
              <div class="table-responsive">
                <table width="100%" class="table table-bordered table-hover" border="1" cellspacing="0" cellpadding="6">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                           <th><?php echo display('name')?></th>
                           <th><?php echo display('division')?></th>
                           <th><?php echo display('Designation')?></th>
                           <th><?php echo display('duty_type')?></th>
                           <th><?php echo display('hire_date')?></th>
                           <th><?php echo display('original_h_date')?></th>
                           <th><?php echo display('termination_date')?></th>
                           <th><?php echo display('termination_reason')?></th>
                           <th><?php echo display('voluntary_termination')?></th>
                           <th><?php echo display('re_hire_date')?></th>
                           <th><?php echo display('rate_type')?></th>
                           <th><?php echo display('rate')?></th>
                           <th><?php echo display('pay_frequency')?></th>
                           <th><?php echo display('pay_frequency_txt')?></th>
                           <th><?php echo display('hourly_rate2')?></th>
                           <th><?php echo display('hourly_rate3')?></th>
                           <th><?php echo display('home_department')?></th>
                           <th><?php echo display('department_text')?></th>
                           <th><?php echo display('super_visor_name')?></th>
                           <th><?php echo display('is_super_visor')?></th>
                           <th><?php echo display('supervisor_report')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_positinal)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_positinal as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                <td><a href="<?php echo base_url("employee/Employees/cv/$row->employee_id");?>" ><?php echo $row->first_name.' '.$row->last_name; ?></a></td>
                                <td><?php echo $row->department_name; ?></td>
                                <td><?php echo $row->position_name; ?></td>  
                                <td><?php echo $row->type_name; ?></td> 
                                <td><?php echo $row->hire_date; ?></td> 
                                <td><?php echo $row->original_hire_date; ?></td>
                                <td><?php echo $row->termination_date; ?></td>
                                <td><?php echo $row->termination_reason; ?></td>
                                <td><?php if($row->voluntary_termination==1){
                                    echo 'Yes';
                                }else{
                                    echo 'NO';
                                } ?></td>
                                <td><?php echo $row->rehire_date; ?></td>
                                <td><?php echo $row->rd_type; ?></td> 
                                <td><?php echo $row->rate; ?></td>
                                <td><?php echo $row->frequency_name; ?></td>  
                                <td><?php echo $row->pay_frequency_txt; ?></td>  
                                <td><?php echo $row->hourly_rate2; ?></td>  
                                <td><?php echo $row->hourly_rate3; ?></td>  
                                <td><?php echo $row->home_department; ?></td>  
                                <td><?php echo $row->department_text; ?></td>
                                <td><?php echo $row->f_name.' '.$row->l_name; ?></td> 
                                <td><?php if($row->is_super_visor==1){
                                    echo "yes";
                                }else{
                                    echo 'No';
                                } ?></td> 
                                <td><?php echo $row->supervisor_report; ?></td> 
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
                </div>
                 <?php echo  $links ?>
            </div>
        </div>
    </div>
</div>
