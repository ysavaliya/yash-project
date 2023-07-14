<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple, flat contact form</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
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
</head>
<body>
<!-- partial:index.partial.html -->
<div class="all">
<form method="POST" action="yash.php">  
  <div class="head"><h2>FEEDBACK</h2></div>    
  <input name="name" type="text" class="feedback-input" placeholder="Name" required />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" required/>
  <textarea name="text" class="feedback-input" placeholder="Comment" required></textarea>
 
  <div class="rating-container">
    
    <div id="stars-default">
      <label for="rating">Rating:</label>
      <input type="hidden" value="1" name="rating"/>
    </div>
  </div><br>
  <input type="submit" value="SUBMIT"/>
</form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
