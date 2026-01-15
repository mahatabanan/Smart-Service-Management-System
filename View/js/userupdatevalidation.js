function validateuserform() {
    
    const nameInput = document.getElementById("uname");
    const name = nameInput.value.trim();
    const password = document.getElementById("pass").value;

    
    if (name === "") {
        alert("Name cannot be empty");
        return false; 
    }

     if (password == "") {
        alert("Password cannot be empty");
        return false; 
    }

    if (password.length < 4) {
        alert("Password must be at least 4 characters");
        return false; 
    }
    if (name.length < 4) {
        alert("Name must be at least 4 characters");
        return false; 
    }

    
    return true; 
}