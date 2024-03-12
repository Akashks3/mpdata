<?php
session_start();

// Check if user is logged in
$logged_in = isset($_SESSION['username']);

// If not logged in and trying to access restricted pages, redirect to login
if (!$logged_in && in_array(basename($_SERVER['PHP_SELF']), ['dashard.php', 'message.php', 'vs.php'])) {
    header("Location: login.php");
    exit();
}

// If logged in and trying to access login page, redirect to home
if ($logged_in && basename($_SERVER['PHP_SELF']) == 'login.php') {
    header("Location: font.php");
    exit();
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="font.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<body id="top">

<!-- header
================================================== -->
<header class="s-header">

<nav class="header-nav-wrap">
            <ul class="header-nav">
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'font.php') ? 'current' : ''; ?>"><a class="smoothscroll" href="font.php"><i class="fa-solid fa-house-chimney-user" style="color: hsl(255, 89%, 49%);"> Home</i></a></li>
                <li><a class="smoothscroll"href="message.php"><i class="fa-solid fa-envelope fa-" style="color: #3e04ec;"> Contact Us </i></a></li>
                <li><a class="smoothscroll" href="vs.php"><i class="fa-sharp fa-solid fa-calendar-days fa-" style="color:  hsl(255, 94%, 52%);"> Vaccination </i></a></li>
                <li><a class="smoothscroll" href="login.php"><i class="fa-solid fa-user" style="color: hwb(216 3% 7%);"> Login</i></a></li>
                <li><a class="smoothscroll" href="dashard.php"><i class="fa-solid fa-dashboard" style="color: hwb(216 3% 7%);">Dashboard</i></a></li>
            </ul>
        </nav>
    <a class="header-menu-toggle" href="#0"><span></span></a>

</header> <!-- end s-header -->

        <section>
            <marquee  behavior="alternate" scrolamount="8">vaccination alert for infants</marquee>
    
            <img src="Inkeds_LI.jpg" width="100%">
            </section>
            <section>
                <div class="f">
                    <h1> <center>The purpose of vaccination is to stimulate the immune system to produce an immune response without causing the disease itself.</h1>
                    </center><Br><BR><BR>Vaccination is a process by which a person is administered a vaccine, which contains a weakened or killed form of a microorganism (such as a virus or bacterium) or parts of it. This immune response prepares the body to fight off the real infection if the person is exposed to it in the future, thus providing immunity and preventing or reducing the severity of the disease.
      <h2>Baby Immunization Schedule Table (based on IAPCOI recommendations)</h2>
       

      <div id="container5">
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
  result += "Age in months: " + Math.floor(ageInMonths) + "<br>";
  result += "Age in weeks: " + Math.floor(ageInWeeks) + "<br>";
  result += "Age in days: " + Math.floor(ageInDays) + "<br>";
  
  result += "<h3>Vaccination Schedule:</h3>";
  if (ageInDays < 30) {
    result += "Too young for vaccination. Please consult a pediatrician for guidance.";
  } else if (ageInDays >= 30 && ageInDays < 730) {
    result += "Recommended vaccines: Hepatitis B (1st dose)<br><br><br>";
    result += "Recommended vaccines: Hepatitis B (2nd dose)<br><br><br>";

    result += "Recommended vaccines: Hepatitis B (3rd dose)<br><br><br>";
    result += "Recommended vaccines: Diphtheria, Tetanus, Pertussis (1st dose) <br>Haemophilus influenzae type b (1st dose)<br>Pneumococcal conjugate (1st dose)<br><br><br>";
    result += "Recommended vaccines: Diphtheria, Tetanus, Pertussis (2nd dose) <br>Haemophilus influenzae type b (2nd dose)<br>Pneumococcal conjugate (2nd dose)<br><br><br>";

    result += "Recommended vaccines: Diphtheria, Tetanus, Pertussis (3rd dose) <br> Haemophilus influenzae type b (3rd dose)<br>Pneumococcal conjugate (3rd dose)<br>Rotavirus (1st dose)<br><br><br>";

    result += "Recommended vaccines: Measles, Mumps, Rubella (1st dose)<br> Varicella (1st dose)<br><br><br>";
    result += "Recommended vaccines: Hepatitis A (1st dose)";

    result += "Recommended vaccines: Influenza (annual dose)<br> Meningococcal conjugate (1st dose)<br><br><br>";
  } else {
    result += "Infant vaccination schedule completed. Follow up with pediatrician for further guidance.<br><br><br>";
  }
  
  document.getElementById("result").innerHTML = result;
}

</script>
      </div>
         <br><BR> <h2>Prevention of Diseases</h2> Vaccines are primarily used to prevent infectious diseases. They have been highly effective in controlling and eradicating diseases like smallpox and reducing the incidence of many others, including measles, polio, and influenza.
          
          
          <br><br><BR><img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm716T4jfiGINjMoDxuYQC0KfOCX_eLj2D3wDt7sF1HQ&s " width="50%">
           <br>
           <br> <h2>Primordial prevention </h2>
           <br><li> It seeks to prevent at a very early stage, often before the risk factor is present in the particular context, the activities which encourage the emergence of lifestyles, behaviors and exposure patterns that contribute to increased risk of disease.
        </li><br><li>  For example, a child seeing their parents smoke cigarettes may wrongly consider this a good lifestyle choice for later in life: advising parents to quit smoking in such circumstances can be considered primordial prevention.
        </li>   <h2>Primary prevention</h2>
           <br> <li>Control aimed at reducing the incidence of infectious disease or their risk factors can be considered as primary prevention of infectious disease.
            </li><br><li>  Primary prevention protects health through individual and community-wide measures, including such actions as maintaining good nutritional status, keeping physically fit, immunizing against infectious diseases, providing safe water, and ensuring the proper disposal of feces.
            </li> <h2>Secondary prevention</h2>
        <br>  <li>  Control aimed at reducing the prevalence by shortening the duration of infectious disease can be considered as secondary prevention of infectious disease.
            Secondary prevention corrects departures from good health through individual and community-wide measures, including such actions as screening that result in early detection of disease, prompt antibiotic treatment, and ensuring adequate nutrition.
        </li><br> <li>    It should be noted that such control efforts in secondary prevention in a group of infected individuals may also result in primary prevention in uninfected people.
