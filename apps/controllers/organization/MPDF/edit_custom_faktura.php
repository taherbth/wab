<?php 
if($org_details){
    $org_name = $org_details[0]->org_name;
    $org_primary_address = $org_details[0]->org_primary_address;
    $org_zip = $org_details[0]->org_zip;
    $org_city = $org_details[0]->org_city;
    $org_org_country = $org_details[0]->org_country;
    $org_state = $org_details[0]->org_state;
    $org_phone = $org_details[0]->org_phone;
    $org_bank_acc_type = $org_details[0]->org_bank_acc_type;
    $org_bank_acc_no = $org_details[0]->org_bank_acc_no;
}

$html ='<!DOCTYPE html>
<html>
<head>
	<title>Print Invoice</title>
	<style>
		*
		{
			margin:0;
			padding:0;
			font-family:Arial;
			font-size:10pt;
			color:#000;
		}
		body
		{
			width:100%;
			font-family:Arial;
			font-size:10pt;
			margin:0;
			padding:0;
		}
		
		p
		{
			margin:0;
			padding:0;
		}
		
		#wrapper
		{
			width:180mm;
			margin:0 15mm;
		}
		
		.page
		{
			height:297mm;
			width:210mm;
			page-break-after:always;
		}

		table
		{
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			border-spacing:0;
			border-collapse: collapse; 
			
		}
		
		table td 
		{
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding: 2mm;
		}
		
		table.heading
		{
			height:50mm;
		}
		
		h1.heading
		{
			font-size:14pt;
			color:#000;
			font-weight:normal;
		}
		
		h2.heading
		{
			font-size:9pt;
			color:#000;
			font-weight:normal;
		}
		
		hr
		{
			color:#ccc;
			background:#ccc;
		}
		
		#invoice_body
		{
			height: 90mm;
		}
		
		#invoice_body , #invoice_total
		{	
			width:100%;
		}
		#invoice_body table , #invoice_total table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
	
			border-spacing:0;
			border-collapse: collapse; 
			
			margin-top:5mm;
		}
		
		#invoice_body table td , #invoice_total table td
		{
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding:2mm 0;
		}
		
		#invoice_body table td.mono  , #invoice_total table td.mono
		{
			font-family:monospace;
			text-align:right;
			padding-right:3mm;
			font-size:10pt;
		}
		
		#footer
		{	
			width:180mm;
			margin:0 15mm;
			padding-bottom:3mm;
		}
		#footer table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			background:#eee;
			
			border-spacing:0;
			border-collapse: collapse; 
		}
		#footer table td
		{
			width:25%;
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
    }
    
    
    
    .logo{
    float:left;
    color: black;
    font-size: 24px;
    font-style: italic;
    font-weight: normal;
    margin-right: 200px;
}


.faktura_no {
    /*-moz-border-radius: 12px 12px 12px 12px*/;
     border-radius: 12px 12px 12px 12px;
     width: 550px;
     float:left;
     border: black 2px solid;
     background-color:#F2F2F2;
}

.faktura_title{
    margin: 20px;
    float:left;
    color: black;
    font-size: 30px;
    font-weight: bold;
}

.faktura_no_value{
    margin: 20px;
    float:right;
    color: black;
    font-size: 20px;
    font-weight: bold;
}

	</style>
