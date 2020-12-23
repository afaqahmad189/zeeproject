<!DOCTYPE html>
<html ng-app="chromeTabsApp">
<head>


    <link rel="stylesheet" type="text/css" href="posstyle.css"/>


    <style>

        .h4, h4 {
            font-size: 20px !important;
        }

        .table > tbody > tr > td {
            vertical-align: middle;
        }

        img {

            cursor: pointer;
        }

        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 38px !important;
            user-select: none;
            -webkit-user-select: none;
            background-color: white;
        }


    </style>

    <title>Products Reports</title>
</head>
<body ng-controller="AppCtrl">

<?php include '../header.php'; ?>
<!---- my custom --->

<script>
    function PrintElem(elem)
    {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        // hide columns for print
        /*var myClasses = document.querySelectorAll('.hide-column'),
            i = 0,
            l = myClasses.length;

        for (i; i < l; i++) {
            myClasses[i].remove();
        }*/

        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write('</head><body >');
        //mywindow.document.write('<h1> Bill  </h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        document.getElementById('customer_name').value = "";
        document.getElementById('bill_date').value = "";
        document.getElementById('pay_amount').value = "";
        document.getElementById('total-cart').html = "";

        $("#cart-table td").remove();
        // location.reload();
        //mywindow.close();

        return true;
    }
</script>

