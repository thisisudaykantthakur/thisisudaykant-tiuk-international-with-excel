<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="icon" href="./t.png" type="image/icon type">
    <title>Project & Design</title>
    <style>
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
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #F6DB6F;
            color:  #ECF0F1;            
        }
        @import url("https://use.typekit.net/qdy8dcw.css");
        
        .header{
            position: fixed;
            top:0px;
            left:0px;
            right: 0px;
            z-index: 1;
            background-color: rgba(46, 64, 83, 0.5);
        }
        .logo-tiuk{
            font-family: lato,sans-serif;
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
           font-family:amaranth, sans-serif;
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
      #active-graphics{
            text-transform: uppercase;
            color: #F0F3F4;
            text-shadow: 02px 02px 02px black;
       }
       .progress-container {
            width: 100%;
            height: 1px;
            background:#F0F3F4;
            }

            .progress-bar {
            height: 1px;
            background:red;
            width: 0%;
            }
            ::-webkit-scrollbar{
        width:5px;
    }
    ::-webkit-scrollbar-track{
        background:#F0F3F4;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb{
        background:#2E4053;
        border-radius: 50px;
    }
            
    .dashbord{
               
            display: flex;  
            flex-direction: row;
            flex-wrap: wrap;   
            justify-content: center; 
            position: relative;
            top:50px;

        }
        .imgBox{
            position: relative;
            width: 300px;
            height: 200px;
            background-size: cover;
            border:2px solid #fff;
            border-radius: 25px;
            margin: 05px;
            overflow: hidden;
            box-shadow: 03px 3px 1px 02px #2E4053;
        }
        .imgBox img{
            width:100%;
            transition: .5s;
        }
        .contrainer-bord{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:transparent;
            transition: .5s;
        }
        .contrainer::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            transform: translateX(-100%) scale(1) skew(-45deg);
            transition: .5s;
        }
        .content-bord{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 30px 50px;
            text-align: center;  
                
        }
        
        .content-bord h1{
            padding: 0;
            color: #000;
            margin-bottom: 20px;
            font-size: 1.5em;
            transform: translateY(-100%) scale(0);
            transition: .5s;
        }
        .content-bord p{
            padding: 0;
            color: #000;
            font-size: 1em;
            transform: scale(2);
            transition: .5s;
            opacity: 0;
        }
        .imgBox:hover .content-bord h1{
            transform: translateY(0) scale(1);
            background-color: #F6DB6F;
            cursor: pointer;
        }
        .imgBox:hover .content-bord p{
            transform: scale(1);
            opacity: 1;
            background-color: #FC5106;
            color: #F0F3F4;
            padding: 05px;
            text-align: justify;
            cursor: pointer;
        }
        .imgBox:hover img{
            transform: scale(1.5) translateY(-50px);
        }
        .imgBox:hover .contrainer-bord::after{
            opacity: 1;
            background-color: red;
            transform: translateX(0) scale(1) skew(-45deg);
        }      
       .vid{
            width: 500px;
            height: 300px;
            border-radius: 08px;
            box-shadow: 03px 3px 1px 02px #2E4053;
            margin-bottom: 10px;
            border-color: #000;
            border-style: solid;
            border-width: 01px;
       }

.collapsible {
  background-color: #2E4053;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: white;
  color: #2E4053;
}

.collapsible:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 05px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 5px;
  max-height: 0;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
  color: #000;
  overflow: hidden;
}
a{
    text-decoration: none;
    color: #2E4053;
}
.project-details-withName{
    position:relative;
    top: 100px;
    font-family: ubuntu;
    color: #000;
    margin: 05px;
}
table{
    border-collapse: collapse;
    padding: 05px;
    margin: 05px;
}
th{
    background-color:#2E4053;
    color: whitesmoke;
    border: 1px solid black;
    display: block;
    flex-wrap: wrap;
}
td{
    border: 1px solid black;
    display: block;
    flex-wrap: wrap;
    background-color: #f1f1f1;
    text-justify: auto;
    position:relative;
}
.imgSet{
    width: 300px;
    height:250px;
}
.lekheko{
    font-variant: small-caps;
}
 .lekheko::before{   
    content: '';
    position:absolute;
    top:0px;
    right: 0px;
    bottom: 0px;
    left: 0px; 
    background-image: url("{{URL('/images/tiukCompleteLogo.png')}}");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.3;
}

