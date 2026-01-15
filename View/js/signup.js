function validateForm() {
   // Get input values
    let name = document.getElementById("name").value.trim();
    let password = document.getElementById("password").value;
    let phone = document.getElementById("phone").value.trim();
    let address = document.getElementById("address").value.trim();
 
    // Name validation: only letters and spaces allowed
    var namePattern = /^[A-Za-z ]+$/;
    if (name === "" || !namePattern.test(name)) {
        alert("Name should contain only letters and spaces.");
        return false;
    }
 
    // Email validation: must contain @
    if (password === "") {
        alert("Password can not be empty ");
        return false;
    }
 
    if(password.length<4){
 
        alert("Password must be at least 4 characters long");
        return false;
    }
 
    // Phone validation: must be exactly 11 digits
    if (phone.length !== 11 || isNaN(phone)) {
        alert("Phone number must be exactly 11 digits.");
        return false;
    }
 
    // Address validation: must not be empty
    if (address === "") {
        alert("Address cannot be empty.");
        return false;
    }
 
    // All validation passed
    alert("Registration successful");
    return true;
}
