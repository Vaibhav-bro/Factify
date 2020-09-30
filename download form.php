<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/png" href="favicon-16x16.png">
    <script src="https://kit.fontawesome.com/269844b9d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="download form.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Login Page</title>
<style>
body{
    padding: 0;
    margin:0px;
    font-family: sans-serif;
    background:url("img1.jpg") no-repeat center center fixed;
    background-size:cover;
}
.box{
    position:absolute;
    top:20%;
    left: 40%;
    align-items: center;
    width:400px;
    font-size: 40px;
    background:rgba(0, 0, 0, 0.247);
    border:4px solid rgba(0, 0, 0, 0.247);
    border-radius:10px;

}
.box:hover{
    background:#fffc63;
        box-shadow: 0 0 5px #f7c200,
    0 0 25px #f7c200,
    0 0 50px #f7c200,
    0 0 200px #f7c200,
    0 0 600px #f7c200;
}
.btn1{
    position:relative;
    top:-40px;
    left: 50px;
    width:100px;
    height:30px;
}
.btn1:hover{
    background-color: lightgreen;
    box-shadow: 0 0 5px lightgreen,
     0 0 25px lightgreen,
     0 0 50px lightgreen,
     0 0 100px lightgreen;
     border: 3px solid transparent;
}
.first{
    height:30px;
    position:relative;
    left:57px;
    box-shadow: 0 0 5px cyan,
    0 0 10px cyan,
    0 0 20px cyan;
    border:3px cyan;
}
.dob{
    height:40px;
    position:relative;
    left:56px;
    width:157px;
    box-shadow: 0 0 5px cyan,
    0 0 10px cyan,
    0 0 20px cyan;
    border:3px cyan;
}
.email{
    height:30px;
    position:relative;
    left:57px;
    box-shadow: 0 0 5px cyan,
    0 0 10px cyan,
    0 0 20px cyan;
    border:3px cyan;
}
#user{
    position:relative;
    left:57px;
    top:10px;
}
#cake{
    position:relative;
    left:57px;
    top:10px;
}
#email{
    position:relative;
    left:57px;
    top:10px;
}
.container{
    position:absolute;
    top:50px;
    left:500px;
}

</style>
</head>

<body>
    <div class="container">

        <div class="box">
            <h3 class="h3">Login to this form to Download</h3>
            <form action="download page.htm">
                <i class="fas fa-user" id="user"></i>
                <input type="text" class="first" maxlength="20" minlength="5" name="name" required="" placeholder="Type your name">
                <br>
                <br>
                <i class="fas fa-birthday-cake" id="cake"></i>
                <input type="date" name="DOB" class="dob" placeholder="DOB" required="">
                <br>
                <br>
                <i class="fas fa-envelope-square" id="email"></i>
                <input type="email" name="email" class="email" id="e_feild" placeholder="type your email" placeholder="Type your Email" required="">
                <br>
                <br>
                <input type="password" id="p_feild">
                <br>
                <br>
                <input type="submit" class="btn1" onclick="login()">
            </form>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-analytics.js"></script>
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyCMZLxxq5bmQkz-Z0hnF5LB2PW3pMFIRus",
            authDomain: "project-1-b2655.firebaseapp.com",
            databaseURL: "https://project-1-b2655.firebaseio.com",
            projectId: "project-1-b2655",
            storageBucket: "project-1-b2655.appspot.com",
            messagingSenderId: "844368331519",
            appId: "1:844368331519:web:21394fecef037e1264c2ca",
            measurementId: "G-125DZMQCJD"
        };
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>
    <script>
        function login() {
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                } else {
                    // No user is signed in.
                }
            });
            var userEmail = document.getElementById('e_feild').value;
            var userPass = document.getElementById('p_feild').value;
            firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                // ...
                window.alert("ERROR" + "Incorrect Email ID or Password");
            });
        };
    </script>
</body>

</html>