<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css"/>
    <link rel="stylesheet" href="addEntry.css"/>
    <script src="addEntry.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&family=Montserrat:wght@800&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="addPost.php" id="addPost">
        <fieldset>
            <h1 id="title">Add Blog</h1>
            <p class="typeBox">
                <label>Title</label><br/>
                <input type="text" name="title" placeholder="Title">
            </p>
            <p class="typeBox">
                <label>Content</label><br/>
                <textarea name="content" rows="10" placeholder="Enter your text here"></textarea>
            </p>
            <div id="button-row">            
                <button type="submit" id="post">Post</button>
                <button type="reset" id="clear">Clear</button>
            </div>
            <p class="form-footer">
                <a href="index.php">Return to Home</a>
            </p>
        </fieldset>
    </form>    
</body>
</html>