</head>
<body>
<div id="wrapper">
    
    <p style="text-align:center; font-weight:bold; padding-top:5mm;">INVOICE</p>
    <br />
    <table class="heading" style="width:100%;">
    	<tr>
    		<td style="width:80mm;">
    			<h1 class="heading">'.$org_name.'</h1>
				<h2 class="heading">'.$org_primary_address.'<br />
					'.$org_zip.'&nbsp;'.$org_city.'<br />
					<br />
					Phone : '.$org_phone.' <br />
                    '.$org_bank_acc_type.'&nbsp;'.$org_bank_acc_no.'
				</h2>
			</td>
			<td rowspan="2" valign="top" align="right" style="padding:3mm;">
				<table>
					<tr><td>Faktura Nummer  : </td><td>'.$data_faktura['fak_invoice_no'].'</td></tr>
					<tr><td>Fakturadatum : </td><td>'.date('Y-m-d',$data_faktura['fak_active_date']).'</td></tr>
					<tr><td>Förfallodatum : </td><td>'.date('Y-m-d',$data_faktura['fak_expire_date']).'</td></tr>
					<tr><td>Currency : </td><td>'.$data_faktura['fak_currency'].'</td></tr>
				</table>
			</td>
		</tr>
    	<tr>
    		<td>
    			<b>Buyer</b> :<br />
    			<b>Referens</b> : '.$data_faktura['fak_reference_name'].'<br />
    			<b>Dröjsmålsränta</b> : Enligt lag<br />
    			<b>Address</b> : '.$data_faktura['org_name'].' <br /> '.$data_faktura['bill_primary_address'].
                '<br /> '.$data_faktura['bill_city'].' <br /> Tel &nbsp;'.$data_faktura['bill_phone']
                .'<br /> '.$data_faktura['bill_zip'].' &nbsp; '.$data_faktura['bill_state']
                .' <br /> '.$data_faktura['bill_country'].'
                
    		</td>
    	</tr>
        </table>
		
		
	<div id="content">
		
		<div id="invoice_body">
			<table>
			<tr style="background:#eee;">
				<td style="width:8%;"><b>Sl. No.</b></td>
				<td><b>Product</b></td>
				<td style="width:15%;"><b>Timmer</b></td>
				<td style="width:15%;"><b>A-Pris</b></td>
				<td style="width:15%;"><b>Pris exkl. moms</b></td>
				<td style="width:15%;"><b>Momssats</b></td>
			</tr>';
            
            $html2 = "";
            $total_price = 0; 
            for($index=0;$index<sizeof($product_name);$index++){
                $si_no = $index+1;
                $all_product_price_excl_vat = $price_ex_vat[$index] * $no_of_products[$index];
                $vat_price = ($vat_rate[$index]/100) * $all_product_price_excl_vat;
                $all_product_price_incl_vat = $all_product_price_excl_vat + $vat_price;
                $total_price += $all_product_price_incl_vat;
            
			$html2 .= '<tr>
			    <td style="width:8%;">'.$si_no.'</td>
			    <td style="text-align:left; padding-left:10px;">'.$product_name[$index].'</td>
			    <td class="mono" style="width:15%;">'.$no_of_products[$index].'</td>
                <td style="width:15%;" class="mono">'.$price_ex_vat[$index].'</td>
                <td style="width:15%;" class="mono">'.$all_product_price_excl_vat.'</td>
			    <td style="width:15%;" class="mono">'.$vat_rate[$index].'%</td>
			</tr>';		
        }        
            
            $si_no +=1;                        
            if($data_faktura['custom_invoice_sent_by_letter_cost'] > 0){    
                $custom_invoice_sent_by_letter_cost_vat = (25/100)*$data_faktura['custom_invoice_sent_by_letter_cost']; 
                $custom_invoice_sent_by_letter_cost_incl_vat = $data_faktura['custom_invoice_sent_by_letter_cost'] +$custom_invoice_sent_by_letter_cost_vat;
                $total_price += $custom_invoice_sent_by_letter_cost_incl_vat;
                    $html2 .= '<tr>
                        <td style="width:8%;">'.$si_no.'</td>
                        <td style="text-align:left; padding-left:10px;">Invoice Cost</td>
                        <td class="mono" style="width:15%;">'.$data_faktura['no_of_custom_invoice_sent_by_letter'].'</td>
                        <td style="width:15%;" class="mono">'.$data_faktura['fak_invoice_cost_applied'].'</td>
                        <td style="width:15%;" class="mono">'.$data_faktura['custom_invoice_sent_by_letter_cost'].'</td>
                        <td style="width:15%;" class="mono">25%</td>
                    </tr>';
            }
            if($data_faktura['admin_cost'] > 0){        
                 $si_no = $si_no+1;
                $admin_cost_vat = (25/100) * $data_faktura['admin_cost'];
                $admin_cost_inclu_vat =  $data_faktura['admin_cost'] + $admin_cost_vat;                
                $total_price += $admin_cost_inclu_vat;
                
                 $html2 .= '<tr>
                    <td style="width:8%;">'.$si_no.'</td>
                    <td style="text-align:left; padding-left:10px;">Admin Cost</td>
                    <td class="mono" style="width:15%;">1</td>
                    <td style="width:15%;" class="mono">'.$data_faktura['admin_cost'].'</td>
                    <td style="width:15%;" class="mono">'.$data_faktura['admin_cost'].'</td>
                    <td style="width:15%;" class="mono">25%</td>
                </tr>'; 
            }
        
            $total_price_rounded = round($total_price);
            $rounded_value = $total_price_rounded - $total_price;
                
            $html .= $html2. '<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Att betala :</td>
				<td class="mono">'.round($total_price).'</td>
			</tr>
		</table>
        
        <table>
						
			<tr>
			    <td style="width:8%;" colspan="4"><b>Momsspecifikation</b></td>
		</tr>		
            
            <tr>
			    <td style="width:8%;"><b>Moms</b></td>
			    <td style="width:8%;"><b>Pris exkl. moms</b></td>
			    <td style="width:8%;"><b>Moms i kr</b></td>
			    <td style="width:8%;"><b>Summa</b></td>
			    
			</tr>'; 		
				
            $html3 = "";            
            for($index=0;$index<sizeof($product_name);$index++){
                $all_product_price_excl_vat = $price_ex_vat[$index] * $no_of_products[$index];
                $vat_price = ($vat_rate[$index]/100) * $all_product_price_excl_vat;
                $all_product_price_incl_vat = $all_product_price_excl_vat + $vat_price;              
            
			$html3 .= '<tr>
                <td style="width:8%;">'.$vat_rate[$index].'%</td>
			    <td style="width:8%;">'.$all_product_price_excl_vat.'</td>
			    <td style="width:8%;">'.$vat_price.'</td>
			    <td style="width:8%;">'.$all_product_price_incl_vat.'</td>
			</tr>'; 
    }
            if($data_faktura['custom_invoice_sent_by_letter_cost'] > 0){    
                $html3 .= '<tr>
                    <td style="width:8%;">25%</td>
                    <td style="width:8%;">'.$data_faktura['custom_invoice_sent_by_letter_cost'].'</td>
                    <td style="width:8%;">'.$custom_invoice_sent_by_letter_cost_vat.'</td>
                    <td style="width:8%;">'.$custom_invoice_sent_by_letter_cost_incl_vat.'</td>
                </tr>';
            }

            if($data_faktura['admin_cost'] > 0){    
                $html3 .= '<tr>
                    <td style="width:8%;">25%</td>
                    <td style="width:8%;">'.$data_faktura['admin_cost'].'</td>
                    <td style="width:8%;">'.$admin_cost_vat.'</td>
                    <td style="width:8%;">'.$admin_cost_inclu_vat.'</td>
                </tr>';
            }
            $html .= $html3.'</table>
        
		</div>
		<div id="invoice_total">
			Total Amount :
			<table>
				<tr>
					<td style="text-align:left; padding-left:10px;"></td>
					<td style="width:15%;">'.$data_faktura['fak_currency'].'</td>
					<td style="width:15%;" class="mono">'.$total_price_rounded.'</td>
					<td style="width:15%;" class="mono">'.$rounded_value.'(Öresav-rundning)</td>
                    

				</tr>
			</table>
		</div>
		<br />
		<hr />
		<br />
		
		<table style="width:100%; height:35mm;">
			<tr>
				<td style="width:65%;" valign="top">
					Payment Information :<br />
					Please make cheque payments payable to : <br />
					<b>'.$org_name.'</b>
					<br /><br />
					The Invoice is payable within '.$data_faktura['fak_terms_of_payment'].' days of issue.<br /><br />
				</td>
				<td>
				<div id="box">
					E &amp; O.E.<br />
					For '.$org_name.'<br /><br /><br /><br />
					Authorised Signatory
				</div>
				</td>
			</tr>
		</table>
	</div>
	
	<br />
	
	</div>
	
	<htmlpagefooter name="footer">
		<hr />
		<div id="footer">	
			<table>
				<tr><td>Software Solutions</td><td>Mobile Solutions</td><td>Web Solutions</td></tr>
			</table>
		</div>
	</htmlpagefooter>
	<sethtmlpagefooter name="footer" value="on" />
	
</body>
</html>';
///include("mpdf.php");

$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 

//$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

$mpdf->WriteHTML($html);
	    
$mpdf->Output('custom_invoice/custom_invoice_'.$data_faktura['org_name'].'_'.$data_faktura['org_number'].'_'.$custom_faktura_id.'.pdf','F');

$content = $mpdf->Output('', 'S');
$content = chunk_split(base64_encode($content));

?>
