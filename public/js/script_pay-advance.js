function calculateRemainingAmount() {
    // Get the values of the Due Amount and Pay Amount fields
    var dueAmountStr = document.getElementById('dueAmount').textContent;
    var payAmount = parseFloat(document.getElementById('payAmount').value);

    // Remove the "Rs." string from the due amount string
    dueAmountStr = dueAmountStr.replace('Rs.', '');

    // Convert the remaining due amount string to a number
    var dueAmount = parseFloat(dueAmountStr);

    // Convert the pay amount to a number
    payAmount = parseFloat(payAmount);

    // Calculate the remaining amount
    var remainingAmount = dueAmount - payAmount;

    // Update the remaining amount field with the calculated value
    document.getElementById('remainingAmount').value = remainingAmount.toFixed(2);
}


