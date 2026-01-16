<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request</title>


<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Arial, sans-serif;
}

/* PAGE */
body{
    background: #e6eef0;
    padding: 40px 0;
    color: #1F2933;
}

/* CARD */
#card{
    width: 850px;
    margin: auto;
    background: #ffffff;
    border-radius: 14px;
    padding: 35px 45px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

/* LOGO */
#section{
    text-align: center;
    margin-bottom: 25px;
}

#logo{
    width: 130px;
}

/* HEADINGS */
h4{
    margin-bottom: 6px;
    font-size: 15px;
    color: #1F2933;
}

/* LABEL */
label{
    font-size: 14px;
    font-weight: 600;
}

/* INPUT COMMON */
input[type="text"],
input[type="tel"],
input[type="date"],
textarea,
select{
    width: 100%;
    padding: 10px 12px;
    margin-top: 6px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-size: 14px;
}

/* TEXTAREA */
textarea{
    resize: vertical;
}

/* CHECKBOX / RADIO */
input[type="checkbox"],
input[type="radio"]{
    margin-right: 6px;
}

/* TWO COLUMN */
       .two-col{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    margin-bottom: 20px;
}

/* BUTTON */
    button{
    width: 100%;
     padding: 14px;
    background: #0288B8;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

button:hover{
    background: #026F96;
}



     .error{
    color: red;
    font-size: 13px;
    margin-top: 4px;
    display: block;
}
</style>

</head>
<body>
    
         

<!-- CARD -->
                      <div id="card">

    <!-- LOGO -->
        <div id="section">
            <img src="../../View/logo/logo.png" id="logo" alt="Logo">
        </div>

    <!-- FORM -->
    <form action="../../Controller/servicerequestcontroller.php" method="POST" onsubmit="return validateForm()" novalidate>


        <!-- NAME + MOBILE -->
        <div class="two-col">
            <div>
                <h4><label for="customer_name">Full Name</label></h4>
                <input type="text" id="customer_name" name="customer_name"
                       placeholder="Enter your full name" required>

                        <small id="nameError" class="error"></small>
            </div>

            <div>
                <h4><label for="mobile_number">Mobile Number</label></h4>
                <input type="tel" id="mobile_number" name="mobile_number"
                       placeholder="01XXXXXXXXX"
                        required>

                        <small id="mobileError" class="error"></small>
            </div>
        </div>

        <!-- SERVICE TYPE -->
             <h4>Service Type</h4>
                       <input type="checkbox" id="service_ac" name="service_type[]" value="AC Repair">
                      <label for="service_ac">AC Repair</label><br>

                       <input type="checkbox" id="service_electrical" name="service_type[]" value="Electrical">
                       <label for="service_electrical">Electrical</label><br>

                          <input type="checkbox" id="service_plumbing" name="service_type[]" value="Plumbing">
                        <label for="service_plumbing">Plumbing</label><br>

                        <input type="checkbox" id="service_refrigerator" name="service_type[]" value="Refrigerator">
                         <label for="service_refrigerator">Refrigerator</label><br>

                        <input type="checkbox" id="service_washing" name="service_type[]" value="Washing Machine">
                         <label for="service_washing">Washing Machine</label>

                          <small id="serviceError" class="error"></small>

              <br><br>

                   <!-- PROBLEM DESCRIPTION -->
                         <h4><label for="problem_description">Problem Description</label></h4>
                         <textarea id="problem_description" name="problem_description" rows="4" 
                          required placeholder="Describe your problem clearly"></textarea>
                         
                         <small id="problemError" class="error"></small>
        <br><br>

                <!-- SERVICE ADDRESS -->
                     <h4><label for="service_address">Service Address</label></h4>
                         <textarea id="service_address" name="service_address" rows="3" 
                          required placeholder="House / Road / Thana / City / District"></textarea>
                      
                          <small id="addressError" class="error"></small>
        <br><br>

        <!-- DATE + TIME -->
        <div class="two-col">
            <div>
                <h4><label for="preferred_date">Preferred Date</label></h4>
                <input type="date" id="preferred_date" name="preferred_date" required>

                <small id="dateError" class="error"></small>
            </div>

            <div>
                <h4><label for="preferred_time">Preferred Time</label></h4>
                <select id="preferred_time" name="preferred_time" required>
                    <option value="">Select time</option>
                    <option value="Morning">Morning (9AM – 12PM)</option>
                    <option value="Afternoon">Afternoon (12PM – 4PM)</option>
                    <option value="Evening">Evening (4PM – 8PM)</option>
                </select>

                <small id="timeError" class="error"></small>
            </div>
        </div>

        <!-- URGENCY -->
                       <h4>Urgency</h4>
                         <input type="radio" id="urgency_normal" name="urgency" value="Normal" checked>
                          <label for="urgency_normal">Normal</label><br>

                      <input type="radio" id="urgency_urgent" name="urgency" value="Urgent">
                        <label for="urgency_urgent">Urgent</label>

                 <br><br>


            

        <!-- SUBMIT -->
        <button type="submit">Submit Request</button>

    </form>

       <!-- JS validation file -->
<script src="../../View/js/custom_service_request.js"></script>
</div>

</body>
</html>