.footer{
            position:relative;
            left: 0px;
            bottom: -110px;
            width: 100%;
            text-align: center;
            text-shadow: 02px 02px 02px #F0F3F4;
            color: black;
            font-size: smaller;
            font-weight: bold;
            font-family: 'amaranth', sans-serif;
            cursor: pointer;
     }
    </style>
    <script>
        window.onscroll = function() {myFunction()};        
        function myFunction() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("myBar").style.width = scrolled + "%";
        }       
    </script>
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
    
     <div class="dashbord">
         <video src="{{URL('/videos/tiuk.mp4')}}" controls muted poster="{{URL('/images/bg-tiuk.jpg')}}" class="vid"></video>
    </div>
   <br>
   <div class="project-details-withName">
    <h2>thisisudaykant Projects</h2>
    <hr>

    <p>Project List: ACADEMIC</p>
    <button class="collapsible">Load Shadding Managament System And Notification</button>
    <div class="content">
      <table>
          <tr>
              <th>Name</th>
              <td>Load Shadding Managament System And Notification</td>
          </tr>
          <tr>
            <th>Domain</th>
            <td>Web Development</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Final Year Project</td>
        </tr>
        <tr>
            <th>About Project</th>
            <td class="lekheko">Load shedding is a way to distribute demand for electrical power across multiple power
                sources. Selective load shedding, even optimized but brutal, is the last resort before total
                shutdown. This paper addresses a new power system control strategy from customer’s
                perspective. Due to power deficit we’ve to shed some amount of loads eventually.<br>
                Now the main challenge is to determine the minimum load amount for shedding so that
                we can maximize electricity supply to customers. Using this management system,
                especially through web services and mobile application, we provide prior notification and
                time schedules for multiple areas. We propose programming model with a hardware system
                for the effective management of load shedding. <br>
                An additional advantage of this project is that the user can schedule the time as per his
                requirement there is no fixed scheduling and as it is dependent on user the consumers can
                be well informed about the load shedding so that he can postponed or pre-pone his
                important work accordingly thus there is no loss for the company as well as to the
                consumer.</td>
        </tr>
        <tr>
            <th>Technology</th>
            <td>HTML5, CSS3, JavaScript, PHP, MYSQL, XAMPP</td>
        </tr>
        <tr>
            <th>Flow chart of Software</th>
            <td><img src="{{URL('/images/new_data.png')}}" class="imgSet"></td>
        </tr>
        <tr>
            <th>Flow chart of Hardware</th>
            <td><img src="{{URL('/images/harware.png')}}" class="imgSet"></td>
        </tr>
        <tr>
            <th>Hardware Architecture</th>
            <td><img src="{{URL('/images/blockdaigram.jpg')}}" class="imgSet"></td>
        </tr>
         <tr>
            <th>Validation Under</th>
            <td>Visvesvaraya Technological University</td>
        </tr>
        <tr>
            <th>ScreenShots</th>
            <td><img src="{{URL('/images/0.png')}}" class="imgSet">
                <img src="{{URL('/images/2.png')}}" class="imgSet">
                <img src="{{URL('/images/1.png')}}" class="imgSet">
                <img src="{{URL('/images/3.png')}}" class="imgSet">
                <img src="{{URL('/images/4.png')}}" class="imgSet">
                <img src="{{URL('/images/5.png')}}" class="imgSet">
            </td>
        </tr>

        
      </table>
    </div>
    <button class="collapsible">3D House</button>
    <div class="content">
      <p>Loading Soon</p>
    </div>
    
    <p>Project List: NON-ACADEMIC</p>
    <button class="collapsible">Item Stock Management Application Development</button>
    <div class="content">
      <p>Loading Soon</p>
    </div>
    <button class="collapsible">Database Design for an Academic Institute</button>
    <div class="content">
      <p>Loading Soon</p>
    </div>
    <button class="collapsible">Search Model - Listing results</button>
    <div class="content">
      <p>Loading Soon</p>
    </div>
    <button class="collapsible">To-Do List</button>
    <div class="content">
      <p><a href="{{ URL::to('todo') }}"> &#183; &#x269E; &#183; <code style="color: #C30A35;"> To-do List </code> &#183; &#x269F; &#183; </a></p>
    </div>
    <button class="collapsible">Stop Watch</button>
    <div class="content">
      <p><a href="{{ URL::to('stopwatch') }}">&#183; &#x269E; &#183; <code style="color: #C30A35;"> Stop Watch</code> &#183; &#x269F; &#183; </a></p>
    </div>
    <button class="collapsible">Word Count</button>
    <div class="content">
      <p><a href="{{ URL::to('wordcount') }}">&#183; &#x269E; &#183; <code style="color: #C30A35;"> Word Count</code> &#183; &#x269F; &#183; </a></p>
    </div>
    <button class="collapsible">Stack Slide </button>
    <div class="content">
      <p><a href="{{ URL::to('card') }}">&#183; &#x269E; &#183; <code style="color: #C30A35;"> Stack Slide</code> &#183; &#x269F; &#183; </a></p>
    </div>
    <button class="collapsible">Blur the image</button>
    <div class="content">
      <p><a href="{{ URL::to('blur') }}">&#183; &#x269E; &#183; <code style="color: #C30A35;"> Blur Image</code> &#183; &#x269F; &#183; </a></p>
    </div>
    
   </div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<div class="footer"><hr style="border-color: #2E4053;">&#183; thisisudaykant &#183; #TIUK &#183; dashMedia&trade; &#183;2020&#183;<hr style="border-color: #2E4053;"></div>  
</body>
</html>