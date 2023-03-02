

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <span class="text-left">
                        <?php echo display('general_ledger');?>

                    </span>

                </div>
                 <div class="text-right" id="print">
                <input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printDiv();"/>
                
            </div>
            </div>
<div id="printArea">
    <div class="table-responsive">
            <table class="table" width="99%" align="center" cellpadding="5" cellspacing="5" border="2"> 

                <thead>
                <tr align="center">

                    <td colspan="8"><font size="+1"> <strong><?php echo display('general_ledger_of').' '.$ledger[0]['HeadName'].' on '.$dtpFromDate. ' To '  .$dtpToDate;?></strong></font><strong></th></strong>
                </tr>

                <tr>
                    <td height="25"><strong><?php echo display('sl');?></strong></td>
                    <td><strong><?php echo "Transaction Date";?></strong></td>
                    <td><strong><?php echo !empty($Trans)?"Transaction Date":"Head Code";?></strong></td>
                    <td><strong><?php echo !empty($Trans)?"Voucher No":"Head Name";?></strong></td>
                    <?php
                    if($chkIsTransction){
                        ?>
                        <td><strong><?php echo display('particulars')?></strong></td>
                    <?php
                    }
                    ?>
                    <td align="right"><strong><?php echo display('debit');?></strong></td>
                    <td align="right"><strong><?php echo display('credit');?></strong></td>
                    <td align="right"><strong><?php echo display('balance');?></strong></td>
                </tr>
                </thead>
                <tbody>

                <?php
                if((!empty($error)?$error:'')){
                    ?>

                    <tr>
                        <td height="25"></td>
                        <td></td>
                        <td><?php echo display('no_report')?>.</td>
                        <?php
                        if($chkIsTransction){
                            ?>
                            <td></td>
                            <?php
                        }
                        ?>

                        <td align="right"></td>
                        <td align="right"></td>
                        <td align="right"></td>
                    </tr>

                    <?php
                }
                else{
                $TotalCredit=0;
                $TotalDebit=0;
                $CurBalance = $prebalance;
                foreach($HeadName2 as $key=>$data) {
                    ?>
                    <tr>
                        <td height="25"><?php echo ++$key;?></td>
                        <td><?php echo $data->VDate; ?></td>
                        <td><?php echo $data->COAID; ?></td>
                        <td><?php echo $data->HeadName; ?></td>
                        <?php
                        if($chkIsTransction){
                            ?>
                            <td><?php echo $data->Narration; ?></td>
                            <?php
                        }
                        ?>

                        <td align="right"><?php echo  number_format($data->Debit,2,'.',','); ?></td>
                        <td align="right"><?php echo  number_format($data->Credit,2,'.',','); ?></td>
                        <?php
                        $TotalDebit += $data->Debit;
                        $CurBalance += $data->Debit;

                        $TotalCredit += $data->Credit;
                        $CurBalance -= $data->Credit;
                        ?>
                        <td align="right"><?php echo   $balance = number_format($CurBalance,2,'.',','); 
                        ?></td>
                        
                    </tr>
                <?php } ?>

                <tfoot>
                <tr class="table_data">
                    <?php
                        if($chkIsTransction)
                            $colspan=5;
                        else
                            $colspan=4;
                            ?>
                    <td colspan="<?php echo $colspan;?>" align="right"><strong><?php echo display('total')?></strong></td>                    
                    <td align="right"><strong><?php echo number_format($TotalDebit,2,'.',','); ?></strong></td>
                    <td align="right"><strong><?php echo number_format($TotalCredit,2,'.',','); ?></strong></td>
                    <td align="right"><strong><?php echo number_format((!empty($balance)?$CurBalance:0),2,'.',','); ?></strong></td>
                </tr>
                </tfoot>
                <?php
                }
                ?>
                </tbody>
                <h4>
                    <?php echo display('pre_balance')?> : <?php echo number_format($prebalance,2,'.',','); ?>
                    <br /> <?php echo display('current_balance')?> : <?php echo number_format($CurBalance,2,'.',','); ?>
                </h4>
            </table>
        </div>
        </div>

        </div>
    </div></div>
