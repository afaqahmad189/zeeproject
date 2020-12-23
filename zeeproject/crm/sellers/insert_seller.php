<!DOCTYPE html>
<html>
<head>

    <style>


        /*	.repeaterbtn{*/

        /*height: 40px;*/
        /*margin-top: 30px;*/
        /*			*/
        /*			}		*/


    </style>


    <title>Insert Seller</title>
</head>
<body>

<?php include '../../header.php'; ?>


<div class="container">
    <?php
    if ($_SESSION['seller_already_created']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['seller_already_created'] . '</label>
            </div>
        </div>';
        unset($_SESSION['seller_already_created']);
    }
    if ($_SESSION['seller_notinsert']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['seller_notinsert'] . '</label>
            </div>
        </div>';
        unset($_SESSION['seller_notinsert']);
    }
    if ($_SESSION['seller_insert']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['seller_insert'] . '</label>
            </div>
        </div>';
        unset($_SESSION['seller_insert']);
    }

    ?>

    <form method="post" action="server.php" enctype="multipart/form-data">

        <div class="row">

            <div style="padding: 0px!important" class="col-md-6">

                <h3 class="pageheading">Add Seller </h3>
                <br>

            </div>

            <div style="padding: 0px!important" class="col-md-6">


                <button style="padding-top:0px;width: 50px!important; height: 50px!important; position: fixed; margin-left: 625px;border-radius: 50%"
                        type="submit" class="btn formbtn">+
                </button>

            </div>


        </div>


        <br>


        <label for="sellertype">Select Seller Type</label>
        <select id="sellertype" class="form-control" required name="type">

            <option>Choose One..</option>
            <option value="1">Seller</option>
            <option value="2">Active Seller</option>

        </select><br>

        <label for="sellercompanyname">Enter Company/Seller Name</label>
        <input id="sellercompanyname" type="text" class="form-control" placeholder="Enter Seller/Company Name"
               name="sellername" required><br>
        <label for="sellercompanyname">Phone Number</label>
        <input id="sellercompanyname" type="text" class="form-control" placeholder="Enter Phone Number"
               name="sellernum" required><br>
        <label for="sellercompanyname">Account Number</label>
        <input id="sellercompanyname" type="text" class="form-control" placeholder="Enter Account Number"
               name="selleracc" required><br>


        <br>
        <center>
            <br>
            <div id="chooseProduct">
            <label class="control-label" for="ourField">Choose Products</label>
            <select id="purchasedfrom" name="fields[]"class="select2 form-control" multiple>
                <option>Choose One...</option>
                <?php
                $get_product="select * from add_product";
                $get_result=mysqli_query($conn,$get_product);
                if(mysqli_num_rows($get_result)>0){
                    while($row=mysqli_fetch_assoc($get_result)) {
                        $product_id = $row['id'];
                        $name = $row['name'];
                        $main_pic = $row['main_pic'];
                        echo' <option value="'.$product_id.'">'.$name.'</option>';

                    }
                }
                ?>

            </select>
            </div>
            <div id="myRepeatingFields5" style="display: none">
                <div class="entry input-group col-xs-3">
                    <div class="row">
                        <div class="col">
                            <label for="seller_otherproduct">Enter Product</label>
                            <select id="seller_otherproduct" name="seller_otherproduct[]"class=" form-control">
                                <option>Choose One...</option>
                                <?php
                                $get_product="select * from add_product";
                                $get_result=mysqli_query($conn,$get_product);
                                if(mysqli_num_rows($get_result)>0){
                                    while($row=mysqli_fetch_assoc($get_result)) {
                                        $product_id = $row['id'];
                                        $name = $row['name'];
                                        echo' <option value="'.$product_id.'">'.$name.'</option>';
                                    }
                                }
                                ?>

                            </select>

                        </div>

                        <div class="col">

                            <label for="pprice">Price</label>
                            <input id="pprice" name="seller_otherproduct_price[]" type="text" placeholder="Enter Price"
                                   class="form-control">

                        </div>

                        <div class="col">

                            <label for="pdate">Enter phone</label>
                            <input id="pdate" name="seller_otherproduct_phone[]" type="text" placeholder="Enter Phone Number" class="form-control">

                        </div>

                        <div style="max-width: 5%!important; margin-top: 25px;" class="col">


                            <button type="button" class="btn btn-success btn-lg btn-add5">
                                <i class="fa fa-plus" aria-hidden="true"></i>

                            </button>


                        </div>


                    </div>


                </div>
            </div>


            <br>

            <!--- ending products dynamic --->


            <!--- location dynamic fields --->
            <br>


            <label class="control-label" for="ourField">Enter Location</label>


            <div id="myRepeatingFields2">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" name="seller_location[]" type="text" placeholder="Enter Location Name"/>
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add2">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </span>
                </div>
            </div>


            <br>
            <small>Press <i class="fa fa-plus" aria-hidden="true"></i>
                for another field</small>


        </center>

        <!--- ending products dynamic --->


        <div class="row"><!--- row 3 --->


            <div style="padding: 0; padding-left: 10px" class="col">

                <label for="sellerdescription">Enter Description</label>
                <textarea id="sellerdescription" class="form-control" placeholder="Enter Description" rows="8"
                          name="seller_description"></textarea><br>


            </div>


        </div>
        <br><!--- row 3 ending --->

        <div class="row">


            <div style="padding: 0px" class="col">

                <label for="dealercat">Dealer Category</label>
                <input type="text" id="dealercat" class="form-control" name="dealer_cat"
                       placeholder="Enter Dealer Category Name"><br>


            </div>

            <div style="padding: 0px; padding-left: 20px;" class="col">

                <!--- star ratings  --->

                <label style="margin-bottom: 20px">Rating</label><br>
                <label class="radio-inline">
                    <input type="radio" name="optradio" checked value="Rating 1"> Rate 1
                </label>
                <label class="radio-inline">
                    <input style="margin-left: 30px;" type="radio" name="optradio" value="Rating 2"> Rate 2
                </label>
                <label class="radio-inline">
                    <input style="margin-left: 30px;" type="radio" name="optradio" value="Rating 3"> Rate 3
                </label>
                <label class="radio-inline">
                    <input style="margin-left: 30px;" type="radio" name="optradio" value="Rating 4"> Rate 4
                </label>
                <label class="radio-inline">
                    <input style="margin-left: 30px;" type="radio" name="optradio" value="Rating 5"> Rate 5
                </label>


                <!--- star ratings ending --->

            </div>


        </div><!--- row 4 ending  --->

        <br>


        <div class="row">

            <div style="padding: 0" class="col-md-6">

                <label for="dealerpics">Dealer Pictures</label>
                <input style="height: 45px" type="file" class="form-control" name="seller_pic[]" id="dealerpics"
                       multiple>


            </div>


            <div style="padding: 0; padding-left: 15px" class="col-md-6">

                <label for="refnum">Reference Number</label>
                <input placeholder="Enter other contact number" style="height: 45px" type="text" class="form-control"
                       name="seller_ref_num" id="refnum">


            </div>


        </div><!--- row 5 ending  --->

        <br><br>


        <!--- products dynamic fields --->


        <label class="control-label" for="ourField">Other Products (without inventory)</label>


        <div id="myRepeatingFields3">
            <div class="entry input-group col-xs-3">

                <div class="row">


                    <div class="col">

                        <label for="pname">Enter Product</label>
                        <input id="pname" name="seller_product_name[]" type="text" placeholder="Enter Product Name"
                               class="form-control">

                    </div>

                    <div class="col">

                        <label for="pprice">Price</label>
                        <input id="pprice" name="seller_product_price[]" type="text" placeholder="Enter Price"
                               class="form-control">

                    </div>

                    <div class="col">

                        <label for="pdate">Enter Date</label>
                        <input id="pdate" name="seller_product_date[]" type="date" class="form-control">

                    </div>

                    <div style="max-width: 5%!important; margin-top: 25px;" class="col">


                        <button type="button" class="btn btn-success btn-lg btn-add3">
                            <i class="fa fa-plus" aria-hidden="true"></i>

                        </button>


                    </div>


                </div>


            </div>
        </div>


        <br>
        <small>Press <i class="fa fa-plus" aria-hidden="true"></i>
            for another field</small>


        <br>


        <div class="row">


            <div style="padding: 0" class="col-md-3">

                <label for="fbfield">Facebook URL</label>
                <input placeholder="Enter Facebook Id Url" type="text" class="form-control" name="fb" id="fbfield">


            </div>


            <div style="padding: 0; padding-left: 15px" class="col-md-3">

                <label for="twitfield">Twitter URL</label>
                <input placeholder="Enter Twitter Id Url" type="text" class="form-control" name="twitter"
                       id="twitfield">


            </div>


            <div style="padding: 0; padding-left: 15px" class="col-md-3">

                <label for="tikfield">Tiktok URL</label>
                <input placeholder="Enter Tiktok Id Url" type="text" class="form-control" name="tiktok" id="tikfield">


            </div>

            <div style="padding: 0; padding-left: 15px" class="col-md-3">

                <label for="webfield">Website URL</label>
                <input placeholder="Enter Website Url" type="text" class="form-control" name="web" id="webfield">


            </div>


        </div><!--- row 6 ending --->
        <br>

        <div class="row">


            <div style="padding: 0" class="col-md-3">

                <label for="fbfield">Youtube URL</label>
                <input placeholder="Enter Youtube Channel Id Url" type="text" class="form-control" name="youtube"
                       id="fbfield">


            </div>


            <div style="padding: 0; padding-left: 15px" class="col-md-3">

                <label for="twitfield">Instagram URL</label>
                <input placeholder="Enter Insta Id Url" type="text" class="form-control" name="insta" id="twitfield">


            </div>


            <div style="padding: 0; padding-left: 15px" class="col-md-3">

                <label for="tikfield">Email Id</label>
                <input placeholder="Enter Email Id" type="text" class="form-control" name="mail" id="tikfield">


            </div>

            <div style="padding: 0; padding-left: 15px" class="col-md-3">

                <label for="webfield">Other</label>
                <input placeholder="Other Website Url i.e. OLX, Daraz.pk" type="text" class="form-control" name="other"
                       id="webfield">


            </div>


        </div><!--- row 7 ending --->


        <br><br>
        <center>
            <input type="hidden" name="cmd" value="add_seller">
            <button type="submit" class="btn formbtn"> Insert</button>

        </center>
    </form>