<div style="margin-top: -15px" class="row">
    <div class="row" id="toast_cat" style="margin-bottom: 30pxpickuporderstop"></div>
    <div class="col-md-8">
        <br>
        <div style="    padding-left: 15px; padding-right: 15px; height: 50px; margin-top: -3%"
             class="input-group mb-3">

            <div class="input-group-prepend">

                <select style="height:50px !important;background-color: #ac6ae0!important; color: white; border-color: #ac6ae0!important"
                        class="form-control select2" id="get_product">
                    <option value="all">All Categories</option>
                    <?php
                    $sql = "select * from category";
                    $row = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    if (mysqli_num_rows($row) > 0) {
                        while ($data = mysqli_fetch_assoc($row)) {
                            $cat_id = $data['id'];
                            $catname = $data['cat_name'];
                            echo '<option value="' . $cat_id . '">' . $catname . '</option>';

                        }
                    }
                    ?>
                </select>

            </div>

            <input type="text" class="form-control" placeholder="Search Here By Product Name Or Code"
                   aria-label="Recipient's username" aria-describedby="basic-addon2" id="livesearch"
                   style="height: 38px">
        </div>
        <br>
        <div class="row" id="product"> <!--- row 1 --->
            <?php
            $sql = "select * from add_product ";
            $row = mysqli_query($conn, $sql);
            if (mysqli_num_rows($row) > 0) {
                while ($data = mysqli_fetch_assoc($row)) {
                    $p_id=$data['id'];
                    $p_pic = $data['main_pic'];
                    $p_name = $data['name'];
                    $sale_price = $data['sale_price'];
                    echo '  <div class="col-md-3">
                <div data-name="' . $p_name . '" data-price="' . $sale_price . '" data-id="'.$p_id.'" class="card add-to-cart poscards">';
                    if ($p_pic == 'products/') {
                        echo '<img class="card-img-top" src="../inventory/products/No-image-available.png" alt="Card image cap">';
                    } else {
                        echo '<img class="card-img-top" src="../inventory/' . $p_pic . '" alt="Card image cap">';
                    }
                    echo '<div class="card-block">
                        <h4 class="card-title">' . $p_name . '</h4>
                        <p class="card-text">Price: Rs ' . $sale_price . '</p>
                       <!-- <- <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to
                            cart</a> ---!>
                    </div>
                </div>
            </div>';
                }
            }
            ?>

        </div>
        <!--- row 1 ending --->


        <br>

        <nav style="padding: 15px" aria-label="...">
            <ul class="pagination pagination-lg">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>


    </div> <!--- ending first col --->


    <!--- second column --->

    <div style="margin-top: -15px; " class="col-md-4">

        <!--- bootstrap tabs --->

        <div>

            <button id="tab" class="btn cbutton tab-btn" style="background-color: white; border-color: white"
                    data-toggle="collapse" data-target="#demo">Page 1
            </button>

            <button id="tab2" class="btn cbutton tab-btn" style="background-color: white; border-color: white"
                    data-toggle="collapse" data-target="#demo2">Page 2
            </button>

            <button id="tab3" class="btn cbutton tab-btn" style="background-color: white; border-color: white"
                    data-toggle="collapse" data-target="#demo3">Page 3
            </button>

            <button id="tab4" class="btn cbutton tab-btn" style="background-color: white; border-color: white"
                    data-toggle="collapse" data-target="#demo4">Page 4
            </button>

            <button id="tab5" class="btn cbutton tab-btn" style="background-color: white; border-color: white"
                    data-toggle="collapse" data-target="#demo5">Page 5
            </button>

            <button id="tab6" class="btn cbutton tab-btn" style="background-color: white; border-color: white"
                    data-toggle="collapse" data-target="#demo6">Page 6
            </button>
        </div>

        <br><br>

        <div id="demo" class="collapse show"><!--- collapse 1 --->

            <!--- bootstrap tabs ending --->
            <!--- cart top buttons --->
            <div style="margin-left: -5%" class="row">

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">
                        Special<br> Customer
                    </button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#returnorder" class="btn btn-primary btn-primary1">
                        Return<br> Order
                    </button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br>
                        Up
                    </button>

                </div>


            </div>
            <br>


            <!--- cart top buttons ending --->


            <div style="margin-left: -20px; width: 100%!important; display:table;" class="card " >
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 hide-column">
                            <input style="width: 100%" type="text" class="form-control " oninput="addcustname(this.value)"
                                   placeholder="Enter Customer Name" name="customer_name" id="customer_name">
                        </div>
                        <div class="col-md-6 hide-column">
                            <input type="date" class="form-control" placeholder="Enter Customer Name" id="bill_date" name="bill_date" value="<?php echo date("m/d/Y")?>">
                        </div>
                    </div>
                </div>

                <div id="print">
                    <div class="col-lg-12">
                        <center>
                            <img class="logo" width="60px" src="../media/images/logo.jpg" alt="BUZZTEK">
                            <!--<b>BuzzTek</b>-->
                        </center>
                    </div>
                <div class="card-header" >

                    <div class="row">

                        <div class="col-md-3 align-middle">
                            <script>
                                function addcustname(value) {
                                    document.getElementById('custname').innerHTML = 'Name: '+value ;
                                    document.getElementById('customer_name').value = value ;
                                }
                            </script>
                            <h6 align-middle id="invoice_num">#<?php echo rand(0000, 999999); ?></h6>

                        </div>
                        <div class="col-md-12">
                            <h6 align-middle id="custname"></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="show-cart table table-bordered" id="cart-table">
                    </table>
                    <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span class="total-cart" id="total-cart"></span></h2></div>
                </div>
            </div>
                <div class="card-body">
                    <div class="row">

                        <div style="padding: 0" class="col-md-6 hide-column">

                            <input type="number" placeholder="Payment Amount" class="form-control pay_amount" id="pay_amount" name="pay_amount">

                        </div>


                        <div style="padding: 0; padding-left: 15px" class="col-md-6">

                            <!--                            <h5>Remaining: 500 Rs</h5>-->

                        </div>


                    </div>
                    <br>


                    <center class="hide-column">

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn">
                                Pick Up Order
                            </button>
                        </a>

                        <a href="javascript:void(0)">
                            <button onclick="displayCart()" ck="" style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " class="btn btn-primary btn fullpayment"> Full Payment Print
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn">
                                More Options
                            </button>
                        </a>

                    </center>

                </div>

            </div>


        </div>
        <!--- ending collapse 1 --->
        <div id="demo2" class="collapse"><!--- collapse 2 --->


            <!--- bootstrap tabs ending --->


            <!--- cart top buttons --->


            <div style="margin-left: -5%" class="row">

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">
                        Special<br> Customer
                    </button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Return<br> Order</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br>
                        Up
                    </button>

                </div>


            </div>
            <br>
            <!--- cart top buttons ending --->
            <div class="card ">

                <div class="card-header">


                    <div class="row">
                        <div class="col-md-3 align-middle">
                            <h5 align-middle>#46001 </h5>
                        </div>

                        <div class="col-md-5">

                            <input style="width: 100%" type="text" class="form-control"
                                   placeholder="Enter Customer Name" name="">

                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

                        </div>


                    </div>


                </div>

                <div class="card-body">

                    <table class="show-cart table">


                    </table>
                    <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span
                                    class="total-cart"></span></h2></div>


                    <center>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn">
                                Pick Up Order
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    class="btn btn-primary btn"> Full Payment Print
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn">
                                More Options
                            </button>
                        </a>

                    </center>

                </div>

            </div>


        </div>
        <!--- ending collapse 2 --->
        <div id="demo3" class="collapse "><!--- collapse 1 --->


            <!--- bootstrap tabs ending --->


            <!--- cart top buttons --->


            <div style="margin-left: -5%" class="row">

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">
                        Special<br> Customer
                    </button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#returnorder" class="btn btn-primary btn-primary1">
                        Return<br> Order
                    </button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br>
                        Up
                    </button>

                </div>


            </div>
            <br>


            <!--- cart top buttons ending --->


            <div style="margin-left: -20px; width: 100%!important; display:table;" class="card ">

                <div class="card-header">


                    <div class="row">

                        <div class="col-md-3 align-middle">

                            <h5 align-middle>#46001</h5>

                        </div>

                        <div class="col-md-5">

                            <input style="width: 100%" type="text" class="form-control"
                                   placeholder="Enter Customer Name" name="">

                        </div>

                        <div class="col-md-4">

                            <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

                        </div>


                    </div>


                </div>

                <div class="card-body">

                    <table class="show-cart table table-bordered">


                    </table>
                    <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span
                                    class="total-cart"></span></h2></div>

                    <div class="row">

                        <div style="padding: 0" class="col-md-6">

                            <input type="text" placeholder="Payment Amount" class="form-control" name="">

                        </div>


                        <div style="padding: 0; padding-left: 15px" class="col-md-6">

                            <h5>Remaining: 500 Rs</h5>

                        </div>


                    </div>
                    <br>


                    <center>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn">
                                Pick Up Order
                            </button>
                        </a>

                        <a href="javascript:void(0)">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    class="btn btn-primary btn fullpayment"> Full Payment Print
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn">
                                More Options
                            </button>
                        </a>

                    </center>

                </div>

            </div>


        </div>
        <!--- ending collapse 3 --->
        <div id="demo4" class="collapse "><!--- collapse 1 --->


            <!--- bootstrap tabs ending --->


            <!--- cart top buttons --->


            <div style="margin-left: -5%" class="row">

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">
                        Special<br> Customer
                    </button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#returnorder" class="btn btn-primary btn-primary1">
                        Return<br> Order
                    </button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br>
                        Up
                    </button>

                </div>


            </div>
            <br>


            <!--- cart top buttons ending --->


            <div style="margin-left: -20px; width: 100%!important; display:table;" class="card ">

                <div class="card-header">


                    <div class="row">

                        <div class="col-md-3 align-middle">

                            <h5 align-middle>#46001</h5>

                        </div>

                        <div class="col-md-5">

                            <input style="width: 100%" type="text" class="form-control"
                                   placeholder="Enter Customer Name" name="">

                        </div>

                        <div class="col-md-4">

                            <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

                        </div>


                    </div>


                </div>

                <div class="card-body">

                    <table class="show-cart table table-bordered">


                    </table>
                    <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span
                                    class="total-cart"></span></h2></div>

                    <div class="row">

                        <div style="padding: 0" class="col-md-6">

                            <input type="text" placeholder="Payment Amount" class="form-control" name="">

                        </div>


                        <div style="padding: 0; padding-left: 15px" class="col-md-6">

                            <h5>Remaining: 500 Rs</h5>

                        </div>


                    </div>
                    <br>


                    <center>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn">
                                Pick Up Order
                            </button>
                        </a>

                        <a href="javascript:void(0)">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    class="btn btn-primary btn fullpayment"> Full Payment Print
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn">
                                More Options
                            </button>
                        </a>

                    </center>

                </div>

            </div>


        </div>
        <!--- ending collapse 4 --->
        <div id="demo5" class="collapse "><!--- collapse 1 --->


            <!--- bootstrap tabs ending --->


            <!--- cart top buttons --->


            <div style="margin-left: -5%" class="row">

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">
                        Special<br> Customer
                    </button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#returnorder" class="btn btn-primary btn-primary1">
                        Return<br> Order
                    </button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br>
                        Up
                    </button>

                </div>


            </div>
            <br>


            <!--- cart top buttons ending --->


            <div style="margin-left: -20px; width: 100%!important; display:table;" class="card ">

                <div class="card-header">


                    <div class="row">

                        <div class="col-md-3 align-middle">

                            <h5 align-middle>#46001</h5>

                        </div>

                        <div class="col-md-5">

                            <input style="width: 100%" type="text" class="form-control"
                                   placeholder="Enter Customer Name" name="">

                        </div>

                        <div class="col-md-4">

                            <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

                        </div>


                    </div>


                </div>

                <div class="card-body">

                    <table class="show-cart table table-bordered">


                    </table>
                    <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span
                                    class="total-cart"></span></h2></div>

                    <div class="row">

                        <div style="padding: 0" class="col-md-6">

                            <input type="text" placeholder="Payment Amount" class="form-control" name="">

                        </div>


                        <div style="padding: 0; padding-left: 15px" class="col-md-6">

                            <h5>Remaining: 500 Rs</h5>

                        </div>


                    </div>
                    <br>


                    <center>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn">
                                Pick Up Order
                            </button>
                        </a>

                        <a href="javascript:void(0)">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    class="btn btn-primary btn fullpayment"> Full Payment Print
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn">
                                More Options
                            </button>
                        </a>

                    </center>

                </div>

            </div>


        </div>
        <!--- ending collapse 5 --->
        <div id="demo6" class="collapse "><!--- collapse 1 --->


            <!--- bootstrap tabs ending --->


            <!--- cart top buttons --->


            <div style="margin-left: -5%" class="row">

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">
                        Special<br> Customer
                    </button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#returnorder" class="btn btn-primary btn-primary1">
                        Return<br> Order
                    </button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

                </div>

                <div class="col-2">

                    <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

                </div>

                <div class="col-2">

                    <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br>
                        Up
                    </button>

                </div>


            </div>
            <br>


            <!--- cart top buttons ending --->


            <div style="margin-left: -20px; width: 100%!important; display:table;" class="card ">

                <div class="card-header">


                    <div class="row">

                        <div class="col-md-3 align-middle">

                            <h5 align-middle>#46001</h5>

                        </div>

                        <div class="col-md-5">

                            <input style="width: 100%" type="text" class="form-control"
                                   placeholder="Enter Customer Name" name="">

                        </div>

                        <div class="col-md-4">

                            <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

                        </div>


                    </div>


                </div>

                <div class="card-body">

                    <table class="show-cart table table-bordered">


                    </table>
                    <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span
                                    class="total-cart"></span></h2></div>

                    <div class="row">

                        <div style="padding: 0" class="col-md-6">

                            <input type="text" placeholder="Payment Amount" class="form-control" name="">

                        </div>


                        <div style="padding: 0; padding-left: 15px" class="col-md-6">

                            <h5>Remaining: 500 Rs</h5>

                        </div>


                    </div>
                    <br>


                    <center>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn">
                                Pick Up Order
                            </button>
                        </a>

                        <a href="javascript:void(0)">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    class="btn btn-primary btn fullpayment"> Full Payment Print
                            </button>
                        </a>

                        <a href="#">
                            <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                    data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn">
                                More Options
                            </button>
                        </a>

                    </center>

                </div>

            </div>


        </div>
        <!--- ending collapse 6 --->

        <br>
        <!--- cart top buttons ending --->
        <div class="card stickycart">

            <div class="card-header">


                <div class="row">

                    <div class="col-md-3 align-middle">

                        <h5 align-middle>#46001</h5>

                    </div>

                    <div class="col-md-5">

                        <input style="width: 100%" type="text" class="form-control" placeholder="Enter Customer Name"
                               name="">

                    </div>

                    <div class="col-md-4">

                        <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

                    </div>


                </div>


            </div>

            <div class="card-body">

                <table class="show-cart table">


                </table>
                <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span class="total-cart"></span>
                    </h2></div>


                <center>

                    <a href="#">
                        <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn"> Pick
                            Up Order
                        </button>
                    </a>

                    <a href="javascript:void(0)">
                        <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                class="btn btn-primary btn fullpayment"> Full Payment Print
                        </button>
                    </a>

                    <a href="#">
                        <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; "
                                data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn"> More
                            Options
                        </button>
                    </a>

                </center>

            </div>

        </div>


    </div><!--- ending collapse 3 --->


