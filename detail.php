<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - Ebukumenu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS Styles */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #F9F1F0;
            margin: 0;
        }

        .container {
            width: 540px;
            margin-left: auto;
            margin-right: auto;
            padding: 15px;
            box-sizing: border-box;
            margin-top: 50px; 
        }

        .card-menu {
            background-color: #fff;
            position: relative;
        }
        .card-menu .btn-back {
            padding: 15px 15px;
            display: inline-block;
            border-radius: 50%;
            background-color: #fff;
            position: absolute;
            top:10px;
            left:10px;
        }

        .card-menu img {
            width: 100%;
        }

        .card-body {
            padding: 15px;
        }

        .menu-name {
            font-size: 18px;
            margin-bottom: 5px; 
        }

        .menu-description {
            font-size: 16px; 
            color: #282828;
            margin-bottom: 10px; 
        }

        .menu-price {
            font-weight: bold;
            font-size: 18px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card-menu">


            <a href="index.php" class="btn-back"><i class="fa fa-arrow-left"></i></a>
            <img src="uploads/products/jpn.jpg" alt="Vietnam grip Ice">

            <div class="card-body">
                <div class="menu-name">Vietnam grip</div>
                <div class="menu-description">Ice</div>
                <div class="menu-price">Rp. 20.000</div>
            </div>
        </div>
        <div class="class extra-menu">
            <h3>Menu tambahan</h3>
            <ul>
                <li><span>Ice Cream Coklat</span> <span>0</span></li>
                <li><span>Ice Cream Vanila</span> <span>15.000</span></li>
                <li><span>Ice</span> <span>1.000</span></li>
            </ul>
        </div>
    </div>
</body>
</html>
