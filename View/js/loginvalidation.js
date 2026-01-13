 

 function login(){
    
    const mobilein = document.getElementById("num");
    const mobile = mobilein.value.trim();
    const password = document.getElementById("pass").value;


if (mobile === "") {
        alert("Name cannot be empty");
        return false; // ফর্ম সাবমিট আটকাবে
    }

     if (password == "") {
        alert("Password cannot be empty");
        return false; // ফর্ম সাবমিট আটকাবে
    }
    return true;
}