<?php
use_helper('I18N');
use_helper('Number');
?>
<style>
	p {
		margin: 8px auto;
	}
	
	table.receipt {
		width: 600px;
		border: 2px solid #ccc;
	}
	
	table.receipt td, table.receipt th {
		padding:5px;
	}
	
	table.receipt th {
		text-align: left;
	}
	
	table.receipt .payer_details {
		padding: 10px 0;
	}
	
	table.receipt .receipt_header, table.receipt .order_summary_header {
		font-weight: bold;
		text-transform: uppercase;
	}
	
	table.receipt .footer
	{
		font-weight: bold;
	}
        .align{
                padding-right:80px !important;
                text-align:right;
        }
	
	
</style>

<?php
$wrap_content  = isset($wrap)?$wrap:false;

//wrap_content also tells  wheather its a refill or 
//a product order. we wrap the receipt with extra
// text only if its a product order.

 ?>
 
<?php if($wrap_content): ?>
	<p><?php echo __('Dear Agent') ?></p>
	
	<p>
	<?php echo 'Thank you for Payment'; ?>
	</p>
	
	
	<?php echo __('Below is the receipt of the order indicated.') ?>
	</p>
	<br />
<?php endif; ?>
<table class="receipt" cellspacing="0" width="520px">
<tr bgcolor="#CCCCCC" class="receipt_header"> 
    <td colspan="4">Zapna ApS 
    </td>
  </tr>
  <tr>
  <td colspan="4" class="payer_summary">
	Zapna ApS<br>
        Softgarden, Postboks 5093 Majorstua <br>
        0301 Oslo

	<br>  </td>
  </tr>
  <tr bgcolor="#CCCCCC" class="receipt_header"> 
    <th colspan="3"><?php echo __('Order Receipt') ?></th>
    <th><?php echo __('Order No.') ?> <?php echo $order; ?></th>
  </tr>
  <tr><td>
    <?php if($agent_name!=''){ echo __('Agent Name') ?>:  <?php echo $agent_name; } ?>
    </td>
  </tr>
  <tr class="order_summary_header" bgcolor="#CCCCCC"> 
    <td><?php echo __('Date') ?></td>
    <td><?php echo __('Description') ?></td>
    <td><?php echo __('Quantity') ?></td>
    <td style="padding-right:80px; text-align:right"><?php echo __('Amount') ?>(<?php echo sfConfig::get('app_currency_code')?>)</td>
  </tr>
  <tr> 
    <td><?php echo $createddate ?></td>
    <td><?php 
    if($description){
                $c = new Criteria();
                $c->add(TransactionDescriptionPeer::ID,$description);
                $transaction_desc = TransactionDescriptionPeer::doSelectOne($c);
                echo $transaction_desc->getTitle();
            }
    ?></td>
    <td>1</td>
    <td style="padding-right:80px; text-align:right"><?php echo BaseUtil::format_number($subtotal=$transaction) //($order->getProduct()->getPrice() - $order->getProduct()->getPrice()*.2) * $order->getQuantity()) ?>&nbsp;<?php echo sfConfig::get('app_currency_code')?></td>
  </tr>
  <tr>
  	<td colspan="4" style="border-bottom: 2px solid #c0c0c0;">&nbsp;</td>
  </tr>
  <tr class="footer"> 
    <td>&nbsp;</td>
    <td><?php echo __('Subtotal') ?></td>
    <td>&nbsp;</td>
    <td style="padding-right:80px; text-align:right"><?php echo BaseUtil::format_number($subtotal) ?>&nbsp;<?php echo sfConfig::get('app_currency_code')?></td>
  </tr>
  <tr class="footer"> 
    <td>&nbsp;</td>
    <td><?php echo __('VAT') ?> (<?php echo $vat==0?'0%':'25%' ?>)</td>
    <td>&nbsp;</td>
    <td style="padding-right:80px; text-align:right"><?php echo BaseUtil::format_number($vat) ?>&nbsp;<?php echo sfConfig::get('app_currency_code')?></td>
  </tr>
  <tr class="footer">
    <td>&nbsp;</td>
    <td><?php echo __('Total') ?></td>
    <td>&nbsp;</td>
    <td style="padding-right:80px; text-align:right"><?php echo BaseUtil::format_number($subtotal) ?>&nbsp;<?php echo sfConfig::get('app_currency_code')?></td>
  </tr>
</table>


<p>
	<?php echo __('If you have any questions please feel free to contact our customer support center at '); ?>
	<a href="mailto:support@zapna.no">support@zapna.no</a>
</p>

<p><?php echo __('Cheers') ?></p>

<p>
<?php echo __('Support') ?><br />
Zapna ApS 
</p>