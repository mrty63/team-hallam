<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/comment.css">

    <title>Music Events :: Home</title>
</head>

<body>

    <header>

        <div class="container">
            <h1 class="mobH1"></h1>
            <nav>
                <ul>
                    <a href="index.php "><img src="images\logo.bmp" width="300" height="160"></a>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">

        <div class="content">
            <div class="main">
                <button type="button" onclick="make_comment()">Add your Comment</button>
                <div id="comment_body" hidden>
                    <h3>enter your comment<br></h3>
                    <form id="comments" >
                        Name: <input type="text" name="usrname"><br>
                        <textarea rows="3" cols="75" placeholder="enter your comment"></textarea>
                        <input type="date" id="today" hidden>
                        <input type="submit">
                    </form>

                    <?php

                    ?>
                </div>
                <h3>Comments</h3><br> show comments here<br>
                <footer>
                    <p>&copy; Copyright 2018</p>
                </footer>

            </div>
            <script src="js/comment.js"></script>
</body>

</html>