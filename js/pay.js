
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_eda478c04e714b1ef09212b9e8662f9b6ad23fc7', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency: 'GHS',
    ref: ''+Math.floor(Math.random() * 100000000  + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      // alert('Window closed.');
    },
    callback: function(response){
      let message = "Payment complete! Reference:" + response.reference;
      //alert(message);
      window.location = "../actions/process_payment.php?reference="+ response.reference;

      // $.ajax({
      //   url: '../actions/process_payment.php/verify_transaction?reference='+ response.reference,
      //   method: 'get',
      //   success: function (response) {
      //     // the transaction status is in response.data.status
      //     // alert(response);
      //   }
      // });
    }
  });

  handler.openIframe();
}