<?php

session_start();

//override a session
$_SESSION['name']= 'trainers';

//unset a session 
if($_SERVER['QUERY_STRING'] == 'noname'){
    unset($_SESSION['name']);
}
//Setting up a back-up value Guest
$name = $_SESSION['name'] ?? 'Guest';

?>


<head>
    <title>Mount Everest</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand {
            background: #5c8a8a !important;
        }
        .brand-text{
            color: #5c8a8a !important;
        }
        form{
            max-width: 460px;
            margin:20px auto;
            padding:20px;
        }
        .vacay{
            width:10 px;
            height:50px;
            margin:40px auto -30px;
            display:block;
            position:relative;
            top: -30px;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Mount Everest^^</a>
            <ul id="nav-mobile" class=right hide-on-small-and-down">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
                <li><a href="add.php" class="btn brand z-depth-0">New Destination</a></li>
            </ul>
        </div>
    </nav>