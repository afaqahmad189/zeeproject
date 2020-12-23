<!DOCTYPE html>
<html>
<head>




	<title>Dashboard</title>



</head>
<body>

	<?php include 'header.php';?>






<div style="margin: 40px" class="container1">  
	

	<div class="row row1">
		
		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i  class="fas fa-money-bill"></i> Profit</h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today: </th>
    				<td> 60,000 </td>

    				</tr>

    				<tr>
    				<th> Yesterday: </th>
    				<td> 45,000 </td>

    				</tr>		


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/report/perday/profit_perday.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>




		</div> <!--- row 1 col 1 ending --->


		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-cart-arrow-down"></i> Sales</h3>
    				
    				

    				<table class="table">

					<?php

					
					
         $sql = "select DATE(created_at),SUM(total_bill) from sales where DATE(created_at)='".date('Y-m-d')."'";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($row){
          $data=mysqli_fetch_assoc($row);
                 $created_at=$data['SUM(total_bill)'];
				// $task_date=$data['task_date'];
				if($created_at==''){
					echo '<tr><td>Today Sale</td><td>0</td></tr>';
				}
				else{
					echo '<tr><td>Today Sale</td><td>'.$created_at.'</td></tr>';
				}
            //   }

            }
            else{
				echo '<tr><td>Today Sale</td><td>0</td></tr>';
			}
			
			$sql = "select DATE(created_at),SUM(total_bill) from sales where DATE(created_at)='".date('Y-m-d',strtotime("-1 days"))."'";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($row){
          $data=mysqli_fetch_assoc($row);
                 $created_at=$data['SUM(total_bill)'];
				// $task_date=$data['task_date'];
				if($created_at==''){
					echo '<tr><td>Yesterday Sale</td><td>0</td></tr>';
				}
				else{
                echo '<tr><td>Yesterday Sale</td><td>'.$created_at.'</td></tr>';
				}
            //   }

            }
            else{
				echo '<tr><td>Yesterday Sale</td><td>0</td></tr>';
            }
            
						?>


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/sales">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>


		</div> <!--- row 1 col 2 ending --->



		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-shopping-basket"></i> Expenses</h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today: </th>
    				<td> 35,000 </td>

    				</tr>

    				<tr>
    				<th> Yesterday: </th>
    				<td> 2000 </td>

    				</tr>		


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/report/perday/expenses_perday.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- row 1 col 3 ending --->


	</div><!--- row 1 ending --->











<!--- second section started --->



