<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 40px;
            margin-right: -500px;
            padding: 0;
        }
        .container {
            text-align: center;
        }
        .alert {
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            padding: 20px;
            max-width: 400px;
            width: 100%;
            transform: perspective(500px) rotateX(25deg);
            transition: transform 0.5s ease;
        }
        .alert:hover {
            transform: perspective(400px) rotateX(0deg);
        }
        .alert h4 {
            margin-top: 0;
            font-size: 24px;
        }
        .alert p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .alert hr {
            border-color: rgba(255, 255, 255, 0.2);
        }
        @media (max-width: 576px) {
            .alert {
                max-width: 300px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="alert" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>Your message has been successfully submitted.</p>
        <hr>
        <p class="mb-0">Thank you for reaching out. We will get back to you soon.</p>
    </div>
</div>

</body>
</html>
