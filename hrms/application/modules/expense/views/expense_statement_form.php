       <!-- New expense -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('expense_statement') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                                 <?php echo form_open('expense/expense/expense_statement', array('class' => 'form-inline', 'method' => 'get')) ?>
                        <?php
                        $today = date('Y-m-d');
                        ?>
                        <div class="form-group form-group-new expstatmnt">
                              <select class="form-control" name="expense_name">
                                <option value="">Select Expense</option>
                                <option value="all">All</option>
                                <?php foreach($item_list as $expenses){?>
                                  <option value="<?php echo $expenses['expense_name']?>"><?php echo $expenses['expense_name']?></option>
                              <?php }?>
                              </select>
                           
                        </div>
                        <div class="form-group form-group-new">
                            <label class="" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" value="<?php echo (!empty($from_date)?$from_date:$today) ?>">
                        </div> 

                        <div class="form-group form-group-new">
                            <label class="" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="<?php echo (!empty($to_date)?$to_date:$today) ?>">
                        </div>  

                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')"><?php echo display('print') ?></a>
                        <?php echo form_close() ?>
                
                        
                    </div>
                    
                </div>
            </div>
        </div>

<!-- Add new expense statement end -->



