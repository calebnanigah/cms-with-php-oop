<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo (isset($pageTitle)) ? $pageTitle : 'Some Content Site'; 
        ?>
    </title>
</head>
<body>
    <header>
        <nav>
            <div>Banner CMS</div>
            <ul>
                <li> <a href="#"> Home </a> </li>
                <li><a href="#"> Archives</a></li>
                <li> <a href="#"> Contact</a></li>
                <li> <a href="#"> Register</a></li>
                <li> 
                    <?php 
                        // $user = true;
                        ($user) ?  print("<a href=\"#\"> Logout</a>") : print("<a href=\"#\"> Login</a>");
                    ?> 
                </li>
            </ul>
        </nav>
    </header>

