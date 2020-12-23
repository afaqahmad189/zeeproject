<?php
session_start();
error_reporting(0);
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>




<meta name="viewport" content="width=device-width, initial-scale=1">



   
    

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

    <script src="js/jquery.min.js" integrity="" crossorigin="anonymous"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel = "stylesheet" type="text/css" href = "/zeeproject/css/stylesheet.css"/>



<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--datatable plugin-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src=" https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src=" https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src=" https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>













<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>-->
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
<!--    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>-->
<!---->




<style>
	

.dropdown:hover .dropdown-content{
  display: block!important;
}

.navbar-dark .navbar-nav .nav-link {
    font-weight: 600;
    color: white;
    margin: 14px!important;
}

@media only screen and (max-width: 992px){
.navbar-toggler{

  float: right;
}

}

/* Hide scrollbar for Chrome, Safari and Opera */
.topdrop1::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.topdrop1 {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}



.toast{
    background: #ac6ae0;
    color: white;
    border-radius: 6px;
}
.toast>label{
    padding: 4px;
    margin-top: 3px;
}

.headrow{

    margin-bottom: 50px;
}
.dataTables_info{
    color: white !important;
}
.dataTables_length>label>select{
    color: white !important;
}
    .dataTables_filter>label>input{
        color: white !important;
    }

    #datatable_filter>label>input{
        color: black !important;
    }

</style>




	<title></title>
</head>
<body>

<!--- HEADER START --->




<!--- topbar starting --->


<div  class="row topbar1">

  <div class="col-6 col-md-3 align-self-center topbarcol">
    <center>
   <a href="/zeeproject/pos"><button class="btn topposbtn">POS</button></a>
 </center>

  </div>

  <div class="col-6 col-md-3 align-self-center topbarcol">
    <center>
   <h6 style="color: white"> 12: 26 AM / 12 Sept 2020 </h6>
    </center>
  </div>

  <div class="col-6 col-md-3 align-self-center topbarcol">
    
    <center>
    <img class="logo" width="60px" src="/zeeproject/media/images/logo.jpg" alt="BUZZTEK">
    </center>

  </div>

  <!--- pos button comment 

  <div class="col-6 col-md-3 align-self-center topbarcol">
    <center>
   <a href="/zeeproject/pos"><button class="btn topposbtn">POS</button></a>
 </center>

  </div>  --->

  <div class="col-6 col-md-3 align-self-center topbarcol">
    
    <center>

<!--- topbar profile section --->


    <li class="nav-item ">
        <a style="color: white;   margin-top: -25px; width: fit-content; " class=" " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Zeeshan Ali <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </a>
        <div style="margin-left: -40px; overflow: overlay; padding:initial;" class="dropdown-menu topdrop1" aria-labelledby="navbarDropdown">
         <center> <a style="background-color: red; color: white; margin-top: -7px; width: 100%; " class="dropdown-item" href="#">Logout</a></center>
         
          <div class="dropdown-divider"></div>
          <center><b><p>Latest Notifications</p></b></center>
          <div class="dropdown-divider"></div>
          <center><b><p><a href="alert_stock.php">Stock Alert</a></p></b></center>
          <center> <table>
          <thead>
          <th>Name</th>
          <th>Stock</th>
          </thead>
          <tbody>
						<?php
            $sql = "select * from add_product where alert_stock > remiaing_qty limit 5";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
              while ($data=mysqli_fetch_assoc($row)){
                $name=$data['name'];
                $remiaing_qty=$data['remiaing_qty'];
                echo '<tr><td>'.$name.'</td><td>'.$remiaing_qty.'</td></tr>';

              }

            }
            else{
              echo"No Alerts";
            }
            
						?>
            </tbody>
						</table></center>
         
          
        </div>
      </li>

<!---
    <h5 style="color: white"> ZeeShan Ali <i class="fa fa-arrow-down" aria-hidden="true"></i>
 </h5>  --->

 </center>

  </div>


</div>  



