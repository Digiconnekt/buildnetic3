<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 
    <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                      <?php if($this->permission->method('asset','create')->access()): ?>
                         <a href="<?php echo base_url('asset/equipment_maping/maping_form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('assign_asset') ?></a>
                     <?php endif;?>
                       
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                           <th><?php echo display('employee_name') ?></th>
                            <th><?php echo display('equipment_name') ?></th>
                           <th><?php echo display('action') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($equipment)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($equipment as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php 
                                      $employee =$this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$row->employee_id)->get()->row();
                                      echo $employee->first_name.' '.$employee->last_name;
                                     ?></td> 
                                   <td><?php  $eqments =$this->db->select('a.*,b.equipment_name')->from('employee_equipment a')->join('equipment b','b.equipment_id=a.equipment_id','left')->where('a.employee_id',$row->employee_id)->where('a.return_date','0000-00-00')->get()->result_array();
                              $eqnamess= '';
                              foreach ($eqments as $eq) {
                               $eqnamess .= $eq['equipment_name'].',';
                              }

                                    echo $eqnamess; ?></td>              
                                   <td class="center">
                                    <?php if($eqnamess !=''){?>
                                    <?php if($this->permission->check_label('return_asset')->create()->access()): ?>
                                        <a href="<?php echo base_url("asset/Equipment_maping/asset_return_form/$row->employee_id") ?>" class="btn btn-xs btn-success"><?php echo display('return_now');?></a>
                                        <?php endif; ?>
                                      <?php }else{?>
                                        <?php echo 'Returned All Equipments';?>
                                      <?php }?>
                                    </td>
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
 