		<?php
			include_once 'header.php';
		?>

		<main>
			<div class="intro-description">
				<h1>Thanks for Donating!</h1>
			</div>

			<p class="marquee"><span>Spread the word about the site!</span></p>

			<div class="body">
				<div class="primary-setup">
					<a href="https://funny-science-shirts-2.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner1.jpg"></a>
					<div class="styled-paragraph">
				    	<script src="https://www.paypal.com/sdk/js?client-id=AXW7GYjrpAT9ocuhr0w8SBC9fORbMsC71NZMqcHxTyR6qHXNXh_MlgSaX4ZZiIRNTotf7ERHJuI7sZZa&currency=USD"></script>


				    <!-- Set up a container element for the button -->

					    <div id="paypal-button-container"></div>


					    <script>

					      paypal.Buttons({


					        // Sets up the transaction when a payment button is clicked

					        createOrder: function(data, actions) {

					          return actions.order.create({

					            purchase_units: [{

					              amount: {

					                value: '77.44' // Can reference variables or functions. Example: `value: document.getElementById('...').value`

					              }

					            }]

					          });

					        },


					        // Finalize the transaction after payer approval

					        onApprove: function(data, actions) {

					          return actions.order.capture().then(function(orderData) {

					            // Successful capture! For dev/demo purposes:

					                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

					                var transaction = orderData.purchase_units[0].payments.captures[0];

					                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');


					            // When ready to go live, remove the alert and show a success message within this page. For example:

					            // var element = document.getElementById('paypal-button-container');

					            // element.innerHTML = '';

					            // element.innerHTML = '<h3>Thank you for your payment!</h3>';

					            // Or go to another URL:  actions.redirect('thank_you.html');

					          });

					        }

					      }).render('#paypal-button-container');
					    
					    </script>

					<a href="https://computer-programming-shirts.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner2.jpg"></a>
				</div>
			</div>
		</main>
	</body>
</html>
