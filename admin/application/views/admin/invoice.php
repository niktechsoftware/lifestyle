<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Fee Invoice</title>

	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/style.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/print.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>
	
	<style type="text/css">

	@media print
	{
			body * { visibility: hidden; }
			#printcontent * { visibility: visible; }
			#printcontent { position: absolute; top: 40px; left: 30px; }
	    }
	</style>
	
    <script>
        function convert_number(number)
        {
            if ((number < 0) || (number > 999999999))
            {
                return "Number is out of range";
            }
            var Gn = Math.floor(number / 10000000);  /* Crore */
            number -= Gn * 10000000;
            var kn = Math.floor(number / 100000);     /* lakhs */
            number -= kn * 100000;
            var Hn = Math.floor(number / 1000);      /* thousand */
            number -= Hn * 1000;
            var Dn = Math.floor(number / 100);       /* Tens (deca) */
            number = number % 100;               /* Ones */
            var tn= Math.floor(number / 10);
            var one=Math.floor(number % 10);
            var res = "";

            if (Gn>0){
                res += (convert_number(Gn) + " Crore");
            }
            if (kn>0){
                res += (((res=="") ? "" : " ") +
                    convert_number(kn) + " Lakhs");
            }
            if (Hn>0){
                res += (((res=="") ? "" : " ") +
                    convert_number(Hn) + " Thousand");
            }

            if (Dn){
                res += (((res=="") ? "" : " ") +
                    convert_number(Dn) + " hundred");
            }


            var ones = Array("", "One", "Two", "Three", "Four", "Five", "Six","Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen","Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen","Nineteen");
            var tens = Array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty","Seventy", "Eigthy", "Ninety");

            if (tn>0 || one>0)
            {
                if (!(res==""))
                {
                    res += " and ";
                }
                if (tn < 2)
                {
                    res += ones[tn * 10 + one];
                }
                else
                {

                    res += tens[tn];
                    if (one>0)
                    {
                        res += ("-" + ones[one]);
                    }
                }
            }

            if (res=="")
            {
                res = "zero";
            }
            return res;
        }

    </script>
</head>

<body>
	<div id="printcontent">
		<div id="page-wrap" style="border:1px solid #333;">

			<table style="width: 100%">
				<tr>
					<td width="10%" style="border: none;">
						<img src="<?php echo base_url();?>assets/images/nik.jpg" alt="" width="100" />
					</td>
					<td style="border: none;">
						<h1 align="center" style="text-transform:uppercase;">Satyadeo International School</h1>
				        <h3 align="center" style="font-variant:small-caps;">
							fadanpur borasiya, Ghazipur, Uttar Pradesh 233001
				        </h3>
				       
				        <h3 align="center" style="font-variant:small-caps;">
							Registration Form Slip
				        </h3>
				        
					</td>
				</tr>
			</table>
			
			 <?php  $this->db->where("invoice_no",$this->uri->segment(4));
        $rowb=$this->db->get("admission")->row();
        ?>
	        
			  
		<div style="clear:both"></div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
        	<div style="display:inline-block;">
        	
        	 <table style="width: 100%;border:none;">
                    <tr><td style="border:none;"><strong>To</strong></td></tr>
                    <tr>
                    	<td style="border:none;">
                    		<?php echo '<strong>Student Name. :</strong>'.strtoupper($rowb->name); ?>
                        </td>
                    </tr>
					 <tr>
                    	<td style="border:none;">
                    		<?php echo '<strong>father Name. :</strong>'.strtoupper($rowb->f_name); ?>
                        </td>
                    </tr>
                    <tr>
                    	<td style="border:none;">
                        	<?php
							
								echo '<strong>Address. :</strong>'.$rowb->address;
							?>
							
								
                        </td>
                    </tr>
                    <tr>
                    	<td style="border:none;">
                        	<?php
							
								echo '<strong>Mobile No. :</strong>'.$rowb->mobile_no;
							?>
							
								
                        </td>
                    </tr>
					 <tr>
                    	<td style="border:none;">
                        	<?php
							
								echo '<strong>Class. :</strong>'.$rowb->class;
							?>
							
								
                        </td>
                    </tr>
                     
            </table>
			</div>
            <div style="display:inline-block; float:right; border:none;">
            <table style="width: 100%; border:none;">
                <tr>
                    <td class="meta-head" colspan="2"><h3>Invoice History</h3></td>
                </tr>
                <tr>
                    <td class="meta-head">
                    	Reciept No.
                    </td>
                    <td><?php
							echo $rowb->invoice_no;
							?>
                            </td>
                </tr>
                <tr>
                    <td class="meta-head">
                    	<?php
							echo 'Reciever :';
							
							?>
                    </td>
                    <td>Administration</td>
                </tr>
                <tr>
                    <td class="meta-head">Date</td>
                    <td><?php echo $rowb->date; ?></td>
                </tr>
            </table>
            </div>
		
		</div>
		
		<table id="items" style="width: 100%;border:1px solid black;">
		
		  <tr>
		       <th width="5%">No.</th>
               <th width="15%">Reg. Form Detail</th>
                 <th width="12%">Fees</th>
		  </tr>
<?php  ?>		  
		  <tr class="item-row">
		  <td>1</td>
		  <td>Reg. Form<?php echo $rowb->class; ?></td>
		     <td><?php echo $rowb->f_fees; ?></td>
		  </tr>
   
		 
		
		</table>
		<div>
		
		</br>
		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid Amount in Words : </strong><script> document.write(convert_number(<?php echo $rowb->f_fees; ?>)); </script> Only /-<br>
		</br>
		</br>
		</br>
		</br>
		<table style="width: 100%;border:1px solid black; ">
			<tbody>
				<tr>
					<td style="border:1px solid black; padding-left: 30px;">
                        	<?php
							
							//	echo '<strong> </strong>'.strtoupper($rowb->firm_name);
							?>
							
							<br></br>
							<br></br>
							Issuing Signatory<br>
							Name:</br>
							Desiggnation:
                        </td>
					<td style="border:none;">
                        	<?php
							
								echo 'Satyadeo International school';
							?>
							
							<br></br>
							<br></br>
							Issuing Signatory<br>
							Name:</br>
							Desiggnation:
                        </td>
				</tr>
			</tbody>
		</table>
		</div>
	
        	
	
		</div>
	</div>

	<br/><br/>
	<div class="invoice-buttons">
    	<button class="btn btn-default margin-right" type="button" onclick="window.print();" >
        	<i class="fa fa-print padding-right-sm"></i> Print Reciept
        </button>
    </div>
</body>

</html>