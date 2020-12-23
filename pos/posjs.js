// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================

  activeCartId = "tab";
  activeCart = "#demo";

  // Constructor
  function Item(id = 0,name = '', price = 0, count = 0) {
    this.id=id;
    this.name = name;
    this.price = price;
    this.count = count;
  }

  function Tab(){
    this.tab = []
    this.tab2 = []
    this.tab3 = []
    this.tab4 = []
    this.tab5 = []
    this.tab6 = []
  }

  cart = new Tab();

  // Save cart
  function saveCart() {
    // sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }

    // Load cart
  function loadCart() {
    // cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }


  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};

  obj.setActiveCart = function(cartId, cart) {
    activeCartId = cartId;
    activeCart = cart;
  }

  obj.getActiveCart = function(){
    return activeCart
  }


  // Add to cart
  obj.addItemToCart = function(id,name, price, count) {
    for(var item in cart[activeCartId]) {
      if(cart[activeCartId][item].name === name) {
        cart[activeCartId][item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(id,name, price, count);
    cart[activeCartId].push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart[activeCartId]) {
      if (cart[activeCartId][i].name === name) {
        cart[activeCartId][i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart[activeCartId]) {
        if(cart[activeCartId][item].name === name) {
          cart[activeCartId][item].count --;
          if(cart[activeCartId][item].count === 0) {
            cart[activeCartId].splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart[activeCartId]) {
      if(cart[activeCartId][item].name === name) {
        cart[activeCartId].splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart[activeCart] = [];
    saveCart();
  }

  // Count cart
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart[activeCartId]) {
      totalCount += cart[activeCartId][item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart[activeCartId]) {
      totalCart += cart[activeCartId][item].price * cart[activeCartId][item].count;
    }
    return Number(totalCart.toFixed(2));
  }
  // Remaining Amount
  obj.Remaining = function() {
    var remaining = 0;
    // for(var item in cart[activeCartId]) {
    //   totalCart += cart[activeCartId][item].price * cart[activeCartId][item].count;
    // }
    let pay_amount=$('.pay_amount').val();
    let change=obj.totalCart()-pay_amount;
    return Number(remaining.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart[activeCartId]) {
      item = cart[activeCartId][i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  return obj;
})();


// *****************************************
// Triggers / Events
// *****************************************
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var id = $(this).data('id');
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(id,name, price, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  // shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var count = 0;
  var cartArray = shoppingCart.listCart();
  var output = "";
  var inc = 1;
  output += "<tr>"
      + "<th>No</th>"
      + "<th>Item Name</th>"
      + "<th>Rate</th>"
      + "<th>QTY</th>"
      + "<th>Discount</th>"
      + "<th>Total</th>"
      + "<th class='hide-column'></th>"
      +  "</tr>";
  for(var i in cartArray) {


    count++;
    output += "<tr>"
      + "<td>"+count+"</td>"
      + "<td><p style='width: 180px!important'>" + cartArray[i].name + "</p></td>"
      + "<td>Rs " + cartArray[i].price + "</td>"


      + "<td><input style='width: 60px' type='hidden' class='item-count form-control' data-id='" + cartArray[i].id + "' value='" + cartArray[i].id + "'><input style='width: 60px' type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'></td>"

      + "<td><input style='width: 60px' type='text' class='form-control' placeholder='Discount'</td>"

      + "<td>" + cartArray[i].total + "</td>"
      + "<td class='hide-column'><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"

      +  "</tr>";
  }
  const activeCartId = shoppingCart.getActiveCart();

  let test=shoppingCart.totalCart();
  $(activeCartId + ' .show-cart').html(output);
  $(activeCartId + ' .total-cart').html(shoppingCart.totalCart());
  $(activeCartId + ' .total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})
// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});
displayCart();
$('.tab-btn').on('click',function(){
  shoppingCart.setActiveCart(this.id,this.dataset.target)
})
$('.fullpayment').on("click", function() {
  var more_name = document.getElementById('cust_name').value;
  var more_contact = document.getElementById('cust_contact_num').value;
  var more_address = document.getElementById('cust_address').value;
  var cus_existing = document.getElementById('cus_existing').value;
  var pay_amount = document.getElementById('pay_amount').value;
 /* var more_price = document.getElementById('cust_price').value;
  var more_onspot = document.getElementById('cust_onspot').value;
*/
  let get=shoppingCart.listCart();
  let customer_name=$('#customer_name').val();
  let bill_date=$('#bill_date').val();
  let invoice_num=$('#invoice_num').html();

  /*if(customer_name==''){
   alert("Please Enter Customer Name");
 }
 else {*/

  $.ajax({
      url: "server.php",
      type: "post",
      data: {
        "pos": get,
        "cmd": "insert_pos",
        "customer_name": customer_name,
        "bill_date": bill_date,
        "invoice_num": invoice_num,
        "more_name": more_name ,
        "more_contact": more_contact,
        "more_address": more_address,
        "cus_existing": cus_existing,
        "pay_amount": pay_amount,
        "status": "sale"
        /*"more_price": more_price,
        "more_onspot": more_onspot*/
      },
      success: function (data) {
        for(var item in cart[activeCartId]) {
            cart[activeCartId].splice(item);
        }
        PrintElem('print');
        // location.reload();
        // $('#toast_cat').show();
        // $('#toast_cat').append(data);
        //toast hide
        // setTimeout(function() {
        //   $('.toast').fadeOut('fast');
        // }, 1000);
      },
      error: function (data) {

      }
    });

});

$('#pick').on("click", function() {
  var pickup_date = document.getElementById('pickup_date').value;
  var pickup_time = document.getElementById('pickup_time').value;
  var pickup_customer_name = document.getElementById('pickup_customer_name').value;
  /* var more_price = document.getElementById('cust_price').value;
   var more_onspot = document.getElementById('cust_onspot').value;
 */
  let get=shoppingCart.listCart();
  let customer_name=$('#customer_name').val();
  let bill_date=$('#bill_date').val();
  let invoice_num=$('#invoice_num').html();

  /*if(customer_name==''){
   alert("Please Enter Customer Name");
 }
 else {*/

  $.ajax({
    url: "server.php",
    type: "post",
    data: {
      "pos": get,
      "cmd": "pickup",
      "customer_name": customer_name,
      "bill_date": bill_date,
      "invoice_num": invoice_num,
      "pickup_date": pickup_date ,
      "pickup_time": pickup_time,
      "pickup_customer_name": pickup_customer_name

    },
    success: function (data) {
      $('#pickupordersbottom').modal('hide');
      $('#toast_cat').show();
      $('#toast_cat').append('<div class="col-md-8"></div><div class="col-md-4 toast" ><label>'+data+'</label></div>');
      //toast hide
      setTimeout(function() {
        $('.toast').fadeOut('fast');
      }, 5000);
    },
    error: function (data) {

    }
  });

});




// $('.pay_amount').addEventListener("keypress",function () {
//     $(activeCartId + ' .pay_amount').html(shoppingCart.Remaining());
// })



