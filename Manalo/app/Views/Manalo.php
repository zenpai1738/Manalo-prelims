<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        .newsletter {
            text-align: center;
        }

        .newsletter input[type="email"] {
            padding: 10px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .newsletter input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Landing Page</h1>
    </header>
    <main>
        <section>
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque, libero nec dictum blandit, risus nisi varius turpis, sit amet bibendum libero magna vel libero. Mauris consequat auctor tortor non condimentum.</p>
        </section>
        <section>
            <h2>Our Services</h2>
            <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
            </ul>
        </section>
        <section class="newsletter">
            <h2>Subscribe to Our Newsletter</h2>
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Your email address" required>
                <input type="submit" value="Subscribe">
            </form>
        </section>
    </main>
</body>
</html>
