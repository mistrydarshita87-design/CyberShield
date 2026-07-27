<?php
include("db.php");
session_start();

$message = "";

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password != $confirm_password){
        $message = "❌ Passwords do not match!";
    }
    else{

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(name,email,password)
                VALUES('$name','$email','$hashed_password')";

        if(mysqli_query($conn,$sql))
        {
            $_SESSION['user'] = $name;
            header("Location: quiz.php");
            exit();
        }
        else
        {
            $message = "❌ Email already exists!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CyberShield | Signup</title>

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

/* CONTAINER */
.container{
display:flex;
justify-content:center;
align-items:center;
min-height:80vh;
}

/* CARD */
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

/* IMPORTANT FIX FOR ICON */
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

/* LOGIN LINK */
.login{
text-align:center;
margin-top:15px;
font-size:14px;
}

.login a{
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

<!-- SIGNUP -->
<div class="container">

<div class="card">

<h2>Create Account</h2>

<div class="msg"><?php echo $message; ?></div>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<div class="input-box">
<input type="password" id="password" name="password" placeholder="Enter Password" required>
<i class="fa fa-eye" id="togglePassword"></i>
</div>

<div class="input-box">
<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
<i class="fa fa-eye" id="toggleConfirm"></i>
</div>

<button type="submit" name="signup">Sign Up</button>

</form>

<div class="login">
Already have an account?
<a href="login.php">Login</a>
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

const toggleConfirm = document.getElementById("toggleConfirm");
const confirmPassword = document.getElementById("confirm_password");

toggleConfirm.addEventListener("click", function () {
    const type = confirmPassword.type === "password" ? "text" : "password";
    confirmPassword.type = type;

    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
});
</script>

</body>
</html>