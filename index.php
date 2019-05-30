<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script>
        function checkData(){
            let width = parseInt(document.pictureForm.picWidth.value);
            let height = parseInt(document.pictureForm.picHeight.value);
            let radius = parseInt(document.pictureForm.picRadius.value);
            let circles = parseInt(document.pictureForm.picCircles.value);
            console.log(width +', '+ height +', '+ radius +', '+ circles);
            if (circles == 0 || !width || !height || !radius) {
                alert('Будьте добры заполнить все поля.');
                return false;
            } else if (radius > (width / 2) ||
                    radius > (height / 2)) {
                    alert('Радиус не может быть больше половины ширины или высоты изображения. Измените это значение.');
                return false;
            } else if (isNaN(width) || isNaN(height) || isNaN(radius)) {
                alert('В полях ширина, высота и радиус могут быть только числовые значения.');
                return false;
            } else {
                return true;
            }

        }
    </script>  

</head>
<body>
    <div class="container">
        <form action="create_image.php" name="pictureForm" method="get" onSubmit="return checkData()">
            <div class="form-group">
                <label for="picture-width">Ширина изображения</label>
                <input for="picture-form" type="number" id="picture-width" name="picWidth" placeholder="width" min="100">
            </div>
            <div class="form-group">
                <label for="picture-height">Высота изображения</label>
                <input for="picture-form" type="number" id="picture-height" name="picHeight" placeholder="height" min="100">
            </div>
            <div class="form-group">
                <label for="picture-radius">Радиус окружности</label>
                <input for="picture-form" type="number" id="picture-radius" name="picRadius" placeholder="radius" min="0">
            </div>
            <div class="form-group">
                <label for="picture-circles">Количество окружностей</label>
                <select for="picture-form" id="picture-circles" name="picCircles" class="form-control" style="max-width:50%">
                    <option selected disabled value="0">Выберите количество</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Сгенерировать изображение</button>
            <!-- onclick="checkData();" -->
        </form>
    </div>
</body>
</html>



<?php
// phpinfo();
// header ('Content-Type: image/png');

// $x = 420;
// $y = 320;
// $image = imagecreatetruecolor($x, $y);
// // $white = imagecolorallocate($image, 0, 0, 0);
// $text_color = imagecolorallocate($image, 233, 14, 91);
// imagestring($image, 1, 5, 5,  'Простая Текстовая Строка', $text_color);
// imagepng($image);
// //imagedestroy($image);

/* php manual */
// header ('Content-Type: image/png');
// $im = @imagecreatetruecolor(120, 20)
//       or die('Невозможно инициализировать GD поток');
// $text_color = imagecolorallocate($im, 233, 14, 91);
// imagestring($im, 1, 5, 5,  'Simple text here', $text_color);
// imagepng($im);
// imagedestroy($im);
?>