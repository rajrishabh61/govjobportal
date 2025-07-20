<?php
define('MyConst', TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!---Fonticons-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
     integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Access Denied</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    .container-fluid{
        background-color: rgb(206, 224, 224);
        height: 100vh;
    }
    .row{
        height: 100%;
    }
    #shield{
        text-align: center;
        align-self: center;
    }
    #shield i{
        text-align: center;
        align-self: center;
        font-size: 15vw;
        color:#674CC4;
        }
        h4{
            margin-top: 15px;
            font-size: 6vw;
            font-weight: 800;
            font-family: 'Poppins', sans-serif;
        }
        h6{
            margin-top: 15px;
            font-size: 3vw;
            font-weight: 800;
            font-family: 'Poppins', sans-serif;
        }
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="shield">
                <i class="fas fa-user-shield"></i>
                <h4>Access Denied</h4>
                <h6>You don't have access to view this resource</h6>
            </div>
        </div>
    </div>
    
</body>
</html>