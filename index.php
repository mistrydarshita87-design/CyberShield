<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CyberShield</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

html{
    scroll-behavior:smooth;
}

::selection{
    background:#64FFDA;
    color:#0A192F;
}

body{
background:#0A192F;
color:white;
overflow-x:hidden;
}

/* NAVBAR */

header{
background:rgba(17,34,64,0.85);
backdrop-filter:blur(12px);
-webkit-backdrop-filter:blur(12px);
padding:20px 8%;
top:0;
z-index:100;
border-bottom:1px solid rgba(100,255,218,.15);
transition:.3s;
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
margin-left:30px;
}

nav ul li a{
text-decoration:none;
color:white;
font-size:17px;
transition:.3s;
}

nav ul li a.active{
color:#64FFDA !important;
font-weight:bold;
border-bottom:2px solid #64FFDA;
padding-bottom:4px;
}

nav ul li a:hover{
color:#64FFDA;
}

/* HERO */

.hero{
display:flex;
justify-content:space-between;
align-items:center;
padding:60px 8%;
min-height:90vh;
gap:60px;
}

.hero-text{
flex:1;
opacity:0;
transform:translateX(-60px);
animation:fadeleft 1.2s ease forwards;
}

@keyframes fadeleft{
    from{
        opacity:0;
        transform:translatex(-60px);
    }

    to{
        opacity:1;
        transform:translateX(0);
    }
}
.hero-text h1{
font-size:58px;
line-height:1.1;
margin-bottom:20px;
}

.hero-text span{
color:#64FFDA;
}

.hero-text p{
font-size:20px;
line-height:1.8;
margin-bottom:30px;
color:#d1d5db;
}

.btn{
background:#64FFDA;
color:black;
border:none;
padding:14px 30px;
border-radius:8px;
font-weight:bold;
cursor:pointer;
margin-right:10px;
transition:.3s;
overflow:hidden;
position:relative;
}

.btn:hover{
transform:translateY(-3px);
box-shadow:0 0 20px #64FFDA;
}

.btn2{
background:transparent;
color:white;
border:2px solid #64FFDA;
padding:12px 30px;
border-radius:8px;
cursor:pointer;
}

.btn2:hover{
    background:#64FFDA;
    color:#0A192F;
    box-shadow:0 0 20px #64FFDA;
    transition:.3s;
}

.hero-image{
flex:1;
text-align:center;
}

.hero-image img{
width:500px;
max-width:100%;
border-radius:20px;
animation:float 4s ease-in-out infinite;
box-shadow:0 0 35px rgba(100,255,218,18);
transition:.4s;
}

.hero-image img:hover{
    box-shadow:0 0 55px rgba(100,255,218,.45);
}

@keyframes float{

    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-15px);
        }

    100%{
        transform:translateY(0);
    }
}

/* STATS */

.stats{
padding:80px 8%;
text-align:center;
}

.stats h2{
font-size:38px;
margin-bottom:40px;
}

.cards{
display:flex;
justify-content:center;
gap:25px;
flex-wrap:wrap;
}

.card{
background:#112240;
padding:30px;
width:250px;
border-radius:15px;
transition:.3s;
box-shadow:0 0 15px rgba(0,0,0,.2);
border:1px solid rgba(100,255,218,0.15);
cursor:pointer;
}

.card:hover{
transform:translateY(-8px);
border-color:#64FFDA;
box-shadow:0 0 30px rgba(100,255,218,0.25);
}

.card h3{
font-size:35px;
color:#64FFDA;
margin-bottom:10px;
}

/* FEATURES */

.features{
padding:80px 8%;
text-align:center;
}

.features h2{
font-size:38px;
margin-bottom:40px;
}

.feature-icon{
font-size:45px;
color:#64FFDA;
margin-bottom:15px;
}

/* CTA */

.cta{
background:#112240;
text-align:center;
padding:90px 20px;
margin-top:40px;
}

.cta h2{
font-size:42px;
margin-bottom:25px;
}

/* FOOTER */

footer{
background:black;
padding:25px 8%;
}

.footer-content{
display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
gap:20px;
}

.footer-content h3{
color:#64FFDA;
}

.footer-links a{
color:white;
text-decoration:none;
margin:0 10px;
}

.footer-links a:hover{
color:#64FFDA;
}

/* SCROLL REVEAL */

.reveal{
    opacity:0;
    transform:translateY(60px);
    transition:all .8s ease;
}

.reveal.active{
    opacity:1;
    transform:translateY(0);
}

