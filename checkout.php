<?php
    require_once('php/CartAmountTracker.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/headerscripts.php'); ?>

    <!--Mapbox Autofill address-->
<script
    id="search-js"
    defer
    src="https://api.mapbox.com/search-js/v1.0.0-beta.22/web.js"
>
</script>
<script src="https://js.stripe.com/v3/"></script>

<script>
    const script = document.getElementById('search-js');
    script.onload = function() {
        // Initialize the autofill plugin
        const autofill = new mapboxsearch.Autofill({
            accessToken: 'pk.eyJ1Ijoic3RlYW1pbmdzYXVuYXMiLCJhIjoiY2x5emt6ODc4Mm12ajJxczZxdGxpZnFseiJ9.6o9Wtb0B53N93a3-DYRORw'
        });

        // Attach autofill to the "street_address" input
        const streetAddressInput = document.getElementById('street_address');
        autofill.add(streetAddressInput);

        // Listen for autofill suggestions and populate the rest of the fields
        streetAddressInput.addEventListener('suggest', (event) => {
            const suggestion = event.detail.suggestion;

            // Populate fields with suggested data
            document.getElementById('street_address_2').value = suggestion.address.address_line2 || '';
            document.getElementById('city').value = suggestion.address.city || '';
            document.getElementById('state').value = suggestion.address.region || '';
            document.getElementById('zipcode').value = suggestion.address.postal_code || '';
            document.getElementById('country').value = suggestion.address.country_code || '';
        });
    };
</script>


</head>

<body>

<!-- Design Checkout Page -->

<!-- Main Container -->
<div class="container-fluid">

    <div class="row px-5">

        <!-- Left Box (Order Form) -->
        <div class="col-md-7">
            <div class="order-form">
                
                <form method="POST" action="thank-you.php" id="payment-form">
                    <!-- Contact Information -->
                    <h4 class="mt-4">Contact Information</h4>
                    <div class="d-flex gap-3">
                        <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First name" required>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Last name" required>
                    </div>
                    <input class="form-control my-3" type="email" id="email" name="email" placeholder="Email" required>

                    <!-- Shipping Fields -->
                    <h4 class="mt-4">Shipping</h4>
                    <div class="d-flex gap-3">
                        <input class="form-control" id="street_address" name="street_address" placeholder="Street Address" autocomplete="street-address" required>
                        <input class="form-control" id="street_address_2" name="street_address_2" placeholder="House Name / Number, Flat etc" autocomplete="address-line2" required>
                    </div>
                    <div class="d-flex gap-3">
                        <input class="form-control" id="city" name="city" placeholder="City" autocomplete="address-level2"required>
                        <input class="form-control" id="zipcode" name="zipcode" placeholder="Post / Zip code" autocomplete="postal-code" required>
                    </div>
                    
                    <input class="form-control" id="state" name="state" placeholder="State / Reigon" autocomplete="address-level1" required>
                    <select class="form-select mt-3" id="country" autocomplete="country" required>
                        <option value="" disabled selected>Choose Country</option>
                        <option value="AM">Armenia</option>
                        <option value="UK">United Kingdom</option>
                        <option value="US">United States</option>
                    </select>

                    <!-- Shipping Options -->
                    <h4 class="mt-4">Shipping Options</h4>
                    <div class="mt-3 d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="free_shipping" name="shipping_option" onclick="shipping_Selection">
                            <label class="form-check-label" for="free_shipping">Free Shipping</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="premium_shipping" name="shipping_option" onclick="shipping_Selection">
                            <label class="form-check-label" for="premium_shipping">Premium 3 Day Shipping</label>
                        </div>
                    </div>

                    <section class="payment_section pb-4 pt-0.3" style="background-color:#f5f5f5;">
                    <!-- Payment Info -->
                    <h4 class="mt-4">Payment</h4>
                        <!-- Payment form -->
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>


                    </section>

                    <button class="btn btn-primary mt-4 py-2" type="submit" id="submit-button">Place Order</button>
                </form>
            </div>
        </div>

        <!-- Right Box ORDER SUMMARY (Placeholder for now) -->

        <div class="col-md-5" style="background-color:#f5f5f5;">
            <div class="row px-5">
                <h4 class="mt-4">Order Summary</h4>
                <table class="table mt-2 shadow-sm">
                    <thead>
                        <tr>
                            <th scope="col">Qty</th>
                            <th scope="col"></th>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>

                    <!-- Insert the php OrderSummaryElement here-->
                    <?php
                        if(isset($_SESSION['cart'])){
                            $product_id = array_column($_SESSION['cart'], $column='product_id');
                            $result = $database -> getData();
                            while ($row = mysqli_fetch_assoc($result)){
                                foreach($product_id as $id){
                                    if($row['id'] == $id){
                                        OrderSummaryElement($row['productimage'],$row['producttitle'],$row['price']);
                                    }
                                }
                            }
                        }
                    ?>


                </table>

            </div>
        </div>

    </div> <!-- End of Row -->

</div> <!-- End of Container -->





<!-- Scripts -->
<script>
    // Event listener to change the placeholder based on the selected country
    document.addEventListener('DOMContentLoaded', function() {
        const country = document.getElementById('country');
        const zipcode_pl = document.getElementById('zipcode');

        // Change the Zip placeholder based on country
        function zip_Placeholder() {
            let selectedCountry = country.value;
            if (selectedCountry === "AM" || selectedCountry === "UK") {
                zipcode_pl.placeholder = "Post Code";
            } else {
                zipcode_pl.placeholder = "Zip Code";
            }
        }

        // Add event listener to country dropdown to trigger placeholder change
        country.addEventListener('change', zip_Placeholder);

        // Set initial placeholder when page loads
        zip_Placeholder();
    });
</script>

<script>
  // Your Stripe publishable key
  var stripe = Stripe('pk_test_bGCgsiBG0vKIBXIUr0gchd8M00S0PND6gB');
  var elements = stripe.elements();

  // Create an instance of the card Element
  var card = elements.create('card');
  card.mount('#card-element');

  // Handle form submission
  var form = document.getElementById('payment-form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createPaymentMethod('card', card).then(function(result) {
      if (result.error) {
        // Show error to your customer (e.g., insufficient funds)
        document.getElementById('card-errors').textContent = result.error.message;
      } else {
        // Send the PaymentMethod ID to your server
        fetch('/create-payment-intent', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({payment_method_id: result.paymentMethod.id}),
        })
        .then(function(response) {
          return response.json();
        })
        .then(function(paymentIntentResponse) {
          var clientSecret = paymentIntentResponse.clientSecret;

          stripe.confirmCardPayment(clientSecret, {
            payment_method: result.paymentMethod.id,
          }).then(function(paymentResult) {
            if (paymentResult.error) {
              // Show error to the customer
              document.getElementById('card-errors').textContent = paymentResult.error.message;
            } else {
              if (paymentResult.paymentIntent.status === 'succeeded') {
                // Payment was successful
                alert("Payment succeeded!");
              }
            }
          });
        });
      }
    });
  });
</script>


</body>
</html>
