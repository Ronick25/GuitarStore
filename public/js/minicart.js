  function add_to_cart(id) {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '../cart/add',
      type: 'POST',
      data: {'id': id},
      success: function(response){
        $('#myModal').modal('show');
        var total_prices = [];
        for (i=0; i<response.length; i++){
          console.log(response.id)
          $("tr#"+response[i].id).remove();
          var total_price = response[i].price*response[i].qty;
          total_prices.push(total_price);
          $("table tbody").append("<tr id='" + response[i].id +"'>"
            +"<td>" + response[i].name + "</td>"
            +"<td>" + response[i].qty +"</td>"
            +"<td>" + "$" + response[i].price + ".00" + "</td>"
            +"<td>" + "$" + total_price + ".00$" + "</td>"
            +"</tr>");  
        } 
        for (i=0; i<total_prices.length-1; i++) {
          total_price += total_prices[i];
        }
        $("p#total_price").empty();
        $("#total_price").append("Сумма заказа: " + "$" + total_price + ".00");
      }
    })
  }

  function clear_cart() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '../cart/clear',
      type: 'GET',
      success: function(response){
        console.log(response);
        $('#myModal').modal('show');
        $("tr:not(:first)").remove();
        $('p').empty();
      } 
    })
  }

  function addComment(id=null) {
    scrollToElement('add_review');
    $("#parent_id").remove();
    $(".contact").append("<input type='hidden' id='parent_id' name='parent_id' value=" + id + ">");
  }

  function scrollToElement(theElement) {
    if (typeof theElement === "string") theElement = document.getElementById(theElement);
    var selectedPosX = 0;
    var selectedPosY = 0;
    while (theElement != null) {
      selectedPosX += theElement.offsetLeft;
      selectedPosY += theElement.offsetTop;
      theElement = theElement.offsetParent;
    }
    window.scrollTo(selectedPosX,selectedPosY);
  }

  function show_cart() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '../cart/show',
      type: 'GET',
      success: function(response){

        $('#myModal').modal('show');
        var total_prices = [];
        for (i=0; i<response.length; i++){
          $("tr#"+response[i].id).remove();
          console.log(response.length);
          console.log(response[i]);
          var total_price = response[i].price*response[i].qty;
          total_prices.push(total_price);
          $("table tbody").append("<tr id='" + response[i].id +"'>"
            +"<td>" + response[i].name+ "</td>"
            +"<td>" + response[i].qty +"</td>"
            +"<td>" + "$" + response[i].price + ".00" + "</td>"
            +"<td>" + "$" + total_price + ".00$" + "</td>"
            +"</tr>");  
        } 
        for (i=0; i<total_prices.length-1; i++) {
          total_price += total_prices[i];
        }
        $("p").empty();
        $("#total_price").append("Сумма заказа: " + "$" + total_price + ".00");
      }
    })
  }

  function checkout() {
    if($("td").length){
      window.location.replace("../cart/checkout")
    } else {
      alert('Корзина пуста')
    }
  }

  function add_subscriber() {
    var email = document.getElementById('email').value;
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url: '/add',
      type : "POST",
      data : {'email': email},
      success: function(response){
        alert(response)
      }

    });                     
  }