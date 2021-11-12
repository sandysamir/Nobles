
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  
</body><script
src="https://www.paypal.com/sdk/js?client-id=AXvBn15pT3Kz5NOMmI8kG7Ttg-KARd0eraRhNy8ZrnCA6K2UDxIa-CY6SnY7RzCf0KVVebLBKoIuYiXT"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
</script>

<div id="paypal-button-container"></div>


<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '5000'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ');
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>