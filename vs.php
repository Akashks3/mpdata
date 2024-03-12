<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Platform</title>
    <link href="st.css" rel='stylesheet'>

</head>
<body>
<div id="container">
  <h2>Infant Vaccination Schedule</h2>
  <br>
  <br>
  
  <label for="name"> Child's Name:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <br><br>

  <label for="birthdate">Enter infant's birthdate:</label>
  <input type="date" id="birthdate">
  <br>
  <br><br>
  <button onclick="calculateVaccinationSchedule()">Get your child Vaccination Schedule</button>
  <div id="result"></div>
</div>

<script>
function calculateVaccinationSchedule() {
  var birthdateInput = document.getElementById("birthdate").value;
  var birthdate = new Date(birthdateInput);
  var currentDate = new Date();
  
  var ageInMilliseconds = currentDate - birthdate;
  var ageInSeconds = ageInMilliseconds / 1000;
  var ageInMinutes = ageInSeconds / 60;
  var ageInHours = ageInMinutes / 60;
  var ageInDays = ageInHours / 24;
  var ageInWeeks = ageInDays / 7;
  var ageInMonths = ageInDays / 30.44; // Approximate months in a year
  var ageInYears = ageInDays / 365.25; // Approximate days in a year
  
  var result = "<h3>Infant's Age:</h3>";
  result += "<table>";
  result += "<tr><th>Age in months</th><td>" + Math.floor(ageInMonths) + "</td></tr>";
  result += "<tr><th>Age in weeks</th><td>" + Math.floor(ageInWeeks) + "</td></tr>";
  result += "<tr><th>Age in days</th><td>" + Math.floor(ageInDays) + "</td></tr>";
  result += "</table>";
  
  result += "<h3>Vaccination Schedule:</h3>";
  result += "<table>";
  if (ageInDays < 30) {
    result += "<tr><th>BCG vaccines - tuberculosis</th><td>At Birth day - Dose: 0 dose</td></tr>";
  } else if (ageInDays >= 30 && ageInDays < 60) {
    result += "<tr><th>Hepatitis B (1st dose)</th><td>Maximum age: till one year ago<br>Dose: 0.05ml until 1 month, 0.1ml Beyond age 1 month<br>Route: Intra-dermal<br>Site: Upper Arm - Left</td></tr>";
  } else if (ageInDays >= 60 && ageInDays < 90) {
    result += "<tr><th>Hepatitis B (2nd dose)</th><td>Maximum age: within 24 hours<br>Dose: 0.5ml<br>Route: Intra-muscular<br>Site: Antero-lateral side of mid-thigh-left</td></tr>";
  } else if (ageInDays >= 90 && ageInDays < 120) {
    result += "<tr><th>Hepatitis B (3rd dose)</th><td></td></tr>";
  } else if (ageInDays >= 120 && ageInDays < 180) {
    result += "<tr><th>Diphtheria, Tetanus, Pertussis (1st dose)</th><td>Haemophilus influenzae type b (1st dose)<br>Pneumococcal conjugate (1st dose)</td></tr>";
  } else if (ageInDays >= 180 && ageInDays < 240) {
    result += "<tr><th>Diphtheria, Tetanus, Pertussis (2nd dose)</th><td>Haemophilus influenzae type b (2nd dose)<br>Pneumococcal conjugate (2nd dose)</td></tr>";
  } else if (ageInDays >= 240 && ageInDays < 365) {
    result += "<tr><th>Diphtheria, Tetanus, Pertussis (3rd dose)</th><td>Haemophilus influenzae type b (3rd dose)<br>Pneumococcal conjugate (3rd dose)<br>Rotavirus (1st dose)</td></tr>";
  } else if (ageInDays >= 365 && ageInDays < 455) {
    result += "<tr><th>Measles, Mumps, Rubella (1st dose)</th><td>Varicella (1st dose)<br>Maximum age</td></tr>";
  } else if (ageInDays >= 455 && ageInDays < 545) {
    result += "<tr><th>Hepatitis A (1st dose)</th><td></td></tr>";
  } else if (ageInDays >= 545 && ageInDays < 730) {
    result += "<tr><th>Influenza (annual dose)</th><td>Meningococcal conjugate (1st dose)</td></tr>";
  } else {
    result += "<tr><th>Infant vaccination schedule completed.</th><td>Follow up with pediatrician for further guidance.</td></tr>";
  }
  result += "</table>";
  
  document.getElementById("result").innerHTML = result;
}
</script>
</body>
</html>