<!--- topbar ending --->


    <div class="navbar navbar-expand-lg navbar-dark ">
        <div class="container"><span class="text-white d-md-none">POS</span><button class="btn btn-link navbar-toggler" data-toggle="collapse" data-target="#main-nav" type="button"><span class="navbar-toggler-icon"></span></button>
            <div id="main-nav" class="navbar-collapse collapse">
                <ul class="navbar-nav nav-fill w-100">
                    

                  <!---

                    <li class="nav-item"><a class="nav-link" href="/zeeproject/index.php"><i style="margin-right: 5px" class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/zeeproject/inventory.php" ><i style="margin-right: 5px" class="fas fa-dolly-flatbed"></i> Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i style="margin-right: 5px" class="far fa-file-alt"></i> Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i style="margin-right: 5px" class="fas fa-shopping-cart"></i> Sales</a></li>


                    <li class="nav-item"><a class="nav-link" href="#"><i style="margin-right: 5px" class="far fa-gem"></i> CRM</a></li>
              




                   


                    <li class="nav-item"><a class="nav-link" href="#"><i style="margin-right: 5px" class="fas fa-award"></i> HRM</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i style="margin-right: 5px" class="fas fa-clipboard-list"></i> To do List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i style="margin-right: 5px" class="fas fa-truck-loading"></i> Pickup Orders</a></li>

  --->

                    <!--- nav 2 --->



                     <!--- dropdown 1 --->


                     <li>
                      
                    <div  class="dropdown1">
                      <a href="/zeeproject/index.php">
                      <button style="background-color: #ffffff00; color: white" class="btn  nav-link"  type="button">

                        <i style="margin-right: 5px" class="fas fa-tachometer-alt"></i> Dashboard </button></a></div> 


                    </li>

                    <li>


                    <div  class="dropdown"><button style="background-color: #ffffff00; color: white" class="btn dropdown-toggle  nav-link" data-toggle="dropdown" type="button"><i style="margin-right: 5px" class="fas fa-dolly-flatbed"></i> Inventory </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/zeeproject/inventory/inventory.php">Products List</a>

                        <a class="dropdown-item" href="/zeeproject/inventory/add_product.php">Add New Product</a>

                        <a class="dropdown-item" href="/zeeproject/inventory/generate_barcode.php">Generate Barcode</a>

                        </div>

                    </div>
                    
                    </li>



                    <li>

                    <div  class="dropdown"><button style="background-color: #ffffff00; color: white" class="btn dropdown-toggle  nav-link" data-toggle="dropdown" type="button"><i style="margin-right: 5px" class="far fa-file-alt"></i> Reports </button>
                      <div class="dropdown-menu">

                        <a class="dropdown-item" href="/zeeproject/report/top.php">Top</a>

                        <a class="dropdown-item" href="/zeeproject/report">Overall</a>


                        <a class="dropdown-item" href="/zeeproject/report/products/products_reports.php">Products Report</a>
                        
                        <a class="dropdown-item" href="/zeeproject/report/customers/customers_report.php">Customers Report</a>
                        
                        <a class="dropdown-item" href="/zeeproject/report/sellers/sellers_report.php">Sellers Report</a></div>
                    
                    </div>

                    </li>


                    <li>

                    <div  class="dropdown">

                      <a href="/zeeproject/sales">
                      <button style="background-color: #ffffff00; color: white" class="btn  nav-link"  type="button"><i style="margin-right: 5px" class="fas fa-shopping-cart"></i> Sales </button> </a>


                    </div>
                    
                    </li>



                     <li>

                    <div  class="dropdown"><button style="background-color: #ffffff00; color: white" class="btn dropdown-toggle  nav-link" data-toggle="dropdown" type="button"><i style="margin-right: 5px" class="far fa-gem"></i> CRM </button>
                      <div style="width: max-content" class="dropdown-menu">

                       


                        <div class="row">
                          
                          <div class="col-md-6">
                            
                             <!--- seller part --->

                        <a class="dropdown-item" href="/zeeproject/crm/sellers/sellers_list.php">Sellers</a>
                        <a class="dropdown-item" href="/zeeproject/crm/sellers/insert_seller.php">Insert New Seller</a>
                        <a class="dropdown-item" href="/zeeproject/crm/sellers/khata_list.php">Sellers Khata</a>
                        <a class="dropdown-item" href="/zeeproject/report/sellers/seller_notifications.php">Sellers Notifications</a>


                        <!--- seller part ending --->

                          </div>


                          <div class="col-md-6">
                            
                             <!--- customer part --->

                        <a class="dropdown-item" href="/zeeproject/crm/customers/customers_list.php">Customers</a>
                        <a class="dropdown-item" href="/zeeproject/crm/customers/insert_customer.php">Insert New Customer</a>
                        <a class="dropdown-item" href="/zeeproject/crm/customers/khata_list.php">Customers Khata</a>
                        <a class="dropdown-item" href="/zeeproject/report/customers/buyer_notifications.php">Buyers Notifications</a>


                        <!--- customer part ending --->

                          </div>


                        </div><!--- seller n customer menu row ending--->






                      </div><!---ending dropdown-menu--->
                        
                    
                    </div>

                    </li>



                     <li>

                    <div  class="dropdown"><button style="background-color: #ffffff00; color: white" class="btn dropdown-toggle  nav-link" data-toggle="dropdown" type="button"><i style="margin-right: 5px" class="fas fa-award"></i> HRM </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/zeeproject/hrm/employee_list.php">Employees List</a>
                        <a class="dropdown-item" href="/zeeproject/hrm/insert_employee.php">Add Employee</a>
                        
                    
                    </div>

                    </li>


                    <li>

                    <div  class="dropdown"><button style="background-color: #ffffff00; color: white" class="btn dropdown-toggle  nav-link" data-toggle="dropdown" type="button"><i style="margin-right: 5px" class="fas fa-clipboard-list"></i> To Do </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/zeeproject/todo/add_todo.php">Add Task</a>
                        <a class="dropdown-item" href="/zeeproject/todo/all_tasks.php">Task List</a>
                        
                    
                    </div>

                    </li>



                    


                    <li>

                    <div  class="dropdown1"><a href="/zeeproject/pickup"> <button style="background-color: #ffffff00; color: white" class="btn  nav-link"  type="button"><i style="margin-right: 5px" class="fas fa-truck-loading"></i> Pick Up Orders </button></a>
                      
                    </div>

                    </li>


                   

                    <!--- dropdown 1 ending --->



                    <!--- nav 2 ending --->



                </ul>
            </div>
        </div>
    </div>
    <br>




    <!--- second nav --->


   


    <!--- ending second nav --->




    <div class="spacerbyhasan"></div>

<!--    <script src="assets/bootstrap/js/bootstrap.min.js"></script>-->
<!--    <script src="js/jquery.min.js"></script>-->
<!--    <script src="//code.jquery.com/jquery.min.js"></script>-->

</body>

</html>

<!--- HEADER END --->


<!--<script src="js/jquery.min.js"></script>-->