</div> <!--- ending second col --->


<!--</div>-->


<!--- all modals --->


<!-- More options modal -->
<div class="modal fade" id="moreoptionsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">More Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form>

                    Customer Name
                    <input type="text" oninput="addcustname(this.value)" placeholder="Customer Name" id="cust_name" class="form-control" name=""><br>

                    Customer Contact Number
                    <input type="text" placeholder="Customer Number" id="cust_contact_num" class="form-control" name=""><br>

                    Customer Address
                    <input type="text" placeholder="Customer Address" id="cust_address" class="form-control" name=""><br>

                    <div class="row">

                        <!--<div style="padding: 0;" class="col-md-6">

                            Total Price
                            <input type="text" id="cust_price" placeholder="Customer Address" class="form-control"
                                   name="">

                        </div>

                        <div style="padding: 0; padding-left: 15px" class="col-md-6">

                            On Spot Payment
                            <input type="text" placeholder="Enter On The Spot Payment" id="cust_onspot" class="form-control" name="">

                        </div>
-->

                    </div>
                    <br>
                   <!-- Date Of Payment
                    <input type="date" id="cust_payment_date" class="form-control" name="">
-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:void(0)">
                    <button type="button" class="btn btn-primary fullpayment">Print and Save</button>
                </a>
            </div>
            </form>
        </div>
    </div>
