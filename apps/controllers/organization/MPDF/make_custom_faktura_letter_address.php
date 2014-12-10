<?php 

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
    
	<div id="content">
		
		<div id="invoice_body">
        <br/><br/>
		
<table style="width:100%; height:35mm;">
<tr>
    <td valign="top" style="width:50%;text-align:left; padding-left:20px;">		
         <b>From :</b><br />
        '.$data['org_name'].'<br/>
         '.$data['org_primary_address'].
                '<br /> '.$data['org_city'].'<br /> '.$data['org_zip'].' &nbsp; '.$data['org_state']
                .' <br /> '.$data['org_country'].' <br /> Tel &nbsp;'.$data['org_phone'].'
        <br />      
        
    </td>
        
    <td style="width:50%;text-align:left; padding-left:20px;">
        <b>To :</b><br />
        '.$data_faktura['fak_reference_name'].'<br/>
         '.$data_faktura['primary_address'].
                '<br /> '.$data_faktura['city'].'<br /> '.$data_faktura['zip'].' &nbsp; '.$data_faktura['state']
                .' <br /> '.$data_faktura['country'].' <br /> Tel &nbsp;'.$data_faktura['phone'].'
        <br />        
        
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



$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 

//$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

$mpdf->WriteHTML($html);
	    
$mpdf->Output('custom_invoice/custom_invoice_address/address_'.$data_faktura['org_name'].'_'.$data_faktura['org_number'].'_'.$custom_faktura_id.'.pdf','F');

$content = $mpdf->Output('', 'S');
$content = chunk_split(base64_encode($content));

?>
