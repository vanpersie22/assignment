
document.getElementById("product-form").addEventListener("submit", function(event) {
    event.preventDefault();
    // Retrieve form data
    const product = document.getElementById("product").value;
    const quantity = document.getElementById("quantity").value;
    // Perform actions like sending data to the server or displaying information
    // For this example, we'll just log the data to the console
    console.log("Product:", product);
    console.log("Quantity:", quantity);
    // You can also redirect the user to another page or display a success message
    // For example: window.location.href = "success.html";
});

