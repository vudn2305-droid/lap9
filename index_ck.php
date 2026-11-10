<!-- Student: Nguyen Van Thien Tam-25IT176-->
<?php
// if user not type input
$noidung1 = "";
$noidung2 = "";

if (isset($_POST["ok"])) {
    if (isset($_POST["tomtat"])) {
        $noidung1 = $_POST["tomtat"];
    }
    if (isset($_POST["tomtat1"])) {
        $noidung2 = $_POST["tomtat1"];
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Document CKEditor 5</title>
    <script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-build-classic@41.4.2/build/ckeditor.js"></script>
</head>
<body>

    <h2>Test hoạt động của CKEditor 5</h2>

    <form action="" method="post">
        <label>Content 1:</label><br>
        <textarea name="tomtat" id="editor1"></textarea>
        <br><br>

        <label>Content 2:</label><br>
        <textarea name="tomtat1" id="editor2"></textarea>
        <br><br>

        <input name="ok" type="submit" value="Ok" />
    </form>

    <!--Active CKEditor 5 -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <hr>
    <h3>Dữ liệu nhận được sau khi POST:</h3>
    <div>
        <strong>Nội dung 1:</strong> 
        <div><?php echo $noidung1;?></div>
    </div>
    <br>
    <div>
        <strong>Nội dung 2:</strong> 
        <div><?php echo $noidung2; ?></div>
    </div>

</body>
</html>
