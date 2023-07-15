<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="star-rating.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            $("#stars-default").rating('create',
               {
                    coloron: 'red',
                    onClick: function () {
                       alert('rating is ' + this.attr('data-rating'));
                       
                    }
                });
            });
    </script>

    <title>Feedback</title>
</head>
<body>
    <section></section>
    <div class="container">
        <form method="_POST" action="yash.php">
            <h1>Give your feedback</h1>
            <div class="id">
                <input type="text" name="full" placeholder="Full Name" required>
                <i class="far fa-user"></i>
            </div>


            <div class="id">
                <input type="email" name="address" placeholder="Email Address" required>
                <i class="far fa-envelope"></i>
            </div>
                   
            <textarea cols="15" rows="5" name="opinion" placeholder="Enter your Opinion here.." required></textarea>
            <button>Send</button>
        </form>
    </div>
</body>
</html>