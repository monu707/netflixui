<!DOCTYPE html>
<html lang="en">
<head>
  <title>Netflix Slider</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="custom-style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
</head>
<body>

  <div class="container">
    <div class="responsive">

      <?php for ($x = 0; $x <= 5; $x++) { ?>
      <div>
        <div class="img-vid-bx">
          <div class="img">
            <img src="http://googlex.in/revolutionicecentre/wp-content/uploads/2019/04/92280.jpg" alt="Image">
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="custom-js.js"></script>
</body>
</html>
