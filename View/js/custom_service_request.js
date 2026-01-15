function validateForm() {

    let ok = true;

    // clear errors
    document.getElementById("nameError").innerHTML = "";
    document.getElementById("mobileError").innerHTML = "";
    document.getElementById("serviceError").innerHTML = "";
    document.getElementById("problemError").innerHTML = "";
    document.getElementById("addressError").innerHTML = "";
    document.getElementById("timeError").innerHTML = "";

    // NAME
    let name = document.getElementById("customer_name").value.trim();
    if (name === "") {
        document.getElementById("nameError").innerHTML = "Name is required";
        ok = false;
    }

    // MOBILE
    let mobile = document.getElementById("mobile_number").value.trim();
    let mobilePattern = /^01[0-9]{9}$/;

    if (mobile === "") {
        document.getElementById("mobileError").innerHTML = "Mobile number is required";
        ok = false;
    } else if (!mobilePattern.test(mobile)) {
        document.getElementById("mobileError").innerHTML = "Invalid Bangladeshi mobile number";
        ok = false;
    }

    // SERVICE TYPE
    let services = document.querySelectorAll('input[name="service_type[]"]:checked');
    if (services.length === 0) {
        document.getElementById("serviceError").innerHTML = "Select at least one service";
        ok = false;
    }

    // PROBLEM
    let problem = document.getElementById("problem_description").value.trim();
    if (problem === "") {
        document.getElementById("problemError").innerHTML = "Describe your problem";
        ok = false;
    }

    // ADDRESS
    let address = document.getElementById("service_address").value.trim();
    if (address === "") {
        document.getElementById("addressError").innerHTML = "Service address is required";
        ok = false;
    }

    // TIME
    let time = document.getElementById("preferred_time").value;
    if (time === "") {
        document.getElementById("timeError").innerHTML = "Select preferred time";
        ok = false;
    }

    return ok;
}
