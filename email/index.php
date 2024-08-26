

<!doctype html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Contact us </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            width: 600px;
            height: auto;
            background: #fff;
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <h1> Contact Us</h1>
    <div class="container">

        <form action="sent.php" method="post" enctype="multipart/form-data">
            <div class="bg-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required placeholder="enter your name">

            </div>
            <div class="bg-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="bg-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="text">
            </div>
            <div class="bg-4">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject">
            </div>
            <div class="bg-12">
                <label for="address" class="form-label">Message</label>
                <textarea name="message" rows="2" id="address"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn:hover">sent</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>