<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CyberShield | Quiz</title>

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
}

nav ul li{
margin-left:25px;
}

nav ul li a{
text-decoration:none;
color:white;
padding-bottom:4px;
transition:.3s;
}

nav ul li a:hover{
color:#64FFDA;
}

nav ul li a.active{
border-bottom:2px solid #64FFDA;
color:#64FFDA;
}

/* HERO */
.hero{
text-align:center;
padding:60px 8% 30px;
}

.hero h1{
font-size:48px;
}

.hero span{
color:#64FFDA;
}

.hero p{
font-size:18px;
color:#d1d5db;
margin-top:10px;
margin-bottom:25px;
}


/* NAME BOX */
.name-box{
display:inline-block;
background:#0A192F;
padding:10px;
margin-top:15px;
border-radius:8px;
border:1px solid rgba(100,255,218,0.3);
}

.name-box input{
padding:8px;
border:none;
outline:none;
background:transparent;
color:white;
width:180px;
text-align:center;
}

/* QUIZ */
.quiz-container{
width:85%;
margin:30px auto;
}

.q-box{
background:#112240;
padding:18px;
margin-bottom:15px;
border-radius:12px;
border:1px solid rgba(100,255,218,0.15);
transition:.3s;
}

.q-box:hover{
transform:translateY(-6px);
border-color:#64FFDA;
box-shadow:0 0 20px rgba(100,255,218,0.2);
}

.q-box p{
font-weight:bold;
margin-bottom:10px;
}

/* OPTIONS */
.option{
display:block;
margin:6px 0;
color:#d1d5db;
}

/* DISABLED */
.disabled{
opacity:0.4;
pointer-events:none;
}

/* BUTTON */
.btn{
background:#64FFDA;
color:black;
padding:12px 25px;
border:none;
border-radius:8px;
cursor:pointer;
margin-top:20px;
}

/* FOOTER */
footer{
background:black;
padding:25px;
text-align:center;
margin-top:50px;
}

footer h3{
color:#64FFDA;
margin-bottom:10px;
}

footer p{
color:#d1d5db;
}

</style>
</head>

<body>

<!-- HEADER -->
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
<li><a href="/Cybershield/quiz.php" class="active">Quiz</a></li>
<li><a href="/Cybershield/resources.html">Resources</a></li>
<li><a href="/Cybershield/contact.php">Contact</a></li>
</ul>

</nav>
</header>

<!-- HERO -->
<section class="hero">
<h1>CyberShield <span> Knowledge Check </span></h1>

<div class="name-box">
<input type="text" id="username" placeholder="Enter Your Name" onkeyup="checkName()">
</div>
</section>

<!-- QUIZ -->
<div class="quiz-container">

<div id="quizArea" class="disabled">

<!-- Q1 -->
<div class="q-box">
<p>1. What is phishing in cybersecurity?</p>
<label class="option"><input type="radio" name="q1" value="1"> A) Fraudulent attempt to steal sensitive information using fake emails or websites</label>
<label class="option"><input type="radio" name="q1" value="0"> B) Antivirus software tool</label>
<label class="option"><input type="radio" name="q1" value="0"> C) Hardware device used in networking</label>
<label class="option"><input type="radio" name="q1" value="0"> D) Programming language</label>
</div>

<!-- Q2 -->
<div class="q-box">
<p>2. What is malware and how does it affect a system?</p>
<label class="option"><input type="radio" name="q2" value="1"> A) Malicious software that damages, steals, or disrupts system data</label>
<label class="option"><input type="radio" name="q2" value="0"> B) A secure encryption method</label>
<label class="option"><input type="radio" name="q2" value="0"> C) A web browser extension</label>
<label class="option"><input type="radio" name="q2" value="0"> D) A firewall configuration tool</label>
</div>

<!-- Q3 -->
<div class="q-box">
<p>3. What is ransomware attack?</p>
<label class="option"><input type="radio" name="q3" value="1"> A) Malware that locks files and demands payment to unlock them</label>
<label class="option"><input type="radio" name="q3" value="0"> B) Antivirus update system</label>
<label class="option"><input type="radio" name="q3" value="0"> C) Cloud storage backup tool</label>
<label class="option"><input type="radio" name="q3" value="0"> D) Network monitoring software</label>
</div>

<!-- Q4 -->
<div class="q-box">
<p>4. What is social engineering in cybersecurity?</p>
<label class="option"><input type="radio" name="q4" value="1"> A) Manipulating people into revealing confidential information</label>
<label class="option"><input type="radio" name="q4" value="0"> B) Writing secure code</label>
<label class="option"><input type="radio" name="q4" value="0"> C) Installing operating systems</label>
<label class="option"><input type="radio" name="q4" value="0"> D) Hardware upgrading process</label>
</div>

