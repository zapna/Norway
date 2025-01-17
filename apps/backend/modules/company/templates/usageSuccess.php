<?php use_helper('I18N') ?><div id="sf_admin_container">
    <div id="sf_admin_content">
        <!-- employee/list?filters[company_id]=1 -->
        <a href="<?php echo url_for('employee/index') . '?company_id=' . $company->getId() . "&filter=filter" ?>" class="external_link" target="_self"><?php echo __('Employees') ?> (<?php echo count($company->getEmployees()) ?>)</a>
        <a href="<?php echo url_for('company/usage') . '?company_id=' . $company->getId(); ?>" class="external_link" target="_self"><?php echo __('Usage') ?></a>
        <a href="<?php echo url_for('company/paymenthistory') . '?company_id=' . $company->getId() . '&filter=filter' ?>" class="external_link" target="_self"><?php echo __('Payment History') ?></a>
    </div>

    <h1><?php echo 'Other Events'; ?> </h1>
    <table width="100%" cellspacing="0" cellpadding="2" class="tblAlign" border='0'>
      <tr class="headings">
        <th class="title"><?php echo __('Date &amp; time') ?></th>
        <th class="title" width="40%"><?php echo __('Description') ?></th>
        <th class="title"><?php echo __('Amount') ?></th>
      </tr>
    <?php
    if(count($events)>0){
    foreach ($events->xdr_list as $xdr) {
    ?>
    <tr>
        <td><?php echo date("Y-m-d H:i:s", strtotime($xdr->bill_time)); ?></td>
        <td><?php echo $xdr->CLD; ?></td>
        <td><?php echo BaseUtil::format_number($xdr->charged_amount); ?></td>
    </tr>
    <?php } }else {

        echo __('There are currently no call records to show.');

    } ?>
    </table>
    <br/><br/>
    <h1><?php echo 'Payment History'; ?> </h1>
    <table width="100%" cellspacing="0" cellpadding="2" class="tblAlign" border='0'>
        <tr class="headings">
            <th class="title"><?php echo __('Date &amp; time') ?></th>
            <th class="title" width="40%"><?php echo __('Description') ?></th>
            <th class="title"><?php echo __('Amount') ?></th>
        </tr>
        <?php
        if(count($paymentHistory)>0){
        foreach ($paymentHistory->xdr_list as $xdr) {
        ?>
        <tr>
            <td><?php echo date("Y-m-d H:i:s", strtotime($xdr->bill_time)); ?></td>
            <td><?php echo $xdr->CLD; ?></td>
            <td><?php echo BaseUtil::format_number($xdr->charged_amount*-1); ?></td>
        </tr>
        <?php } }else {

            echo __('There are currently no call records to show.');

        } ?>
    </table>
    <br/><br/>

    <h1><?php echo __('Call History'); ?></h1>
    <table width="100%" cellspacing="0" cellpadding="2" class="tblAlign" border='0'>


        <tr class="headings">
            <th width="20%"   align="left"><?php echo __('Date & Time') ?></th>

            <th  width="20%"  align="left"><?php echo __('Phone Number') ?></th>
            <th width="10%"   align="left"><?php echo __('Duration') ?></th>
            <th  width="10%"  align="left"><?php echo __('VAT') ?></th>
            <th width="20%"   align="left"><?php echo __('Cost') ?></th>
            <th  width="20%"   align="left"><?php echo __('Samtalstyp') ?></th>
        </tr>
        <?php
        $callRecords = 0;

        $amount_total = 0;

        foreach ($callHistory->xdr_list as $xdr) {
        ?>


            <tr>
                <td><?php echo $xdr->connect_time; ?></td>
                <td><?php echo $xdr->CLD; ?></td>
                <td><?php  echo  date('i:s',$xdr->charged_quantity); ?></td>
                <td><?php echo BaseUtil::format_number($xdr->charged_amount / 4); ?></td>
                <td><?php echo BaseUtil::format_number($xdr->charged_amount);
            $amount_total+= BaseUtil::format_number($xdr->charged_amount); ?>&nbsp;<?php echo sfConfig::get('app_currency_code')?></td>
            <td><?php
                $typecall = substr($xdr->account_id, 0, 1);
                if ($typecall == 'a') {
                    echo "Int.";
                }
                if ($typecall == '4') {
                    echo "R";
                }
                if ($typecall == 'c') {
                      $cbtypecall = substr($xdr->account_id, 2);
                    if ($xdr->CLD ==$cbtypecall) {
                        echo "Cb M";
                    } else {
                        echo "Cb S";
                    }
                } ?>
            </td>
        </tr>

        <?php
                $callRecords = 1;
            }
        ?>        <?php if ($callRecords == 0) {
 ?>
                <tr>
                    <td colspan="6"><p><?php echo __('There are currently no call records to show.') ?></p></td>
                </tr>
<?php } else { ?>
                <tr>
                    <td colspan="4" align="right"><strong><?php echo __('Subtotal') ?></strong></td>

                    <td><?php echo BaseUtil::format_number($amount_total) ?>&nbsp;<?php echo sfConfig::get('app_currency_code')?></td>
                    <td>&nbsp;</td>
                </tr>
<?php } ?>

            <tr><td colspan="6" align="left"><?php echo __('Call type detail') ?> <br/> <?php echo __('Int. = International calls') ?><br/>
                <?php echo __('Cb M = Callback mottaga')  ?><br/>
                <?php echo __('Cb S = Callback samtal')  ?><br/>
<?php echo __('R = resenummer samtal')    ?><br/>
            </td></tr>
    </table></div>