</div>


<!--- more options modal ending --->


<!--- pickup orders(top buttons) modal --->


<div class="modal fade" id="pickuporderstop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="width: 760px" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pick Up Orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <table class="table">

                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>items</th>
                        <th>Date/Time</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $get_pickup=mysqli_query($conn,"select * from pickup group by pickup_time");
                    if(mysqli_num_rows($get_pickup)){
                        $count=1;
                        while($row=mysqli_fetch_assoc($get_pickup)){
                             $time=$row['pickup_time'];
                        echo '<tr><td>'.$count.'</td><td>'.$row['cus_name'].'</td><td>';
        $query2=mysqli_query($conn,"select product_name from pickup where pickup_time='".$time."'");
        if(mysqli_num_rows($query2)){
            while($row2=mysqli_fetch_assoc($query2)){
                echo $row2['product_name'].',';
            }
        }
        else{
            echo"no Products";
        }
                               echo'</td><td>'.$row['pickup_date'].'('.$row['pickup_time'].
                            ')</td><td>
                                   <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            </td></tr>';

                        $count++;
                        }
                    }
                    ?>
                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!--- ending pickup orders (top buttons) modal --->


<!--- pickup orders(bottom button) modal --->


<div class="modal fade" id="pickupordersbottom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pick Up Orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form>

                    Order Date
                    <input type="date" class="form-control" placeholder="" name="" id="pickup_date"><br>

                    Order Time
                    <input type="time" class="form-control" placeholder="" name="" id="pickup_time"><br>

                    Customer Name
                    <input type="text" class="form-control" placeholder="Enter Customer Name" name="" id="pickup_customer_name"><br>


                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="pick" class="btn btn-primary pickup">Save</button>
            </div>
        </div>
    </div>
