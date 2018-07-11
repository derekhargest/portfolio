						  $(".oneblade-withsub").click(function(e){
						    e.preventDefault();
						    $.post('/cart/clear.json'
						    ).then(function () {
						       $.ajax({
						          type: 'POST',
						          url: '/cart/add.js',
						          dataType:'json',
						          data: {
						            quantity: 1,
						            id: 7924571996217,
						            properties: {
						              "shipping_interval_frequency":"28",
						              "shipping_interval_unit_type":"Days",
						              "subscription_id":"12663",
						              "recurring_price": "49.95",
						              "charge_delay": '14'
						            }
						          },
						          success:function(data){
						            console.log(data)
						            function get_cookie(name){ return( document.cookie.match('(^|; )'+name+'=([^;]*)')||0 )[2] };
						                do{
						                      token=get_cookie('cart');
						                }
						                while(token == undefined);

						                var myshopify_domain='oneblade.myshopify.com'
						                try { var ga_linker = ga.getAll()[0].get('linkerParam') } catch(err) { var ga_linker ='' }
						                var customer_param = ''
						                checkout_url= "https://checkout.rechargeapps.com/r/checkout?myshopify_domain="+myshopify_domain+"&cart_token="+token+"&"+ga_linker+"&"+customer_param;
						                window.location.href = checkout_url;
						          },
						          error:function(error){
						            console.log(error);
						          }});
						    });
						});








                                						    e.preventDefault();
						    $.post('/cart/clear.json'
						    ).then(function () {
						       $.ajax({
						          type: 'POST',
						          url: '/cart/add.js',
						          dataType:'json',
						          data: {
						            quantity: 1,
						            id: 7924571996217,
						            properties: {
						              "shipping_interval_frequency":"28",
						              "shipping_interval_unit_type":"Days",
						              "subscription_id":"12663",
						              "recurring_price": "49.95",
						              "charge_delay": '14'
						            }
						          },
						          success:function(data){
						            console.log(data)
						            function get_cookie(name){ return( document.cookie.match('(^|; )'+name+'=([^;]*)')||0 )[2] };
						                do{
						                      token=get_cookie('cart');
						                }
						                while(token == undefined);

						                var myshopify_domain='oneblade.myshopify.com'
						                try { var ga_linker = ga.getAll()[0].get('linkerParam') } catch(err) { var ga_linker ='' }
						                var customer_param = ''
						                checkout_url= "https://checkout.rechargeapps.com/r/checkout?myshopify_domain="+myshopify_domain+"&cart_token="+token+"&"+ga_linker+"&"+customer_param;
						                window.location.href = checkout_url;
						          },
						          error:function(error){
						            console.log(error);
						          }});
						    });











                            	.on('click', 'a[href^="#"]', function (e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);






$(document)

});