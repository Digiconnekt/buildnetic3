
<link href="<?php echo MOD_URL.'projectmanagement/assets/css/project.css'; ?>" rel="stylesheet" type="text/css"/>

<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span class="title"><?php echo $title; ?></span>
                        </div>
                    </div>
                    <?php echo form_open_multipart('projectmanagement/Pm_tasks/get_parent_project_tasks/'.$project_info->project_id, array('class' => 'form-vertical', 'id' => 'transfer_task', 'name' => 'transfer_task')) ?>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sprint_name" class="col-sm-3 col-form-label"><?php echo "Transfer From(Project)"; ?> <i>*</i></label>
                                    <div class="col-sm-9">
                                        <input type="text"class="form-control" name="previous_project_name" id="previous_project_name" readonly placeholder="<?php echo display('project_name') ?>" value="<?php if(!empty($previous_project_info->project_name)){echo $previous_project_info->project_name;}?>">

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sprint_name" class="col-sm-3 col-form-label"><?php echo "Transfer To(Project)"; ?> <i>*</i></label>
                                    <div class="col-sm-9">

                                        <input type="text"class="form-control" name="project_name" id="project_name" readonly placeholder="<?php echo display('project_name') ?>" value="<?php if(!empty($project_info->project_name)){echo $project_info->project_name;}?>">

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display("backlogs");?></h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display("select");?></th>
                                        <th><?php echo display("summary");?></th>
                                        <th><?php echo display("project_lead");?></th>
                                        <th><?php echo display("team_member");?></th>
                                        <th><?php echo display("priority");?></th>
                                        <th><?php echo display("create_date");?></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if (!empty($previous_project_backlogs)) { ?>

                                    <?php foreach ($previous_project_backlogs as $row) { ?>

                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox_<?php echo $row->task_id;?>" type="checkbox" name="backlog_tasks[]" value="<?php echo $row->task_id; ?>">
                                                    <label for="checkbox_<?php echo $row->task_id;?>"></label>
                                                </div>
                                            </td>
                                            <td><?php echo $row->summary; ?></td>
                                            <td><?php echo $row->proj_lead_firstname.' '.$row->proj_lead_lastname; ?></td>
                                            <td><?php echo $row->team_mem_firstname.' '.$row->team_mem_lastname; ?></td>
                                            <td><?php echo $row->priority == 1?"High":"Low"; ?></td>
                                            <td><?php echo date("Y-m-d", strtotime($row->created_at)); ?></td>
                                        </tr>

                                    <?php 
                                        }
                                    }else{
                                    ?>

                                        <caption class="caption-placement">No tasks available at  backlogs of <span class="text-danger"><?php echo $previous_project_info->project_name;?></span>.</caption>

                                    <?php }?>

                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group row">
                                    <div class="form-group form-group-margin form-projectmanagement text-right">

                                        <input type="submit" id="update-backlog-tasks" class="btn btn-success btn-large" name="update-backlog-tasks" value="<?php echo display('save') ?>" tabindex="10"/>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <?php echo form_close() ?>

            </div>
        </div>