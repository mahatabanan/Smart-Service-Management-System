


   

  function validateManagerForm() {

    
    
    //alert("JS LOADED OK"); 

    const name = document.getElementById("manager_name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const address = document.getElementById("address").value.trim();
    const password = document.getElementById("password").value;

    // Name
    if (name === "") {
        alert("Manager name is required");
        return false;
    }
    if (name.length < 3) {
        alert("Manager name must be at least 3 characters");
        return false;
    }

    // Phone
    if (!/^[0-9]{11}$/.test(phone)) {
        alert("Phone number must be 11 digits");
        return false;
    }

    // Address
    if (address === "") {
        alert("Address is required");
        return false;
    }

    // Password
    if (password.length < 4) {
        alert("Password must be at least 4 Scharacters");
        return false;
    }

    // validation passed → allow submit
    return true;
}