</li>  <li> For example, prompt and specific drug therapy for tuberculosis patients resulting in sputum conversion to culture-negative status renders them no longer a source of infection to others and treatment of HIV-positive pregnant women reduces transmission of HIV to their newborns.
        </li><h2>Tertiary prevention</h2>
          <br> <li> Control aimed at reducing or even eliminating long-term impairments of infectious disease can be considered as tertiary prevention of infectious disease.
            Tertiary prevention reduces or eliminates disabilities, minimizes suffering, and promotes adjustment to permanent disabilities through such actions as providing orthopedic appliances and its associated rehabilitation for victims of poliomyelitis, counseling and vocational training, and prevention of opportunistic infections.
        </li> <br><li>For example, the prevention of opportunistic infections in HIV infection can be considered as tertiary prevention.
            </li>
            <br><br><br>
          <h2>Safety and Efficacy</h2> Vaccines undergo rigorous testing in clinical trials to ensure their safety and efficacy before they are approved for use. Continuous monitoring of vaccines is also carried out to detect and respond to any potential safety concerns.
<br><br><br>
<img src="https://d3i71xaburhd42.cloudfront.net/33c0f550741c955a404bb611a60ef8183a00d9c8/3-Figure1-1.png" width="50%" alt="center">
<br><br><br>
<h2> Global Vaccination Efforts</h2> Vaccination is a critical component of public health efforts worldwide. Organizations like the World Health Organization (WHO) and UNICEF work to ensure equitable access to vaccines, especially in low- and middle-income countries where preventable diseases still pose significant threats to health.
<br><br><br>
<img src="https://www.who.int/images/default-source/health-topics/vaccines-and-immunization/2-admiistraion-par-dr-salimata-drabo-oms-burkina.jpeg?sfvrsn=45c7880_1" width="50%"><br><Br><BR> <h1> Additional Common Questions</h1>
           <br><br> <h2>Why is my immune system so weak?</h2>
          <br><br><br>  Many different medical conditions, medications and lifestyle factors can weaken your immune system and prevent it from defending you as well as it should. If you feel like you’re always sick or have symptoms that never go away, make an appointment with a healthcare provider. They’ll determine if you have a weak immune system and what’s causing the issue.
          <br><br><br>  <h2>When are COVID-19 vaccines recommended for children and teenagers?</h2>
          <br><br><br>   Everyone 6 months old and older can get the COVID-19 vaccine, and it’s recommended that all eligible kids and teens get vaccinated. The number of doses your child needs will vary based on their age, vaccination status and type of vaccine that’s used. Talk to your child’s doctor about which COVID-19 vaccine is best for your child.  
          <br><br><br>       <h2> What should I do if my child is behind on their vaccination schedule?</h2>
                   <br><br><br>         Don’t worry. There are catch-up recommendations in place. But since each vaccine has its own guidelines, talk with your child’s doctor to make a plan for getting back on schedule. They can talk with you about your child’s medical and immunization history, give you more information on specific vaccines and catch-up guidelines, and discuss any concerns or questions you may have.               
                   <br><br><br> <h2>A note from Cleveland Clinic</h2>  
                   <br><br><br>   Like a home security system that guards against intruders and sounds the alarm when needed, your immune system is on-call and ready to signal for help when it perceives a threat. The cells and organs of your immune system work together to locate, identify and remove germs and other invaders to keep you safe and healthy. But guarding isn’t your immune system’s only duty. Its crew also heals the damage that intruders cause, just like you’d need someone to repair a broken window or door.
            But even the best security system can malfunction sometimes. Autoimmune diseases or other conditions can disrupt your body’s ability to defend itself against intruders or repair damage. That’s why it’s important to see a healthcare provider regularly for checkups. They can find problems early and, if needed, provide treatment to keep your immune system working at its best.
<br><br><br>
<h1>
        </div></section>
        <div class="container">
        <div class="container3">
      <div class="box">
        <h1> contact  us </h1>
</h1><br><form action="https://api.web3forms.com/submit" method="POST">

    <input type="hidden" name="access_key" value="347ba936-0b3f-4573-8655-5b6e68e4f2c1">

      <br>
  <br>
        <label>user name</label>
        <br>
  <input type="text" name=" user name" placeholder="user name" id="username" required>
  <br>
  <br>
  <label>To</label>
  <br>
  <input type="email" name="email" placeholder="email" id="email"required>
</div>
<label>say the feedback to here</label>
<br>
    <textarea type="message" name="compose email" >
    </textarea>
    <br>
    <input type="submit" class="button" value=" send">
  </div>
</form>

<script src="https://web3forms.com/client/script.js" async defer></script>
<br>
<br><br>
        <a href="a.php">Privacy</a>
     <br>
     <br>
        <a href="t.php">Terms and Conditions</a>
<br>
<br>
<div class="logo"><i class="fa-solid fa-v" style="color: #1cf2ee;"></i><i class="fa-solid fa-info" style="color: #2a416a;"></i><i class="fa-solid fa-bullhorn " style="color: #fffb06;"></i></div><br><br> <i class="fa-regular fa-copyright fa-2xl" style="color: #eff2ee;"></i>   copyright   Global Vaccination
        All Rights Reserved.
       
        </div>

      </body>
</html>