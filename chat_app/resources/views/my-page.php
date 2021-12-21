
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGen</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class="app">
        <header>
        
            <h1>ChatGen</h1>
            <style>
        body {    
            height: 100px;  
    background-image: url(/chat_app/Capture.PNG);  
    background-color: lightgray;  
    } 
    </style>
            <h2>Enter the username you want to use</h2>
            <a href="{{url('/create)}}"> <button type="button" class="btn btn-outline-primary float-right"></button></a>
            <input type="text" name="username" id="username" placeholder="Enter Username..." />
        </header>
        <div id="messages"></div>
        
        <button type="button" onclick=" window.location ='/index' ">SUBMIT</button>
        
    </div>

    <script src="./js/app.js"></script>
</body>
</html>