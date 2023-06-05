var stripe = Stripe(
  "pk_test_51N4rtfIRgykSydFWmt2QJFv0omtITN8P6AsgoicN1sqCBUdeJZ4uxe7i1VOzZGoy0B0jQloXyxFQpzpjltwmYjzN00W0VoppQm"
);

document.getElementById("checkout").addEventListener("click", function(){
  stripe.redirectToCheckout({
    lineItens: [
      {
        price: price_1NDwdNIRgykSydFWbvMVZKZy,
        quantity: 1,
      },
    ],
    successUrl: "https://google.com",
    cancelUrl: "https://twitter.com",
  })
  .then(function(result){
    
  });
});