<div style="margin: auto; margin-bottom: 14px" class="row ">
	

	<div class="row innerrow">


		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card card2 text-center" >

				

					


				
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-exclamation-triangle"></i> Inventory Alert</h3>
    				
    				

    				<table class="table">

    				

    				<tr>

			
				<th>Product</th>
				<th>Quantity</th>
			
			</tr>

			<tr>
			<?php
            $sql = "select * from add_product where alert_stock > remiaing_qty limit 4";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
              while ($data=mysqli_fetch_assoc($row)){
                $name=$data['name'];
                $remiaing_qty=$data['remiaing_qty'];
                echo '<tr><td>'.$name.'</td><td>'.$remiaing_qty.'</td></tr>';

              }

            }
            else{
              echo"No Stock";
            }
            
						?>

			</tr>
				


    				


    				</table>	
    				
    				
  	
  				</div>

  					<a href="alert_stock.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- innerrow 1 col 1 ending --->



		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card card2 text-center" >
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-truck-loading"></i>  Pickup Orders</h3>
    				
    				

    				<table class="table">

    				<tr onclick="window.location='#';">
    				<th> 1.5 Coke </th>
    				<td> 3 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> Kurkuray </th>
    				<td> 18 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> Ketchup </th>
    				<td> 11 pc left </td>
    				

    				</tr>


    				<tr onclick="window.location='#';">
    				<th> Ketchup </th>
    				<td> 11 pc left </td>
    				

    				</tr>


    				<tr onclick="window.location='#';">
    				<th> coke 345 ml </th>
    				<td> 11 pc left </td>
    				

    				</tr>	
			


    				


    				</table>	
    				
    				
  	
  				</div>

  					<a href="#">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- innerrow 1 col 2 ending --->



		<div class="col-12 col-md-4 col-sm-12">
			

			<div  class="card card2 text-center" >
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-clipboard-list"></i> To do List</h3>
    				
    				

    				<table class="table">

    				<?php
            $sql = "select * from add_todo order by id desc limit 4";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
              while ($data=mysqli_fetch_assoc($row)){
                $task_name=$data['task_name'];
                $task_date=$data['task_date'];
                echo '<tr><td>'.$task_name.'</td><td>'.date("d-m-Y h:i:s A",$task_date).'</td></tr>';

              }

            }
            else{
              echo"No List";
            }
            
						?>
				


    				


    				</table>	
    				
    				
  	
  				</div>

  					<a href="todo/all_tasks.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- innerrow 1 col 3 ending --->




	</div><!--- first inner row ending --->



	<br>


	<!--- second inner row starting --->

	<div class="row innerrow">


		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card card2 text-center" >
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-cash-register"></i> Payables</h3>
    				
    				

    				<table class="table">

    				<tr onclick="window.location='#';">
    				<th> 1.5 Coke </th>
    				<td> 3 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> Kurkuray </th>
    				<td> 18 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> Ketchup </th>
    				<td> 11 pc left </td>
    				

    				</tr>


    				<tr onclick="window.location='#';">
    				<th> Ketchup </th>
    				<td> 11 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> coke 345 ml </th>
    				<td> 11 pc left </td>
    				

    				</tr>	


    				


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/report/sellers/seller_notifications.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- innerrow 1 col 1 ending --->



		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card card2 text-center" >
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-file-invoice"></i> Receiveables</h3>
    				
    				

    				<table class="table">

    				<tr onclick="window.location='#';">
    				<th> 1.5 Coke </th>
    				<td> 3 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> Kurkuray </th>
    				<td> 18 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> Ketchup </th>
    				<td> 11 pc left </td>
    				

    				</tr>


    				<tr onclick="window.location='#';">
    				<th> Ketchup </th>
    				<td> 11 pc left </td>
    				

    				</tr>

    				<tr onclick="window.location='https://www.google.com/';">
    				<th> 500 ml Coke </th>
    				<td> 3 pc left </td>
    				

    				</tr>				


    				


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/report/customers/buyer_notifications.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- innerrow 1 col 2 ending --->



		<div class="col-12 col-md-4 col-sm-12">
			

			<div class="card card2 text-center" >
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-users"></i> Employees</h3>
    				
    				

    				<table class="table">

    				
					<th>Employee Name</th>
					<th>Salary</th>
			
			</tr>

			<tr>
					<?php
					$sql = "select * from employee order by id desc limit 4 ";
					$row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
					if(mysqli_num_rows($row)>0){
					while ($data=mysqli_fetch_assoc($row)){
						$name=$data['name'];
						$salary=$data['salary'];
						echo '<tr><td>'.$name.'</td><td>'.$salary.'</td></tr>';

					}

					}
					else{
					echo"No Employees";
					}
            
						?>


    				


    				</table>	
    				
    				
  	
  				</div>

  					<a href="hrm/employee_list.php">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>



		</div> <!--- innerrow 1 col 3 ending --->




	</div><!--- second inner row ending --->	




</div><!--- second row ending --->




<!--- 3rd row starting --->