/* MOBILE */

@media(max-width:768px){

nav{
flex-direction:column;
}

nav ul{
margin-top:15px;
flex-wrap:wrap;
justify-content:center;
}

.hero{
flex-direction:column;
text-align:center;
padding:50px 20px;
}

.hero-text h1{
font-size:42px;
}

.hero-image img{
width:320px;
}

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
<li><a href="/Cybershield/index.php" class="active">Home</a></li>
<li><a href="/Cybershield/threats.html">Threats</a></li>
<li><a href="/Cybershield/tips.html">Tips</a></li>
<li><a href="/Cybershield/tools.html">Tools</a></li>
<li><a href="/Cybershield/quiz.php">Quiz</a></li>
<li><a href="/Cybershield/resources.html">Resources</a></li>
<li><a href="/Cybershield/contact.php">Contact</a></li>
</ul>

</nav>

</header>

<!-- HERO -->

<section class="hero reveal">

<div class="hero-text">

<h1>
Protect Your
<span>Digital Life</span>
Against Cyber Threats
</h1>

<p>
Learn cyber security, identify threats, and protect your
digital life from phishing attacks, malware, ransomware,
and online scams.
</p>

<a href="tools.html">
<button class="btn">Explore Tools</button>
</a>
<a href="threats.html">
<button class="btn2">Learn More</button>
</a>

</div>

<div class="hero-image">

<img src="images/cybersecurity.png.jpg" alt="Cyber Security">

</div>

</section>

<!-- STATS -->

<section class="stats reveal">

<h2>Cyber Security Statistics</h2>

<div class="cards">

<div class="card reveal">
<h3>80%</h3>
<p>Attacks happen because of weak passwords.</p>
</div>

<div class="card reveal">
<h3>3.4B+</h3>
<p>Phishing emails are sent every day.</p>
</div>

<div class="card reveal">
<h3>60%</h3>
<p>Businesses face cyber attacks yearly.</p>
</div>

<div class="card reveal">
<h3>95%</h3>
<p>Security breaches involve human error.</p>
</div>

<div class="card reveal">
<h3>43%</h3>
<p>Cyber attacks target small business.</p>
</div>

<div class="card reveal">
<h3>90%</h3>
<p>Data breaches start with phishing attempts.</p>
</div>

</div>

</section>

<!-- FEATURES -->

<section class="features reveal">

<h2>Explore Our Features</h2>

<div class="cards">

<div class="card reveal">
<div class="feature-icon">
<i class="fas fa-triangle-exclamation"></i>
</div>
<p>Learn about phishing, malware and ransomware threats.</p>
</div>

<div class="card reveal">
<div class="feature-icon">
<i class="fas fa-lock"></i>
</div>
<p>Discover practical online safety tips.</p>
</div>

<div class="card reveal">
<div class="feature-icon">
<i class="fas fa-tools"></i>
</div>
<p>Explore interactive cybersecurity tools including risk simulators, attack scenarios, and safety checks.</p>
</div>

<div class="card reveal">
<div class="feature-icon">
<i class="fas fa-clipboard-question"></i>
</div>
<p>Cyber Security Quiz and score tracking.</p>
</div>

<div class="card reveal">
<div class="feature-icon">
<i class="fas fa-book"></i>
</div>
<p>Access cybersecurity resources, guides, glossary terms and learning materials.</p>
</div>

<div class="card reveal">
<div class="feature-icon">
<i class="fas fa-envelope"></i>
</div>
<p>Get in touch with us for feedback, questions and cybersecurity awareness support.</p>
</div>

</div>

</section>

<!-- CTA -->

<section class="cta reveal">

<h2>Be Smart. Be Aware. Be Safe.</h2>
<a href="tips.html">
<button class="btn">Get Started</button>
</a>

</section>

<!-- FOOTER -->

<footer class="reveal">

<div class="footer-content">

<h3>CyberShield</h3>

<div class="footer-links">
<a href="index.html">Home</a>
<a href="threats.html">Threats</a>
<a href="tips.html">Tips</a>
<a href="tools.html">Tools</a>
<a href="quiz.html">Quiz</a>
<a href="resources.html">Resources</a>
<a href="contact.html">Contact</a>
</div>

<p>© 2026 CyberShield. All Rights Reserved.</p>

</div>

</footer>

<script>

    const reveals =
    document.querySelectorAll(".reveal");

    const observer = new
    IntersectionObserver((entries)=>{

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