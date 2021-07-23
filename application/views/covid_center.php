<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
}
thead {
  background: #395870;
  color: #fff;
}
th:first-child {
  text-align: left;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
.book-title {
  color: #395870;
  display: block;
}
.item-stock,
.item-qty {
  text-align: center;
}
.item-price {
  text-align: right;
}
.item-multiple {
  display: block;
}
tfoot {
  text-align: right;
}
tfoot tr:last-child {
  background: #f0f0f2;
}
table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
}
thead {
  background: #395870;
  color: #fff;
}
th:first-child {
  text-align: left;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
.book-title {
  color: #395870;
  display: block;
}
.item-stock,
.item-qty {
  text-align: center;
}
.item-price {
  text-align: right;
}
.item-multiple {
  display: block;
}
tfoot {
  text-align: right;
}
tfoot tr:last-child {
  background: #f0f0f2;
}

	</style>
</head>
<body>

<div id="container">
	<h1>Covid Center Available On PINCODE:<?php echo $data[0]['pincode'] ;?></h1>

	<div id="body">
		<table>
  <thead>
    <tr>
      <th scope="col">Center Name</th>
      <th scope="col">Address</th>
      <th scope="col">STATE</th>
      <th scope="col">District</th>
      <th scope="col">Paid/Free</th>


    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $key => $value) {?>
  	
  
    <tr>
      <td>
        <strong class="book-title"><a href="#!" data-target="#verify<?php echo $key; ?>" data-toggle="modal"><?php echo $value['name'] ;?></a></strong>
        <div id="verify<?php echo $key; ?>" class="modal fade" role="dialog">
								<div class="modal-dialog modal-lg">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title"><?php echo $value['name'] ;?></h5>
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
										</div>
										<div class="modal-body">
											<form method="POST" name="gpsaHospitalfrm" id="gpsaHospitalfrm"
												action="{$PROJECT_PATH}/home/smsAdmin" enctype="multipart/form-data">
												<div class="row">
													<table>
													  <thead>
													    <tr>
													      <th scope="col">Vaccine</th>
													      <th scope="col">Date</th>
													      <th scope="col">Min Age</th>
													      <th scope="col">Available Dose 1</th>
													      <th scope="col">Available Dose 2</th>
													      <th scope="col">Slots</th>


													    </tr>
													  </thead>
													  <tbody>
													  	<?php foreach ($value['sessions'] as $key1 => $value1) {?>

													  	<tr>
													  	
													  	<td class="item-stock"><?php echo $value1['vaccine'] ;?></td>
													  	<td class="item-stock"><?php echo $value1['date'] ;?></td>
                                                       <td class="item-qty"><?php echo $value1['min_age_limit'] ;?></td>
                                                      <td class="item-qty"><?php echo $value1['available_capacity_dose1'] ;?></td>
                                                      <td class="item-price"><?php echo $value1['available_capacity_dose2'] ;?></td>
                                                      <td class="item-price">
                                                      	<?php foreach ($value1['slots'] as $key2 => $value2) {

                                                            echo $value2."<br>";
                                                        }

                                                      		?>
                                                      		
                                                     
                                                      	

                                                      </td>
                                                      </tr>
                                                  <?php }?>
													  </tbody>
													</table>
													
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
      </td>
      <td class="item-stock"><?php echo $value['address'] ;?></td>
      <td class="item-qty"><?php echo $value['state_name'] ;?></td>
      <td class="item-qty"><?php echo $value['district_name'] ;?></td>
      <td class="item-price"><?php echo $value['fee_type'] ;?></td>
    </tr>
<?php }?>
    
  </tbody>
  </table>

		
	</div>

	
</div>

</body>
</html>