<div  class="row row3 rowbottom">
		
		<div class="col-12 col-md-3 col-sm-12">
			

			<div class="card card2 text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i  class="fas fa-money-bill"></i> Recent Return Orders</h3>
    				
    				

    				<table class="table">

    				<tr onclick="window.location='#';">
    				<th> User1 </th>
    				<td> <i class="fas fa-info-circle"></i> </td>

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> User1 </th>
    				<td> <i class="fas fa-info-circle"></i> </td>

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> User1 </th>
    				<td> <i class="fas fa-info-circle"></i> </td>

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> User1 </th>
    				<td> <i class="fas fa-info-circle"></i> </td>

    				</tr>

    				<tr onclick="window.location='#';">
    				<th> User1 </th>
    				<td> <i class="fas fa-info-circle"></i> </td>

    				</tr>


    				</table>	
    				
    				
  	
  				</div>

  					<a href="#">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>




		</div> <!--- row 3 col 1 ending --->


		<div class="col-12 col-md-3 col-sm-12">
			

			<div class="card card2 text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="fas fa-cart-arrow-down"></i> Recent Sales</h3>
    				
    				

    				<table class="table">

    				<th>Name</th>
					<th>Sale</th>
					<th></th>
			
			</tr>

			<tr>
			<?php
            $sql = "select * from sales order by id limit 5 ";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
              while ($data=mysqli_fetch_assoc($row)){
                $name=$data['cus_name'];
                $total_bill=$data['total_bill'];
                echo '<tr><td>'.$name.'</td><td>'.$total_bill.'</td><td> <i class="fas fa-info-circle"></i> </td></tr>';

              }

            }
            else{
              echo"No sale";
            }
            
						?>


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/sales">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>


		</div> <!--- row 3 col 2 ending --->




		<div class="col-12 col-md-3 col-sm-12">
			

			<div class="card card2 text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="far fa-thumbs-down"></i>  Low Sale Products</h3>
    				
    				

    				<table class="table">

				<th>Name</th>
				<th>Sale</th>
				<th></th>

					<?php
				$sql = "SELECT COUNT(product_id), product_name ,SUM(total_price)
				FROM sale_details
				GROUP BY product_name";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($row){
          $data=mysqli_fetch_assoc($row);
                $created_at=$data['count(product_id)'];
				$product_name=$data['product_name'];
				$sale=$data['SUM(total_price)'];
                echo '<tr><td>'.$product_name.'</td><td>'.$sale.'</td><td> <i class="fas fa-info-circle"></i></td></tr>';

            //   }

            }
            else{
				echo '<tr><td>Today Sale</td><td>0</td></tr>';
			}
            
						?>


    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/inventory/inventory.php?sortby=lowsale">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>


		</div> <!--- row 3 col 3 ending --->



		<div class="col-12 col-md-3 col-sm-12">
			

			<div class="card card2 text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"><i class="far fa-thumbs-up"></i>  High Sale Products</h3>
    				
    				

    				<table class="table">

    				<th>Name</th>
				<th>Sale</th>
				<th></th>

					<?php
				$sql = "SELECT COUNT(product_id), product_name ,SUM(total_price)
				FROM sale_details
				GROUP BY product_name order by COUNT(product_id) desc limit 1";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($row){
          $data=mysqli_fetch_assoc($row);
                $created_at=$data['count(product_id)'];
				$product_name=$data['product_name'];
				$sale=$data['SUM(total_price)'];
                echo '<tr><td>'.$product_name.'</td><td>'.$sale.'</td><td> <i class="fas fa-info-circle"></i></td></tr>';

            //   }

            }
            else{
				echo '<tr><td>Today Sale</td><td>0</td></tr>';
			}
            
						?>

    				</table>	
    				
    				
  	
  				</div>

  					<a href="/zeeproject/inventory/inventory.php?sortby=highsale">

  						<div class="card-footer text-muted bg-purple">
    					
    					<center>

    					<i style="font-size: 24px; color: white" class="fa fa-plus cardbtnicon"></i>

    					</center>

  						</div>

  				 	
  					</a>

			</div>


		</div> <!--- row 3 col 4 ending --->







		


	</div><!--- row 3 ending --->






<!--- 3rd row ending --->






<!--- 4th section row started --->

</div> <!------ container ending --->


<div style="margin: 40px">
    <div style="height: 50px" class="row my-3">
        <div class="col">
            <h4 style="color: white">Last Week Sale Graph</h4>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-12 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas height="100px" id="chLine"></canvas>
                </div>
            </div>
        </div>
        
    </div>
    
</div>


<!--- 4th section row ending --->






















<?php include 'footer.html';?>

</body>
</html>