<!-- Q5 -->
<div class="q-box">
<p>5. What makes a strong password?</p>
<label class="option"><input type="radio" name="q5" value="1"> A) Combination of letters, numbers, and symbols</label>
<label class="option"><input type="radio" name="q5" value="0"> B) Your name and birthdate</label>
<label class="option"><input type="radio" name="q5" value="0"> C) A single simple word</label>
<label class="option"><input type="radio" name="q5" value="0"> D) Short numeric code</label>
</div>

<!-- Q6 -->
<div class="q-box">
<p>6. What is a DDoS attack?</p>
<label class="option"><input type="radio" name="q6" value="1"> A) Overloading a server with massive traffic to make it unavailable</label>
<label class="option"><input type="radio" name="q6" value="0"> B) Installing antivirus software</label>
<label class="option"><input type="radio" name="q6" value="0"> C) Updating system drivers</label>
<label class="option"><input type="radio" name="q6" value="0"> D) Cleaning browser cache</label>
</div>

<!-- Q7 -->
<div class="q-box">
<p>7. Why should OTP never be shared?</p>
<label class="option"><input type="radio" name="q7" value="1"> A) It gives access to your account and sensitive data</label>
<label class="option"><input type="radio" name="q7" value="0"> B) It is a random number only</label>
<label class="option"><input type="radio" name="q7" value="0"> C) It is not important</label>
<label class="option"><input type="radio" name="q7" value="0"> D) It is public information</label>
</div>

<!-- Q8 -->
<div class="q-box">
<p>8. What is safe browsing practice?</p>
<label class="option"><input type="radio" name="q8" value="1"> A) Avoid suspicious websites and unknown links</label>
<label class="option"><input type="radio" name="q8" value="0"> B) Click every pop-up ad</label>
<label class="option"><input type="radio" name="q8" value="0"> C) Download files from unknown sources</label>
<label class="option"><input type="radio" name="q8" value="0"> D) Share login details online</label>
</div>

<!-- Q9 -->
<div class="q-box">
<p>9. What is antivirus software used for?</p>
<label class="option"><input type="radio" name="q9" value="1"> A) Detecting and removing malicious software</label>
<label class="option"><input type="radio" name="q9" value="0"> B) Creating malware</label>
<label class="option"><input type="radio" name="q9" value="0"> C) Increasing internet speed</label>
<label class="option"><input type="radio" name="q9" value="0"> D) Designing websites</label>
</div>

<!-- Q10 -->
<div class="q-box">
<p>10. What is the risk of using public WiFi?</p>
<label class="option"><input type="radio" name="q10" value="1"> A) Hackers can intercept your personal data</label>
<label class="option"><input type="radio" name="q10" value="0"> B) It is always encrypted and safe</label>
<label class="option"><input type="radio" name="q10" value="0"> C) It improves device security</label>
<label class="option"><input type="radio" name="q10" value="0"> D) It increases battery life</label>
</div>

<!-- Q11 -->
<div class="q-box">
<p>11. What is two-factor authentication (2FA)?</p>
<label class="option"><input type="radio" name="q11" value="1"> A) Extra layer of security using verification step</label>
<label class="option"><input type="radio" name="q11" value="0"> B) Single password login</label>
<label class="option"><input type="radio" name="q11" value="0"> C) Antivirus system</label>
<label class="option"><input type="radio" name="q11" value="0"> D) Internet speed booster</label>
</div>

<!-- Q12 -->
<div class="q-box">
<p>12. Why is cyber awareness important?</p>
<label class="option"><input type="radio" name="q12" value="1"> A) Helps protect individuals from online threats and scams</label>
<label class="option"><input type="radio" name="q12" value="0"> B) Helps in hacking systems</label>
<label class="option"><input type="radio" name="q12" value="0"> C) Helps delete data</label>
<label class="option"><input type="radio" name="q12" value="0"> D) Helps break security systems</label>
</div>

</div>

<button class="btn" onclick="submitQuiz()">Submit Quiz</button>

</div>

<!-- FOOTER -->
<footer>

<h3>CyberShield</h3>

<p>Stay Safe. Stay Smart. Stay Secure.</p>

<p>© 2026 CyberShield. All Rights Reserved.</p>

</footer>

<script>

/* ENABLE ONLY AFTER NAME */
function checkName(){
let name = document.getElementById("username").value;
let quiz = document.getElementById("quizArea");

if(name.trim().length > 0){
quiz.classList.remove("disabled");
}else{
quiz.classList.add("disabled");
}
}

/* SUBMIT */
function submitQuiz(){

let name = document.getElementById("username").value;

if(name.trim()==""){
alert("Please enter your name first!");
return;
}

let score = 0;

for(let i=1;i<=12;i++){
let q = document.querySelector('input[name="q'+i+'"]:checked');
if(q && q.value=="1") score++;
}

fetch("save_result.php",{
method:"POST",
headers:{"Content-Type":"application/x-www-form-urlencoded"},
body:"name="+name+"&score="+score
});

alert("Score: "+score+"/12");
}

</script>

</body>
</html>