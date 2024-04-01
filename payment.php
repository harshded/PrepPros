<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Credit/Debit Card Payment</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="padding">
    <div class="row">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <span>CREDIT/DEBIT CARD PAYMENT</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="height: 350px">
                        <form id="payment-form" action="charge.php" method="POST">
                            <div class="form-group">
                                <label for="card-holder-name" class="control-label">CARD HOLDER NAME</label>
                                <input type="text" name="card_holder_name" class="input-lg form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="card-element" class="control-label">CREDIT/DEBIT CARD DETAILS</label>
                                <div id="card-element" class="input-lg form-control">
                                  <!-- A Stripe Element will be inserted here. -->
                                </div>
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            <button id="submit-button" class="btn btn-success btn-lg form-control">MAKE PAYMENT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51OlBkrSF7CoYVXRgPA5KTAIKswcNxZGEG7aFH7ckMNADBoisuW4oSP0G78L85fd4608voBjhMogO9l4HCdCnaFcV00lPVOiCrk');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Create an instance of the card Element.
    var card = elements.create('card');

    // Add an instance of the card Element into the `card-element` div.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        // Disable the submit button to prevent multiple submissions.
        document.getElementById('submit-button').disabled = true;
        // Submit the form with the token ID.
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                // Enable the submit button.
                document.getElementById('submit-button').disabled = false;
            } else {
                // Send the token ID to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server.
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        // Submit the form.
        form.submit();
    }
</script>
</body>
</html>