</div>


<!--- ending pickup orders (bottom button) modal --->


<!--- special customer modal --->


<div class="modal fade" id="specialcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="width: 800px" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pick Up Orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form>
                    <input type="text" class="form-control" placeholder="Search By Name" name="">

                </form>
                <br>

                <div class="row">
                    <input type="hidden" id="cus_existing" >
                <?php
                    $sql="select * from customer";
                    $row=mysqli_query($conn,$sql) ;
                    while($data=mysqli_fetch_assoc($row)) {
                        ?>
                        <div class="col-md-3">
                            <div style="cursor: pointer;" onclick="proceed('<?php echo $data["id"]; ?>', '<?php echo $data["cus_name"]; ?>')" class="card"
                                 style="width: 18rem;">
                                <img style="height: 150px; border-radius: 0px!important" class="card-img-top"
                                     src="../media/<?php echo $data['cus_image']; ?>" alt="Customer Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['cus_name']; ?></h5>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>
                    <script>
                        function proceed(id , name){
                            document.getElementById('special_cus_close').click;
                            document.getElementById('cus_existing').value = id;
                            addcustname(name);
                        }
                    </script>
                </div>
                <!--- row ending for cards --->
                <br>
                <center>
                    <a href="javascript:void(0)">
                        <button ck="" style="width: 100%; background-color: #ac6ae0; border-color: #ac6ae0; "   onclick="displayCart()"
                              class="btn btn-primary btn fullpayment"> Proceed To Bill
                        </button>
                    </a>
                </center>

            </div>
            <div class="modal-footer">
                <button type="button" id="special_cus_close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--- <button type="button" class="btn btn-primary">Select</button> --->
            </div>
        </div>
    </div>
</div>


<!--- ending special customer modal --->


<!-- return order modal -->
<div class="modal fade" id="returnorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">More Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form>

                    Previous Invoice Number
                    <div class="input-group mb-3">

                        <input type="text" oninput="returnInvoice(this.value)" id="return_invoice_num" class="form-control" placeholder="Enter Invoice Number"
                               aria-label="Previous Invoice" aria-describedby="basic-addon2">

                        <div class="input-group-append">

<!--                            <button class="btn btn-primary">Fetch</button>-->
                        </div>

                    </div>
                    <br>

                    <table class="table" id="return_table">
                        <tr>

                            <th>ID</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Change Quantity</th>
                            <th>Total</th>
                        </tr>

                        <script>
                            var bill_details;
                            var table_rows;
                            var total_price = 0;
                            function returnInvoice(value){
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        bill_details = this.responseText;
                                        var j = 1;
                                        var jsonobj = JSON.parse(bill_details);
                                        for (var i = 0; i < jsonobj.length; i++) {
                                            var table = document.getElementById("return_table");
                                            var row = table.insertRow(j);
                                            var cell1 = row.insertCell(0);
                                            var cell2 = row.insertCell(1);
                                            var cell3 = row.insertCell(2);
                                            var cell4 = row.insertCell(3);
                                            var cell5 = row.insertCell(4);
                                            cell1.innerHTML = j;
                                            cell2.innerHTML = jsonobj[i].name;
                                            cell3.innerHTML = jsonobj[i].price;
                                            cell4.innerHTML = '<input type="number" id="quantity'+j+'" placeholder="New Quantity" value="'+jsonobj[i].quatity+'" class="form-control"><input type="hidden" id="product_id'+j+'" value="'+jsonobj[i].id+'" class="form-control">';
                                            cell5.innerHTML = jsonobj[i].total_price;

                                            total_price = total_price + parseInt(jsonobj[i].total_price);
                                            j++;
                                        }
                                        document.getElementById('return-total').innerHTML = total_price;


                                    }
                                };
                                xhttp.open("GET", "ajaxgetinvoice.php?value="+value, true);
                                xhttp.send();
                            }
                        </script>
                    </table>


                    <br>


                    <!--Date Of New Payment
                    <input type="date" class="form-control" name="">
                    <br>
