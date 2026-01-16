function validateForm() {
    
    
    // clear errors
    document.getElementById("nameError").innerHTML = "";
    //document.getElementById("mobileError").innerHTML = "";
    document.getElementById("serviceError").innerHTML = "";
    document.getElementById("problemError").innerHTML = "";
    document.getElementById("addressError").innerHTML = "";
    document.getElementById("timeError").innerHTML = "";

    // NAME
    let name = document.getElementById("customer_name").value.trim();
    if (name === "") {
        document.getElementById("nameError").innerHTML = "Name is required";
        return false;
    }

    // MOBILE
    //let mobile = document.getElementById("mobile_number").value.trim();
    //let mobilePattern = /^01[0-9]{9}$/;

    /*if (mobile === "") {
        document.getElementById("mobileError").innerHTML = "Mobile number is required";
        return false;
    } else if (!mobilePattern.test(mobile)) {
        document.getElementById("mobileError").innerHTML = "Invalid Bangladeshi mobile number";
        return false;
    }*/

    // SERVICE TYPE
    let services = document.querySelectorAll('input[name="service_type[]"]:checked');
    if (services.length === 0) {
        document.getElementById("serviceError").innerHTML = "Select at least one service";
      return false;
    }

    // PROBLEM
    let problem = document.getElementById("problem_description").value.trim();
    if (problem === "") {
        document.getElementById("problemError").innerHTML = "Describe your problem";
        return false;
    }

    // ADDRESS
    let address = document.getElementById("service_address").value.trim();
    if (address === "") {
        document.getElementById("addressError").innerHTML = "Service address is required";
        return false;
    }

    // TIME
    let time = document.getElementById("preferred_time").value;
    if (time === "") {
        document.getElementById("timeError").innerHTML = "Select preferred time";
        return false;
    }

    return true;
    

}
