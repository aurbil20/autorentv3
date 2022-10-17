"use strict";
let inputTransac = document.getElementById("transaction_id");

addSuccessListener((response) => {
    console.log(response);
    inputTransac.value = response["transactionId"];
    console.log(inputTransac);

});
