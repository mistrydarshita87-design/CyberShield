<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = "";

$conn = new mysqli("localhost","root","","cybershield");

if($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

if(isset($_POST['submit_feedback'])){
    
$full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
$rating = mysqli_real_escape_string($conn,$_POST['rating']);
$learned = mysqli_real_escape_string($conn,$_POST['learned']);
$favorite_page = mysqli_real_escape_string($conn,$_POST['favorite_page']);
$suggestions = mysqli_real_escape_string($conn,$_POST['suggestions']);

$sql="INSERT INTO feedback(full_name,rating,learned,favorite_page,suggestions)
VALUES('$full_name','$rating','$learned','$favorite_page','$suggestions')";

if($conn->query($sql)){
$message="✅ Thank you! Your feedback has been submitted successfully.";
}
else{
die("SQL Error: " . $conn->error);
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CyberShield | Contact</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#0A192F;
color:white;
overflow-x:hidden;
}

/* HEADER */

header{
background:#112240;
padding:20px 8%;
position:sticky;
top:0;
z-index:100;
}

nav{
display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
}

.logo{
font-size:28px;
font-weight:bold;
color:#64FFDA;
transition:.3s;
cursor:pointer;
}

.logo:hover{
    transform:scale(1.05);
    text-shadow:0 0 15px #64FFDA;
}

.logo i{
margin-right:8px;
}


nav ul{
display:flex;
list-style:none;
flex-wrap:wrap;
}

nav ul li{
margin-left:25px;
}

nav ul li a{
text-decoration:none;
color:white;
transition:.3s;
}

nav ul li a:hover{
color:#64FFDA;
}

nav ul li a.active{
color:#64FFDA;
border-bottom:2px solid #64FFDA;
}

/* HERO */

.hero{
text-align:center;
padding:70px 8%;
background:linear-gradient(135deg,#112240,#0A192F);
}

.hero h1{
font-size:46px;
margin-bottom:12px;
}

.hero span{
color:#64FFDA;
}

.hero p{
max-width:700px;
margin:auto;
line-height:1.7;
color:#d1d5db;
}

/* SECTION TITLE */

.section-title{
text-align:center;
font-size:30px;
margin:50px 0 25px;
color:#64FFDA;
}

/* GRID */

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:20px;
padding:0 8%;
}

.card{
background:#112240;
padding:20px;
border-radius:12px;
border:1px solid rgba(100,255,218,0.15);
transition:.3s;
text-align:center;
}

.card:hover{
transform:translateY(-10px);
border-color:#64FFDA;
box-shadow:0 0 25px rgba(100,255,218,0.2);
}

.card i{
font-size:35px;
color:#64FFDA;
margin-bottom:12px;
}

.card h3{
margin-bottom:8px;
}

.card p{
color:#d1d5db;
font-size:14px;
line-height:1.6;
margin-bottom:10px;
}

.card a{
color:#64FFDA;
text-decoration:none;
font-weight:bold;
}

/* FEEDBACK FORM */

.feedback{
background:#112240;
margin:45px 8%;
padding:35px;
border-radius:15px;
border:1px solid rgba(100,255,218,.15);
}

.feedback h2{
text-align:center;
color:#64FFDA;
margin-bottom:10px;
}

.feedback p{
text-align:center;
color:#d1d5db;
margin-bottom:30px;
line-height:1.7;
}

.feedback form{
display:flex;
flex-direction:column;
gap:18px;
}

.feedback input,
.feedback select,
.feedback textarea{
width:100%;
padding:14px;
background:#0A192F;
border:1px solid rgba(100,255,218,.25);
border-radius:8px;
color:white;
font-size:15px;
outline:none;
}

.feedback textarea{
resize:vertical;
min-height:140px;
}

.feedback input:focus,
.feedback select:focus,
.feedback textarea:focus{
border-color:#64FFDA;
box-shadow:0 0 12px rgba(100,255,218,.25);
}

.feedback button{
padding:15px;
background:#64FFDA;
border:none;
border-radius:8px;
font-size:17px;
font-weight:bold;
cursor:pointer;
transition:.3s;
color:#0A192F;
}

.feedback button:hover{
transform:translateY(-3px);
box-shadow:0 0 20px rgba(100,255,218,.35);
}

/* ABOUT */

.about,
.mission{
background:#112240;
margin:40px 8%;
padding:25px;
border-radius:12px;
text-align:center;
border:1px solid rgba(100,255,218,.15);
}

.about h2,
.mission h2{
color:#64FFDA;
margin-bottom:10px;
}

.about p,
.mission p{
color:#d1d5db;
line-height:1.7;
}

/* FOOTER */

footer{
background:black;
padding:25px;
text-align:center;
margin-top:40px;
}

footer h3{
color:#64FFDA;
margin-bottom:10px;
}

footer p{
color:#d1d5db;
font-size:14px;
}

/* SCROLL */

.reveal{
opacity:0;
transform:translateY(60px);
transition:.8s;
}

.reveal.active{
opacity:1;
transform:translateY(0);
}

</style>
</head>

<body>

<header>

<nav>

<div class="logo">
<i class="fas fa-shield-alt"></i> CyberShield
</div>

<ul>

<li><a href="/Cybershield/index.php">Home</a></li>
<li><a href="/Cybershield/threats.html">Threats</a></li>
<li><a href="/Cybershield/tips.html">Tips</a></li>
<li><a href="/Cybershield/tools.html">Tools</a></li>
<li><a href="/Cybershield/quiz.php">Quiz</a></li>
<li><a href="/Cybershield/resources.html">Resources</a></li>
<li><a href="/Cybershield/contact.php" class="active">Contact</a></li>

</ul>

</nav>

</header>

<section class="hero reveal">

<h1>CyberShield <span>Support & Feedback</span></h1>

<p>
Need cybersecurity guidance or want to share your learning experience?
We'd love to hear your feedback and suggestions.
</p>

</section>

<h2 class="section-title">Contact Information</h2>

<div class="grid">

<div class="card reveal">

<i class="fas fa-envelope"></i>

<h3>Email Us</h3>

<p>cybershieldawareness@gmail.com</p>

<a href="mailto:cybershieldawareness@gmail.com">Send Email</a>

</div>

<div class="card reveal">

<i class="fas fa-phone"></i>

<h3>Phone Support</h3>

<p>+91 84010 65778</p>

<a href="tel:+918401065778">Call Now</a>

</div>

<div class="card reveal">

<i class="fas fa-clock"></i>

<h3>Response Time</h3>

<p>Within 24–48 Hours</p>

</div>

</div>

<h2 class="section-title">Cyber Emergency Resources</h2>

<div class="grid">

<div class="card reveal">

<i class="fas fa-phone-volume"></i>

<h3>Cyber Fraud Helpline</h3>

<p>Report Cyber Fraud Immediately</p>

<p><b>1930</b></p>

</div>

<div class="card reveal">

<i class="fas fa-shield-alt"></i>

<h3>Cyber Crime Portal</h3>

<p>Official Government Portal</p>

<a href="https://cybercrime.gov.in" target="_blank">Visit Portal</a>

</div>

</div>

<section class="feedback reveal">

<h2>Share Your Learning & Feedback</h2>

<p>
Your opinion matters! Tell us what you learned from CyberShield and help us improve our cybersecurity awareness platform.
</p>

<form method="POST">

<input
type="text"
name="full_name"
placeholder="Enter Your Full Name"
required>

<select name="rating" required>

<option value="">Rate Your Experience</option>

<option>⭐⭐⭐⭐⭐ Excellent</option>

<option>⭐⭐⭐⭐ Very Good</option>

<option>⭐⭐⭐ Good</option>

<option>⭐⭐ Average</option>

<option>⭐ Needs Improvement</option>

</select>

<textarea
name="learned"
placeholder="What did you learn from CyberShield?"
required></textarea>

<select name="favorite_page" required>

<option value="">Which page helped you the most?</option>

<option>Threats</option>

<option>Tips</option>

<option>Tools</option>

<option>Quiz</option>

<option>Resources</option>

</select>

<textarea
name="suggestions"
placeholder="Share your suggestions for improving CyberShield..."></textarea>

<button type="submit" name="submit_feedback">
Submit Feedback
</button>

</form>

</section>

<?php
if($message!=""){
?>

<div style="width:84%;margin:30px auto;background:#112240;padding:18px;border-radius:10px;border-left:5px solid #64FFDA;text-align:center;font-weight:bold;color:#64FFDA;">
<?php echo $message; ?>
</div>

<?php
}
?>

<!-- ABOUT -->

<div class="about reveal">

<h2>About CyberShield</h2>

<p>

CyberShield is a cybersecurity awareness platform designed to educate users about online threats, safe browsing, password protection, phishing attacks and digital safety. Our goal is to help everyone become a smarter and safer internet user.

</p>

</div>

<!-- MISSION -->

<div class="mission reveal">

<h2>Our Mission</h2>

<p>

Our mission is to spread cybersecurity awareness, encourage safe online habits, and help users protect themselves against cyber threats through simple learning resources and interactive activities.

</p>

</div>

<!-- FOOTER -->

<footer class="reveal">

<h3>CyberShield</h3>

<p>Stay Safe. Stay Smart. Stay Secure.</p>

<p>© 2026 CyberShield. All Rights Reserved.</p>

</footer>

<script>

const reveals=document.querySelectorAll(".reveal");

const observer=new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("active");

}

});

},{
threshold:0.2
});

reveals.forEach(item=>{

observer.observe(item);

});

</script>

</body>
</html>