<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/t.png" type="image/icon type">    
    <title>#TIUK &#183; Profile</title>
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
           padding: 05px;
           font-family:'amaranth', sans-serif;
           font-size: small;
           display:inline-flex;
           float: right;
       }
       .navigation-tiuk a{
           text-decoration: none;
           color: #2E4053;
           padding: 05px;
           float: right;
           
       }
       .tiuk-pointer{
           cursor: pointer;
       }
       .navigation-tiuk a:hover{
           text-transform: uppercase;
           color: #F0F3F4;
           text-shadow: 02px 02px 02px black;
       }
      #active-profile{
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
            .chip-tiuk {
            display: inline-flex;
            padding: 0px 10px 0px 0px;
            height: 50px;
            font-size: 15px;
            font-weight:bold;
            font-family: 'amaranth', sans-serif;
            color: #2E4053;
            line-height: 39px;
            border-radius: 25px;
            border-color:#2E4053;
            border-style: solid;
            border-width: 01.5px;
            background-color: #f1f1f1;
            width: fit-content;
            margin-top: 50px;
            text-transform:uppercase;
            }

            .chip-tiuk img {
            margin: 01px;
            height: 43px;
            width: 43px;
            border-radius: 50%;
            top:01px;
             /* animation: pulse 1s infinite; */
      }
      @keyframes pulse {
          from{
              box-shadow: 0 0 0 0 rgba(255,122,0.3);
          }
          to{
            box-shadow: 0 0 0 150px rgba(255,122,0,0);
          }
      }
             
             
             
             .chip-tiuk-field {
            display: inline-block;
            padding: 0px;
            height: 50px;
            font-size: 15px;
            font-family: 'amaranth', sans-serif;
            color: #2E4053;
            line-height: 15px;
            border-radius: 25px;
            border-color:#2E4053;
            border-style: solid;
            border-width: 01.5px;
            background-color:#F0F3F4;
            text-align: center;
            width: fit-content;
            text-transform: uppercase;
            }
            

             #bars {
                margin: 2em auto;
                max-width: 680px;
                overflow: hidden;
            }

            .bar {
                float: left;
                width: 25%;
                text-align: center;
            }

            .bar h5 {
                font-size: 0.8em;
                font-weight: normal;
                margin: 0;
                text-transform: uppercase;
                font-family: 'amaranth', sans-serif;
                color: #2E4053;
            }

            .bar-circle {
                display: block;
                margin: 0.7em auto;
            }

        .chip-tiuk-field-at-level {
            display: flex;
            flex-direction: column;
            padding: 0px;
            font-size: 15px;
            font-family: 'amaranth', sans-serif;
            color: #2E4053;
            border-radius: 25px;
            border-color:#2E4053;
            border-style: solid;
            border-width: 01.5px;
            background-color:#F0F3F4;
            width: fit-content;
            text-transform: uppercase;
            }
            .chip-tiuk-field-level {
                    padding: 0px;
                    height: 50px;
                    font-size: 15px;
                    font-family: 'amaranth', sans-serif;
                    color: #2E4053;
                    line-height: 20px;
                    border-radius: 25px;
                    background-color:#F0F3F4;
                    text-align: center;
                    width: fit-content;
            }
            .chip-tiuk-field-level h4{
                display:inline;
                text-transform: uppercase;

            }
            .container-level {
                background-color:#2E4053;
                line-height: 10%;
                border-radius: 5px;
                padding: 05px;
                }

                .skills-tiuk-at-level {
                text-align: right;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right:05px ;
                color:#F0F3F4;
                }
                

                .fresher {width: 25%; background-color: #04AA6D;text-transform: uppercase;}
                .intermediate {width: 50%; background-color: #2196F3;text-transform: uppercase;}
                .advance {width: 75%; background-color: #f44336;text-transform: uppercase;}
             
         footer{
            position: static;
            left: 0;
            bottom: 0;
            margin: 0px;
            padding: 05px;
            width: 100%;
            text-align: center;
            text-shadow: 02px 02px 02px #F0F3F4;
            color: black;
            font-size: smaller;
            font-weight: bold;
            font-family: 'amaranth', sans-serif;
            cursor: pointer;
            text-transform:lowercase;
     } 

     
            .chip-tiuk-field-level-kn {
                    padding: 0px;
                    height: 50px;
                    font-size: 15px;
                    font-family: 'amaranth', sans-serif;
                    color: #2E4053;
                    border-radius: 25px;
                    border-color:#2E4053;
                    border-style: solid;
                    border-width: 01.5px;
                    background-color:#F0F3F4;
                    text-align: center;
                    position:relative;
                    left:0px;
                    line-height: 20px;

            }
            .chip-tiuk-field-level h4{
                display:inline;
                text-transform: uppercase;

            }

     .tabme-tiuk{
         width: auto;
         text-align: center;
         justify-content: center;
         display:grid;
         font-variant: small-caps;
         background-color:#F0F3F4;
         padding:0px;
         
        }
    .tabme-tiuk img{
        width: 40px;
        height: 40px;
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
<script>
    (function() {
     
     var Progress = function( element ) {
         
         this.context = element.getContext( "2d" );
         this.refElement = element.parentNode;
         this.loaded = 0;
         this.start = 4.72;
         this.width = this.context.canvas.width;
         this.height = this.context.canvas.height;
         this.total = parseInt( this.refElement.dataset.percent, 10 );
         this.timer = null;
         
         this.diff = 0;
         
         this.init();	
     };
     
     Progress.prototype = {
         init: function() {
             var self = this;
             self.timer = setInterval(function() {
                 self.run();	
             }, 25);
         },
         run: function() {
             var self = this;
             
             self.diff = ( ( self.loaded / 100 ) * Math.PI * 2 * 10 ).toFixed( 2 );	
             self.context.clearRect( 0, 0, self.width, self.height );
             self.context.lineWidth = 10;
             self.context.fillStyle = "#000";
             self.context.strokeStyle = "#d30000";
             self.context.textAlign = "center";
             
             self.context.fillText( self.loaded + "%", self.width * .5, self.height * .5 + 2, self.width );
             self.context.beginPath();
             self.context.arc( 35, 35, 30, self.start, self.diff / 10 + self.start, false );
             self.context.stroke();
             
             if( self.loaded >= self.total ) {
                 clearInterval( self.timer );
             }
             
             self.loaded++;
         }
     };
     
     var CircularSkillBar = function( elements ) {
         this.bars = document.querySelectorAll( elements );
         if( this.bars.length > 0 ) {
             this.init();
         }	
     };
     
     CircularSkillBar.prototype = {
         init: function() {
             this.tick = 25;
             this.progress();
             
         },
         progress: function() {
             var self = this;
             var index = 0;
             var firstCanvas = self.bars[0].querySelector( "canvas" );
             var firstProg = new Progress( firstCanvas );
             
             
             
             var timer = setInterval(function() {
                 index++;
                     
                 var canvas = self.bars[index].querySelector( "canvas" );
                 var prog = new Progress( canvas );
                 
                 if( index == self.bars.length ) {
                         clearInterval( timer );
                 } 
                 
             }, self.tick * 100);
                 
         }
     };
     
     document.addEventListener( "DOMContentLoaded", function() {
         var circularBars = new CircularSkillBar( "#bars .bar" );
     });
     
 })();
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

   <center> <div class="chip-tiuk">
        <img src="images/dp.jpg" alt="Uday">
       Uday Kant Thakur
    </div></center><br>
<center>
    <div class="chip-tiuk-field">
            <h2>Skills</h2>
                <div id="bars">

                <div class="bar" data-percent="90">
                    <h5>HTML 5</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="80">
                    <h5>CSS 3</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h5>PHP</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h5>JAVA</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h5>Python</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h5>JavaScript</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="85">
                    <h5>jQuery</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="85">
                    <h5>Selenium</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h5>MySQL</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="60">
                    <h5>PhotoShop</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="60">
                    <h5>illustrator</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="50">
                    <h5>Video Editing</h5>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
        </div>
    </div>

   
    <div class="chip-tiuk-field-at-level">
        <div class="chip-tiuk-field-level">
            <h2>Level in the field of </h2>
            <h4>Web design</h4>
                <div class="container-level">
                <div class="skills-tiuk-at-level intermediate">Intermediate</div>
                </div>
            <h4>Programming</h4>
                <div class="container-level">
                <div class="skills-tiuk-at-level fresher">Intermediate</div>
                </div>
            <h4>Software Testing</h4>
                <div class="container-level">
                <div class="skills-tiuk-at-level advance">Advance</div>
                </div>
            <h4>Graphics Design</h4>
                <div class="container-level">
                <div class="skills-tiuk-at-level intermediate">Intermediate</div>
                </div><br><br>
                
      
        <div class="chip-tiuk-field-at-level-kn" >
            <div class="chip-tiuk-field-level-kn">
                <h2>Knowledge of Software and Framework</h2>
                <table class="tabme-tiuk"  rules="all">
                    <tr>
                      <th style="line-height: 15px; padding: 08px; background-color:#F0F3F4;color:#2E4053; ">Logo of the Software</th>
                      <th style="line-height: 15px;padding: 08px;background-color:#F0F3F4;color:#2E4053;">Name of the Software</th>
                      <th style="line-height: 15px;padding: 08px;background-color:#F0F3F4;color:#2E4053;">Practice on(OS)</th>
                      <th style="line-height: 15px;padding: 08px;background-color:#F0F3F4;color:#2E4053;">My level on Software</th>
                    </tr>
                    <tr style="background-color:#45B39D;color: #F0F3F4;">
                      <td><img src="images/visual-studio-code.png"></td>  
                      <td>Visual Studio Code</td>
                      <td>window 10</td>
                      <td>Excellent</td>
                    </tr>
                    <tr>
                        <td><img src="images/eclipse.png"></td>  
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Eclipse</td>
                        <td>window 10</td>
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Excellent</td>
                    </tr>
                    <tr style="background-color:#45B39D;color: #F0F3F4;">
                        <td><img src="images/pycharm1.png"></td>  
                        <td>PyCharm</td>
                        <td>window 10</td>
                        <td>Excellent</td>
                    </tr>
                    <tr>
                        <td><img src="images/phpmyadmin1.png"></td>  
                        <td style="background-color: #73C6B6;color: #F0F3F4;">PHPMyAdmin</td>
                        <td>window 10</td>
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Excellent</td>
                    </tr>
                    <tr style="background-color:#45B39D;color: #F0F3F4;">
                        <td><img src="images/vmware.png"></td>  
                        <td>VMware</td>
                        <td>window 10</td>
                        <td>Excellent</td>
                    </tr>
                    <tr>
                        <td><img src="images/Oracle.png"></td>  
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Oracle DBMS</td>
                        <td>window 10</td>
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Excellent</td>
                    </tr>
                    <tr style="background-color:#45B39D;color: #F0F3F4;">
                        <td><img src="images/android-studio.png"></td>  
                        <td>Android Studio</td>
                        <td>window 10</td>
                        <td>Good</td>
                    </tr>
                    <tr>
                        <td><img src="images/photoshop1.png"></td>  
                        <td style="background-color: #73C6B6;color: #F0F3F4;">PhotoShop</td>
                        <td>window 10</td>
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Good</td>
                    </tr>
                    <tr style="background-color:#45B39D;color: #F0F3F4;">
                        <td><img src="images/illustrator.jpg"></td>  
                        <td>Illistrator</td>
                        <td>window 10</td>
                        <td>Good</td>
                    </tr>
                    
                    <tr>
                        <td><img src="images/laravel.png"></td>  
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Laravel</td>
                        <td>window 10</td>
                        <td style="background-color: #73C6B6;color: #F0F3F4;">Excellent</td>
                    </tr>
                  </table><br>
                  <h2 style="background-color: #F0F3F4;border-radius: 25px;
                  border-color:#2E4053;
                  border-style: solid;
                  border-width: 01.5px;line-height: 50px;">Worked Operating System</h2>
                  <img src="images/win10.png" alt="win10" width="80" height="80">
                  <img src="images/ubuntu1.png" alt="ubuntu" width="80" height="80">
                  <p style="text-transform:lowercase;">window 10 | ubuntu</p>
                  <hr>
                <footer>#thisisudaykant</footer>
            </div>
       </div></div></div>
</center>
</body>
</html>