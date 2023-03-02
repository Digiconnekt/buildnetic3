
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4></h4>
                </div>
            </div>
            <div id="printArea">
                <div class="panel-body">
                  <div class="table-responsive">
                <table width="100%" class="table_boxnew" cellpadding="5" cellspacing="0">
                <tr>
                 <td colspan="4" align="center">
                <h3><?php echo display('trial_balance')?><br/>
        <?php echo display('as_on')?> <?php echo $dtpFromDate; ?> <?php echo display('to')?> <?php echo $dtpToDate;?></h3></td></tr>
                <tr class="table_head">
                <td width="20%" align="center" class="trialsecondclass"><strong><?php echo display('code')?></strong></td>
                <td width="50%" align="center" class="trialsecondclass"><strong><?php echo display('account_name')?></strong></td>
                <td width="15%" align="center" class="trialsecondclass"><strong><?php echo display('debit')?></strong></td>
                <td width="15%" align="center"><strong><?php echo display('credit')?></strong></td>
                </tr>
        <?php
            $TotalCredit=0;
          $TotalDebit=0;  
          $k=0;
            for($i=0;$i<count($oResultTr);$i++)
          {
            $COAID=$oResultTr[$i]['HeadCode'];
            
              $sql="SELECT SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit FROM acc_transaction WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' ";
            
          

            $q1=$this->db->query($sql);
            $oResultTrial = $q1->row();


            $bg=$k&1?"#FFFFFF":"#E7E0EE";
            if($oResultTrial->Credit+$oResultTrial->Debit>0)
            {
              $k++; ?>
                <tr class="table_data">
                  <td  align="left" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><a href="javascript:"><?php echo $oResultTr[$i]['HeadCode'];?>
                   </a>
                  </td>
                  <td  align="left" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><?php echo $oResultTr[$i]['HeadName'];?></td>
                  <?php
            if($oResultTrial->Debit>$oResultTrial->Credit)
          {
          ?>
                  <td  align="right" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><?php 
            $TotalDebit += $oResultTrial->Debit-$oResultTrial->Credit;
           echo number_format($oResultTrial->Debit-$oResultTrial->Credit,2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" class="trialthird"><?php
           echo number_format('0.00',2);?></td>
                   <?php
          }
          else
          {
          ?>
                     <td  align="right" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><?php 
           echo number_format('0.00',2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" class="trialthird"><?php 
            $TotalCredit += $oResultTrial->Credit-$oResultTrial->Debit;
           echo number_format($oResultTrial->Credit-$oResultTrial->Debit,2);?></td>
                   <?php
          }
          ?>
                </tr>
                <?php
            }
          } 
          
          for($i=0;$i<count($oResultInEx);$i++)
          {
            $COAID=$oResultInEx[$i]['HeadCode'];
            
              $sql="SELECT SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit FROM acc_transaction WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' ";
          

            $q2=$this->db->query($sql);
            $oResultTrial = $q2->row();

            $bg=$k&1?"#FFFFFF":"#E7E0EE";
            if($oResultTrial->Credit+$oResultTrial->Debit>0)
            {
              $k++; ?>
                <tr class="table_data">
                  <td  align="left" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><a href="javascript:"><?php echo $oResultInEx[$i]['HeadCode'];?>
                   </a>
                  </td>
                  <td  align="left" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><?php echo $oResultInEx[$i]['HeadName'];?></td>
                  <?php
            if($oResultTrial->Debit>$oResultTrial->Credit)
          {
          ?>
                  <td  align="right" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><?php 
            $TotalDebit += $oResultTrial->Debit-$oResultTrial->Credit;
           echo number_format($oResultTrial->Debit-$oResultTrial->Credit,2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" class="trialthird"><?php
           echo number_format('0.00',2);?></td>
                   <?php
          }
          else
          {
          ?>
                     <td  align="right" bgcolor="<?php echo $bg;?>" class="trialsecondclass"><?php 
           echo number_format('0.00',2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" class="trialthird"><?php 
            $TotalCredit += $oResultTrial->Credit-$oResultTrial->Debit;
           echo number_format($oResultTrial->Credit-$oResultTrial->Debit,2);?></td>
                   <?php
          }
          ?>
                </tr>
                <?php
            }
          } 
        ?>
                <tr class="table_head">
                  <td colspan="2" align="right" class="trialbaltotal"><strong><?php echo display('total')?></strong></td>
                  <td align="right" class="trialbaltotal"><strong><?php echo number_format($TotalDebit); ?></strong></td>
                  <td align="right" class="trialcredit"><strong><?php echo number_format( $TotalCredit,2); ?></strong></td>
                </tr>
                 <tr>
                  <td colspan="4" align="center">&nbsp;</td>
                </tr>
                 <tr>
                  <td colspan="4" align="center">
                    <table width="100%" cellpadding="1" cellspacing="20" >
                      <tr>
                          <td width="20%" class="acc_cashflow_commonborder" align="center"><?php echo display('prepared_by')?></td>
                            <td width="20%" class="acc_cashflow_commonborder" align="center"><?php echo display('account_official')?></td>
                            <td  width="20%" class="acc_cashflow_commonborder" align='center'><?php echo display('chairman')?></td>
                        </tr>
                    </table>
                  </td>
                </tr>
            </table>
          </div>
      
                </div>
            </div>

            <div class="text-center" id="print">
                <input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printDiv();"/>
                <a href="<?php echo base_url($pdf)?>" download>
                    <input type="button" class="btn btn-success" name="btnPdf" id="btnPdf" value="PDF"/>
                </a>
            </div>
        </div>
    </div>
</div>
