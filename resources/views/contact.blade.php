<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL('/images/t.png')}}" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact</title>    
    <link rel="stylesheet" href="css/contactstyle.css">
    <style>
      .rate {
              float: left;
              height: 46px;
              padding: 0 10px;
          }
          .rate:not(:checked) > input {
              position:absolute;
              top:-9999px;
          }
          .rate:not(:checked) > label {
              float:right;
              width:1em;
              overflow:hidden;
              white-space:nowrap;
              cursor:pointer;
              font-size:30px;
              color:#ccc;
          }
          .rate:not(:checked) > label:before {
              content: '★ ';
          }
          .rate > input:checked ~ label {
              color: #ffc700;    
          }
          .rate:not(:checked) > label:hover,
          .rate:not(:checked) > label:hover ~ label {
              color: #deb217;  
          }
          .rate > input:checked + label:hover,
          .rate > input:checked + label:hover ~ label,
          .rate > input:checked ~ label:hover,
          .rate > input:checked ~ label:hover ~ label,
          .rate > label:hover ~ input:checked ~ label {
              color: #c59b08;
          }
    </style>
</head>
<body>
    <div class="header">
        <p class="logo-tiuk"># T I U K</p>
        <div class="navigation-tiuk">
            <a href="{{ URL::to('index') }}" target="_self"  class="tiuk-pointer" id="active-home">&#183; Home &#183;</a>
            <a href="{{ URL::to('profile') }}" target="_self"   class="tiuk-pointer">&#183; Profile &#183;</a>
            <a href="{{ URL::to('project') }}" target="_self" class="tiuk-pointer">&#183; Project & Design &#183;</a>
            <a href="{{ URL::to('contact') }}" target="_self"  class="tiuk-pointer">&#183; contact &#183;</a>
        </div>
        <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
        </div>
      </div>
  
     
     <h2 style="margin-top: 50px; text-align:center;color: #2E4053;font-family:'amaranth', sans-serif ;">#thisisudaykant</h2>

      <div class="card-tiuk">
        <img src="{{URL('/images/dp.jpg')}}" alt="Uday" style="width:100%;border-radius: 5px 5px 0 0;">
        <h1 style="color: #2E4053;">Uday Kant Thakur</h1>
        <p class="title-card-tiuk">Software Developer</p>
        <p></p>
        <div class="social" style="margin: 24px 0;">
          <a href="https://github.com/thisisudaykant"><i class="fa fa-github"></i></a> 
          <a href="https://twitter.com/thisisudaykant"><i class="fa fa-twitter"></i></a>  
          <a href="https://www.linkedin.com/in/thisisudaykant/"><i class="fa fa-linkedin"></i></a>
        </div>
        <p><button class="btn" id="myBtn">Send Message</button></p>
      </div>

     <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2> <img src="{{URL('/images/t.png')}}" height="20" width="10"> | #thisisudaykant</h2>
    </div>
    <div class="modal-body">
      <center><p style="color:aliceblue;background-color: #2E4053; width: fit-content; font-size: large;font-family: lato;font-weight: bold;border-radius: 05px;border-color: aliceblue;border-style: solid;">&nbsp; <img src="{{URL('/images/t.png')}}" alt="" srcset=""height="19" width="10" >&nbsp;Mail&nbsp; </p>
</center>
<center>
      <form action="FeedbackController" method="post" accept-charset="UTF-8">
        @csrf
        <label for="">Name: </label><input type="text" name="name" id="name" autocomplete="off" required><br>
        <label for="">Your Email: </label><input type="email" name="email" id="email" autocomplete="off" required><br>
        <label for="">Subject:</label><select name="subject" id="sub" required>
            <option value="none" selected>Select</option>
            <option value="feedback">feedback</option>
            <option value="Say hello">Say Hello</option>
        </select><br>
        <label for="">Rate Us | TIUK</label>
        <div class="rate">          
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        </div>        
        <label for="" style="text-align:left;">Message:</label><br>
        <textarea name="detail" id="detail" cols="15" rows="05" required></textarea><br>
        <input type="submit" value=" &#10095; Send &#10095;">
    </form>
  </center>
    </div>
    <div class="modal-footer">
      <h3> send message box | #tiuk | thisisudaykant&trade;</h3>
    </div>
  </div>
</div>
<script type="text/javascript">
  var modal = document.getElementById("myModal"); 
var btn = document.getElementById("myBtn"); 
var span = document.getElementsByClassName("close")[0];  
btn.onclick = function() {
modal.style.display = "block";
}  
span.onclick = function() {
modal.style.display = "none";
}
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}

window.onscroll = function() {myFunction()};
  
  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
  }
</script>
</body>
</html>