-->
                    <h2>Payment To Return: <span id="return-total"></span> Rs</h2>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onClick="returnsale()">Print and Save</button>
            </div>
            </form>
            <script>
                function returnsale(){
                    var obj = '[';
                    total_amount = document.getElementById('return-total').innerHTML;
                    invoice_num = document.getElementById('return_invoice_num').value;
                    var oTable = document.getElementById('return_table');
                    var rowLength = oTable.rows.length;
                    for (i = 1; i < rowLength; i++){
                        var oCells = oTable.rows.item(i).cells;
                        var cellLength = oCells.length;

                         obj = obj+ '{ "name": "'+oCells.item(1).innerHTML+'" , "price": "'+oCells.item(2).innerHTML+'", "quantity" : "'+document.getElementById('quantity'+i).value+'", "product_id" : "'+document.getElementById('product_id'+i).value+'", "total" : "'+oCells.item(4).innerHTML+'" },';

                    }
                    obj = obj + '{"name": "", "price": "0", "quantity": "0", "total": "0"}]';
                    var myJSON = obj; //JSON.stringify(obj);
                   // alert(myJSON);

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {

                            location.reload();
                        }
                    };
                    xhttp.open("GET", "ajaxinsertinvoice.php?pos="+myJSON+"&total_amount="+total_amount+"&invoice="+invoice_num, true);
                    xhttp.send();

                    /*$.ajax({
                        url: "server.php",
                        type: "post",
                        data: {
                            //"pos": myJSON,
                            "cmd": "insert_return_pos",
                            "invoice_num": "111",
                            "total_amount": "222",
                            "status": "return"
                        },
                        success: function (data) {

                            },
                        error: function (data) {

                        }
                    });*/
                }
            </script>
        </div>
    </div>
</div>


<!--- more options modal ending --->


<!--- all modals ending --->
<script src="posjs.js"></script>

<script>
    $('#get_product').change(function () {
        let cat_id = $(this).val();
        $.post('server.php', {
            cmd: 'get_cat_product', cat_id: cat_id
        }, function (data) {
            $('#product').empty();
            $('#product').append(data);
            //toast hide

        });
    });

    jQuery('.cbutton').click(function (e) {
        jQuery('.collapse').collapse('hide');
    });


    // $(document).ready(function () {
    //     $('.input-group-prepend').children('span').children('.selection').children('span').css("height","50px !important");
    // });


    //live search
    $('#livesearch').keyup(function () {
        let value = $(this).val();
        $.post('server.php', {
            key: value, cmd: 'livesearch'
        }, function (data) {
            $('#product').empty();
            $('#product').append(data);
        });
    });
</script>


<?php include '../footer.html'; ?>

</body>
</html>