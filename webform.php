<html>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="csvFile" id="csvFile">
        <input type="submit" value="Upload CSV" name="submit">
    </form>
    <form action="udownload.php" method="post">
        <input type="submit" value="export CSV" name="export">
    </form>
    </body>
</html>
