<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        var form = document.getElementById('contact-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submitted successfully!');
            form.reset();
        });
    </script>
</body>
</html>