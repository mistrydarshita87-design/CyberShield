<?php
include("db.php");
session_start();

$message = "";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    if($row)
    {
        if(password_verify($password, $row['password']))
        {
            $_SESSION['user'] = $row['name'];

            header("Location: quiz.php");
            exit();
        }
        else
        {
            $message = "❌ Wrong Password!";
        }
    }
    else
    {
        $message = "❌ User not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CyberShield | Login</title>

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

/* NAVBAR */
header{
background:#112240;
padding:20px 8%;
position:sticky;
top:0;
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
}

nav ul li a:hover{
color:#64FFDA;
}

/* LOGIN */
.container{
display:flex;
justify-content:center;
align-items:center;
min-height:80vh;
}

.card{
background:#112240;
padding:40px;
border-radius:15px;
width:350px;
box-shadow:0 0 20px rgba(0,0,0,0.4);
}

.card h2{
color:#64FFDA;
text-align:center;
margin-bottom:20px;
}

input{
width:100%;
padding:12px;
margin-bottom:15px;
border:none;
border-radius:8px;
background:#0A192F;
color:white;
outline:none;
}

/* INPUT + EYE */
.input-box{
position:relative;
}

.input-box i{
position:absolute;
right:12px;
top:50%;
transform:translateY(-50%);
cursor:pointer;
color:#64FFDA;
}

/* BUTTON */
button{
width:100%;
padding:12px;
background:#64FFDA;
border:none;
border-radius:8px;
font-weight:bold;
cursor:pointer;
}

button:hover{
transform:translateY(-3px);
}

/* MESSAGE */
.msg{
text-align:center;
margin-bottom:10px;
color:#ff4d4d;
}

/* SIGNUP LINK */
.signup{
text-align:center;
margin-top:15px;
font-size:14px;
}

.signup a{
color:#64FFDA;
text-decoration:none;
}

</style>
</head>

<body>

<!-- NAVBAR -->
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
<li><a href="/Cybershield/contact.php">Contact</a></li>
</ul>

</nav>
</header>

<!-- LOGIN -->
<div class="container">

<div class="card">

<h2>Login</h2>

<div class="msg"><?php echo $message; ?></div>

<form method="POST">

<input type="email" name="email" placeholder="Enter Email" required>

<div class="input-box">
<input type="password" id="password" name="password" placeholder="Enter Password" required>
<i class="fa fa-eye" id="togglePassword"></i>
</div>

<button type="submit" name="login">Login</button>

</form>

<div class="signup">
Don't have an account?
<a href="signup.php">Sign Up</a>
</div>

</div>

</div>

<!-- JS -->
<script>
const togglePassword = document.getElementById("togglePassword");
const password = document.getElementById("password");

togglePassword.addEventListener("click", function () {
    const type = password.type === "password" ? "text" : "password";
    password.type = type;

    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
});
</script>

</body>
</html>