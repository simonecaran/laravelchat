<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Chat</title>

    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div class="app">
        <header>
            <h1>Let's Talk</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Username</span>
                            <input type="text" class="form-control" placeholder="Please enter a username..." aria-label="Username" name="username" id="username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>

        </header>
            <div id="messages"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form id="message_form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="message_input" name="message" placeholder="Write a message..." aria-label="Recipient's username" aria-describedby="message_send">
                        <button class="btn btn-outline-secondary" type="submit" id="message_send">Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <script src="./js/app.js"></script>
</body>
</html>