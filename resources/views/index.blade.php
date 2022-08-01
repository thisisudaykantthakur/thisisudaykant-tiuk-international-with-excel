<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="thisisudaykant">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL('/images/uk.png')}}" type="image/icon type">
    <title>&#183; thisisudaykant &#183;</title>
    <link rel="stylesheet" href="css/postStyle.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/adStyle.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/loaction-style.css">
    <script src="js/postScript.js"></script>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #F6DB6F;
            color:  #ECF0F1;            
        }
        @import url("https://use.typekit.net/qdy8dcw.css");
        @import url("https://p.typekit.net/p.css?s=1&k=qdy8dcw&ht=tk&f=15708.15871&a=68877197&app=typekit&e=css");

@font-face {
font-family:"lato";
src:url("https://use.typekit.net/af/180254/00000000000000000001522c/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),url("https://use.typekit.net/af/180254/00000000000000000001522c/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),url("https://use.typekit.net/af/180254/00000000000000000001522c/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
font-display:auto;font-style:normal;font-weight:400;
}

@font-face {
font-family:"amaranth";
src:url("https://use.typekit.net/af/29950a/00000000000000007735a119/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),url("https://use.typekit.net/af/29950a/00000000000000007735a119/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),url("https://use.typekit.net/af/29950a/00000000000000007735a119/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
font-display:auto;font-style:normal;font-weight:400;
}
        
        .header{
            position: fixed;
            top:0px;
            left:0px;
            right: 0px;
            z-index: 1;
            background-color: rgba(46, 64, 83, 0.5);
        }
        .logo-tiuk{
            font-family: 'amaranth',sans-serif;
            background-color: #2E4053;
            font-weight:bold;
            font-style:normal;
            font-size: 12px;
            text-shadow:01px 01px 03px #FC5106;
            width: fit-content;
            padding: 05px 05px 019px 05px;
            border-radius: 05px;
            border-color: #ECF0F1;
            top:02px;
            left: 02px;
            margin: 02px;
            display: inline-flex;
            clip-path: polygon(0 0, 100% 0, 100% 57%, 63% 63%, 51% 80%, 35% 61%, 0 59%);
        }
       .navigation-tiuk{
           text-transform: uppercase;
           float: right;
           padding: 05px;
           font-family:'amaranth', sans-serif;
           font-size: small;
           display:inline-flex;
       }
       .navigation-tiuk a{
           text-decoration: none;
           color: #2E4053;
           padding: 05px;
       }
       .tiuk-pointer{
           cursor: pointer;
       }
       .navigation-tiuk a:hover{
           text-transform: uppercase;
           color: #F0F3F4;
           text-shadow: 02px 02px 02px black;
       }
      #active-home{
            text-transform: uppercase;
            color: #F0F3F4;
            text-shadow: 02px 02px 02px black;
       }
       .progress-container {
            width: 100%;
            height: 1px;
            background:#2E4053;
            }

            .progress-bar {
            height: 1px;
            background:red;
            width: 0%;
            }
        ::-webkit-scrollbar{
        width:10px;
    }
    ::-webkit-scrollbar-track{
        background: #2E4053;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb{
        background: #F0F3F4;
        border-radius: 50px;
    }
       .container-tiuk{
           display: flex;
           flex-direction: column; 
           padding: 05px; 
           position: relative;
           margin-top: 50px; 
           margin-bottom:10px;
           justify-content:center;
           width:fit-content;
           
       }
       .container-tiuk::before{
           content: '';
           position: absolute;
           top:0px;
           right: 0px;
           bottom: 0px;
           left: 0px;
           background-image:url("images/bg-tiuk.jpg");
           background-repeat: no-repeat;
           background-size: cover;
           border-radius: 25px;
           box-shadow:04px 04px 04px black;
           background-position: center;
           opacity: 0.5;
           border-color: #F0F3F4;
           border-style: solid;
           
           
       }
      .sone img{
        border-radius: 50%;
        border-color: #2E4053;
        border-width: 2px;
        border-style: solid;
        display:inline;
        float: left;
        padding: 01px;
        position: relative;
        margin: 02px 05px 02px 0px;
      }
      .stwo p::first-letter{
          
          font-size:xx-large;
      }
      .stwo{
          display: inline;
          margin: 02px;
          text-align:justify;
          font-variant: small-caps;
          text-shadow: 02px 02px 02px #ECF0F1;
          position: relative;
          color:black;
          top:0px;
           right: 0px;
           bottom: 0px;
           left: 0px;
           padding-left: 04px;
           padding-right: 04px;
           padding-top: 04px;
           padding-bottom: 04px;
      }
      
      .slider-tiuk{
          margin: 01px;
          border-radius: 10px;
          background-color:#ECF0F1;
          align-content: center;
          width:fit-content;
          display:flex;
          flex-direction:row;
          padding:05px;
          flex-wrap: wrap;
      }
      .slider-tiuk img{
          padding: 02px;
          width: 500px;
          height: 200px;
          border-radius:10px;
          margin-right:05px;
          
      }
        .link-tiuk{
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            background-color:#5B1130;
            border-radius:05px;
            padding:05px;
        }     
        .link-tiuk a{
            text-decoration: none;
            color: #ECF0F1;
            text-shadow:02px 02px 02px  #2E4053;
            display: inline;
        } 
        .link-tiuk a:hover{
            color:#2E4053;
            text-shadow: 02px 02px 02px #ECF0F1;
        }
        .text-link-tiuk{
            color: #ECF0F1;
            text-shadow:02px 02px 02px  #2E4053;
            font-variant: small-caps;
            text-align: center;
            text-justify: auto;
            font-size: 12px;
        }

     footer{
            position: static;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            text-shadow: 02px 02px 02px #F0F3F4;
            color: black;
            font-size: smaller;
            font-weight: bold;
            font-family: 'amaranth', sans-serif;
            cursor: pointer;
     } 
         .artical-tiuk{
                margin: 10px 04px 10px 04px;
                display:block;
                font-family: 'amaranth', sans-serif;
                width: fit-content;
                box-shadow:04px 04px 04px black;
                border-radius:10px;
                
        }
            .header-artical{
                background-color: #2E4053;
                color: #F0F3F4;
                padding: 02px 02px 02px 02px;
                font-size: 14px;
                text-align: center;
                text-transform: uppercase;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                border-bottom-color: #F0F3F4;
                border-top-color: #2E4053;
                border-left-color: #2E4053;
                border-right-color: #2E4053;
                border-width: 02px;
                border-style: solid;
                
            }

            .body-artical{
                    background-color: #FC5106;
                    color: #F6DB6F;
                    display: flex;
                    flex-direction: column;
                    align-items: left;
                    padding: 03px 0px 03px 0px;
                    padding-left: 10px;
                    text-justify: auto;
                   

            }
            .footer-artical{
                    background-color: #2E4053;
                    color: #F0F3F4;
                    padding: 03px 0px 03px 0px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;
                    border-bottom-color: #2E4053;
                    border-top-color: #F0F3F4;
                    border-left-color: #2E4053;
                    border-right-color: #2E4053;
                    border-width: 01px;
                    border-style: solid;
                    font-size: small;
            }
            .about{
                display: flexbox;
                flex-direction:column;
                align-content:center;
                width:fit-content;
                background-color: #2E4053;
                font-family: 'amaranth', sans-serif;
                text-align: justify;
                padding-left: 05px;
                padding-right: 05px;
                padding-bottom: 05px;
                border-bottom: #FC5106 02px solid;
                margin:10px;
            }
            .about h1{
                display:flexbox;
                flex-direction:column;
                text-align: center;
                text-shadow: 02px 02px 02px #F6DB6F;
                color:#2E4053;
                border-bottom-right-radius: 05px;
                border-bottom-left-radius: 05px;
                background-color:azure;
            }
            .mark::after{
            position: absolute;
            content: attr(data-label);
            z-index: 100;
            width: 10px;
            height: 10px;
            top:125px;
            left:120px;
            color:white;
            background-color:#2E4053;
            padding-left: 05px;
            padding-bottom: 05px;
            padding-right: 05px;
            padding-top: 05px;
            border-radius: 50%;
            border-color: whitesmoke;
            border-width: 1px;
            border-style: solid;
            line-height: 12.5px;
            font-weight: bolder;
            transform: rotate(10deg);
        }
       
            
            
    </style>
        <script>
         window.onscroll = function() {myFunction()};
         function myFunction() 
         {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("myBar").style.width = scrolled + "%";
         }
        </script>
        
</head>
<body>
        <div class="header">
           <p class="logo-tiuk"> # T I U K </p>
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
<center>
    <div class="container-tiuk" >        
    <span class="sone"><img src="{{URL('/images/dp.jpg')}}" width="150" height="150"><div class="mark" data-label="&#10003;"></div>
    <span class="stwo"><p>ಸ್ವಾಗತಿಸಲು<b style="color:#2E4053;font-variant: normal;text-shadow: 02px 02px 02px #F0F3F4;font-family:'amaranth', sans-serif ;"> #thisisudaykant</b> ಪುಟ  <br>
        ಎಲ್ಲರಿಗೂ ನಮಸ್ಕಾರ, ನನ್ನ ಹೆಸರು ಉದಯ್ ಕಾಂತ್ ಠಾಕೂರ್.<br>

         ನಾನು ದಕ್ಷಿಣ ಭಾರತದ (ಬೆಂಗಳೂರು, ಕರ್ನಾಟಕ) ವಿಶ್ವೇಶ್ವರ್ಯ ತಾಂತ್ರಿಕ ವಿಶ್ವವಿದ್ಯಾಲಯದಿಂದ ಪ್ರಮಾಣೀಕೃತ ಕಂಪ್ಯೂಟರ್ ಸೈನ್ಸ್ ಇಂಜಿನಿಯರ್ ಆಗಿದ್ದೇನೆ.<br>

         ಈ ವೆಬ್‌ಪುಟವು ನನ್ನ ಬಗ್ಗೆ ಮತ್ತು ಅಸ್ತಿತ್ವದಲ್ಲಿರುವ ಮತ್ತು ಮುಂಬರುವ ತಂತ್ರಜ್ಞಾನಗಳ ಬಗ್ಗೆ ನನ್ನ ಜ್ಞಾನದ ಬಗ್ಗೆ ಮಾಹಿತಿ ತಂತ್ರಜ್ಞಾನದ ಜಗತ್ತಿನಲ್ಲಿ ನನ್ನನ್ನು ಪರಿಚಯಿಸುವುದು.<br>
         ನನ್ನ ನೀಡಿರುವ ಸಂಪರ್ಕದಲ್ಲಿ ನೀವು ಪ್ರೋಗ್ರಾಮಿಂಗ್‌ಗೆ ಸಂಬಂಧಿಸಿದಂತೆ ನನಗೆ ಪ್ರಶ್ನೆಗಳನ್ನು ಕಳುಹಿಸಬಹುದು.<br>
         ಧನ್ಯವಾದ
        </p></span>
    </span> 
</div>
</center>

<center>
<div class="slider-tiuk" style="box-shadow:04px 04px 04px black;">
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="{{URL('/images/ukt.jpg')}}" style="width:100%">
  <div class="text">3D Glass Logo</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="{{URL('/images/SocialMedialogoOfTIUK.jpg')}}" style="width:100%">
  <div class="text">social @ tiuk</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="{{URL('/images/bg-tiuk.jpg')}}" style="width:100%">
  <div class="text">thisisudaykant</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="{{URL('/images/motivational-tiuk-paper.jpg')}}" style="width:100%">
  <div class="text">motivational tiuk</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
</div>
 <script src="{{ asset('\js\slider.js') }}"></script>
<div class="artical-tiuk" >
    <div class="header-artical">Quotation</div>
    <div class="body-artical">
        The greatest glory in living lies not in never falling, but in rising every time we fall.
    </div>
    <div class="footer-artical"><i>-Nelson Mandela</i></div>
</div>
</center>
<br>
<center>
<div class="con-post" style="box-shadow:04px 04px 04px black;" >
        <div class="title-post"><code>hello world</code> code in html</div>
        <div class="post"><img src="{{URL('/images/helloworld.jpg')}}" alt="TIUK" id="img-post" >
        <img src="{{URL('/images/Screenshot (155).png')}}" alt="TIUK" id="img-postP"></div>
       <div class="activities"><center> <span id="count" value="0" style=" background-color: cadetblue;color: white;border-style:inherit;border-radius:03px;" onclick="clickMe()">Like</span><span onclick="cmnt()" style=" background-color: cadetblue;color: white;border-style:inherit;border-radius:03px;" id="t">Comment</span><span  style=" background-color: cadetblue;color: white;border-style:inherit;border-radius:03px;" id="s"> Share </span> <br>
            <div id="comment-post" style="display: none;">
            <input type="text" name="comment" id="cbox" autocomplete="off" required>
            <div onclick="showComment()"  id="ps">post</div>
            </div>
            <div class="typeMe">
                <p id="comment">
                    <p id="time"> 
                    <p id="description"></p></p>
                </p>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js"></script>
    </center>
   <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <div class="close">&times;</div>
            <h3> <img src="{{URL('/images/t.png')}}" alt="thisisudaykant" height="20" width="10"> | #thisisudaykant&trade;</h3>
          </div>
          <div class="modal-body">
            <p style="color:navy; width: fit-content; font-size: large;font-family: lato;font-weight: bold;border-radius: 05px;border-color: aliceblue;border-style: solid;background-color:antiquewhite;">&nbsp;&nbsp;Copy&nbsp;&nbsp;Link&nbsp; </p>
             <u><p id="linkPostHere" ></p></u>
          </div>
          <div class="modal-footer">
            <h5>thisisudaykant&trade; | dashMedia </h5>
          </div>
        </div>      
      </div>
    </div>
    </div>
</center>
    <script src="{{ URL::asset('js/postScript.js'); }}"></script>
    <br>
    <center>
    <div class="about" style="box-shadow:04px 04px 04px black;">
    <h1>&#183; ABOUT #tiuk &#183;</h1>
    <p>Hello Reader, #thisisudaykant is a personal presentation type webpage. http://thisisudaykant.000webhostapp.com is published under free domain and on a platform of https://www.000webhostapp.com. This is beta version of www.thisisudaykant.com currently and conducting testing on this web page. The designer of this page is certified computer science engineer working in the field of software. We always welcome feedback and work on that.
    <br>
    <center style="text-shadow: 02px 02px 02px #FC5106; ">&#183; THANK YOU &#183;</center>
    </p>
    </div>
    </center>



<center><div class="link-tiuk" style="box-shadow:04px 04px 04px black; margin-bottom:10px;">
    <p class="text-link-tiuk">Some useful important link during designing of webpage at<br> <code style="color: white">beginner level</code> : </p><hr style="width:100%;color:white;">
    <a href="https://htmlcolorcodes.com" target="_self">HTML Color Codes</a>
    <a href="https://fonts.adobe.com" target="_self">Adobe Fonts</a>
    <a href="https://www.pexels.com" target="_self">Free Stock Photos</a>
    <a href="https://getwaves.io" target="_self">SVG Wave</a><hr style="width:100%;color:white;">
</div><br>
<div class="ad" >
    <div class="ad-card" data-label="Advertisment">
        <div class="ad-card-container" style="box-shadow:04px 04px 04px black;">
        <h1 class="ad-card-header">
            <br>#thisisudaykant  <br>Are you looking for a logo design ?
        </h1>
        <p class="ad-card-body">
            <img src="{{URL('/images/new.jpg')}}" alt="thisisudaykant">
        </p>
        </div>
    </div>
</div>
<br>
<p style="color:navy;text-align:center;">YouTube Latest Video:</p>

<iframe width="400" height="315" src="https://www.youtube.com/embed/P6PNRlUFeOA" style="border-radius:08px;border-width:03px;border-color:navy;border-style:solid;box-shadow:04px 04px 04px black;"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>

<center>
   <br>
    <div class="box">
        <div class="myPhoto" ><img src="{{URL('/images/dp.jpg')}}"><div class="badge" data-label="&#10003;"></div></div>
        <div class="myDetails">Er. Uday Kant Thakur<br><p class="designation">Software Developer</p><hr style="background-color: red;height: 0.5px;border-radius: 10px;">
            <div class="socialM">
                <a href="http://www.github.com/thisisudaykant"><img src="{{URL('/images/GitHub-Mark1.png')}}" id="git"></a>
                <a href="http://www.linkedin.com/uday-thakur-691b4811a"><img src="{{URL('/images/linkedin1.png')}}"></a>
                <a href="http://thisisudaykant.000webhostapp.com"><img src="{{URL('/images/tiukCompleteLogo.png')}}"></a>
                <a href="tel:+977000000000"><img src="{{URL('/images/phone.png')}}"></a>
                <a href="mailto:abhithaks@yahoo.com"><img src="{{URL('/images/Gmail1.png')}}" ></a>

            </div>
        </div>
    </div>
    
</center>

    <br>
    <div class="wrapper-l">
        <div class="info"></div>
        <div class="fetchLocation">
            <button onclick="getLocation()">
            Fetch Your Current Location
            <i class="fa fa-thumb-tack" aria-hidden="true"></i>
        </button>
        </div>
        <div class="reload">
            <button onclick="reloadPage()">
            <i class="fa fa-refresh" aria-hidden="true"></i>
            </button>
        </div>
    </div>
<script src="{{ URL::asset('js/location-script.js'); }}"></script>
<footer><hr style="border-color: #2E4053;">&#183; thisisudaykant &#183; #TIUK &#183; dashMedia&trade; &#183;2020&#183;<hr style="border-color: #2E4053;"></footer>      
</body>
</html>