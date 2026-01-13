function validateuserform() {
    // ইনপুট ফিল্ড সিলেক্ট করা
    const nameInput = document.getElementById("uname");
    const name = nameInput.value.trim();

    // Validation Rules
    if (name === "") {
        alert("Name cannot be empty");
        return false; // ফর্ম সাবমিট আটকাবে
    }

    if (name.length < 3) {
        alert("Name must be at least 3 characters");
        return false; // ফর্ম সাবমিট আটকাবে
    }

    // সব ঠিক থাকলে true রিটার্ন করবে এবং ফর্ম সাবমিট হয়ে Controller এ যাবে
    return true; 
}