<!-- 16. Write a program to upload and display an image using PHP. -->

<html>
    <head>
        <title>Program 16</title>
    </head>

    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            Select image
            <input type="file" name="file">
            <input type="submit" name="submit1" value="Upload">
        </form>

        <?php
        if(isset($POST['submit1']))
        $filepath = 'images/' . $FILES["file"]["name"];

        if($move_uploaded_file($FILES["file"]["tmp_name"].$filepath))
        {
            echo "<img src=" . $filepath . " height=300 width=200>";
        }
        else
        {
            echo "Error!!";
        }
        ?>
    </body>
</html>