</div>


<!-- Modal -->
<form class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="width: 800px" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--       <form>-->
                <!--         -->
                <!--        -->
                <!--        <input type="text" class="form-control" placeholder="Search By Name/ID" name="">-->
                <!---->
                <!--       </form><br>-->

                <div class="row">
                    <?php
                    $get_product="select * from add_product";
                    $get_result=mysqli_query($conn,$get_product);
                    if(mysqli_num_rows($get_result)>0){
                       while($row=mysqli_fetch_assoc($get_result)) {
                           $product_id = $row['id'];
                           $name = $row['name'];
                           $main_pic = $row['main_pic'];
                           echo'<div class="col-md-3">
                            <a href="javascript:void(0)" onclick="get_choose_product('.$product_id.')"> 
                        <div style="cursor: pointer;"class="card" style="width: 18rem;">
                            <img style="height: 150px; border-radius: 0px!important" class="card-img-top"
                                 src="../../inventory/'.$main_pic.'" alt="Customer Image">
                            <div class="card-body">
                                <h5 class="card-title">'.$name.'</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    ';

                       }
                    }
                    else{
                        echo'<div class="col-md-3">
                        <div style="cursor: pointer;" onclick="window.location=\'#\';" class="card" style="width: 18rem;">
                            <img style="height: 150px; border-radius: 0px!important" class="card-img-top"
                                 src="../../media/images/No-image-available.png"
                                 alt="Customer Image">
                            <div class="card-body">
                                <h5 class="card-title">No Product</h5>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>

                </div>
                <!--- row ending for cards --->

                <br>

                <center>
                    <button style="width: 100%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal"
                            data-target="#moreoptionsmodal" class="btn btn-primary btn"> Choose It
                    </button>
                </center>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--- <button type="button" class="btn btn-primary">Select</button> --->
            </div>
        </div>
    </div>
</form>
</div>


<script src="jquery.ac-form-field-repeater.js"></script>
<script>
    $(function () {
        $(document).on('click', '.btn-add', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('Select More');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });

    $(function () {
        $(document).on('click', '.btn-add2', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields2:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add2')
                .removeClass('btn-add2').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });

    $(function () {
        $(document).on('click', '.btn-add3', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields3:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add3')
                .removeClass('btn-add3').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });

    $(function () {
        $(document).on('click', '.btn-add4', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields4:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add4')
                .removeClass('btn-add4').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });

    $(function () {
        $(document).on('click', '.btn-add5', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields5:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add5')
                .removeClass('btn-add5').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });

    //change seller type
    $('#sellertype').change(function () {
        let val=$(this).val();
        if(val=='1'){
            $('#chooseProduct').css('display', 'none');
            $('#myRepeatingFields5').css('display','block');
        }
        else{
            $('#chooseProduct').css('display', 'block');
            $('#myRepeatingFields5').css('display','none');
        }
    });

</script>

<!--choose product-->
<!--<script>-->
<!--    function get_choose_product(get_product_id) {-->
<!--        var p_id=get_product_id;-->
<!--        $('.getval').val(p_id);-->
<!--        $('#exampleModal').modal('hide');-->
<!--        $('.getimg').append(' <div class="entry input-group col-xs-3"><input class="form-control btn products getval" name="fields[]" type="button" value="Choose Active Products (invetory products)" placeholder="Placeholder"data-toggle="modal" data-target="#exampleModal"/><span class="input-group-btn"><button type="button" class="btn btn-success btn-lg btn-add"><i class="fa fa-plus" aria-hidden="true"></i></button></span></div>');-->
<!--    }-->
<!--</script>-->


<?php include '../../footer.html'; ?>

</body>
</html>