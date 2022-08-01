var i = 0;
         function clickMe()
         {    
                var c=document.getElementById('count').value = ++i; 
                if(c==1){
                document.getElementById('count').innerHTML="Unlike";
                document.getElementById('count').style.backgroundColor="cadetblue";
                document.getElementById('count').style.borderStyle="inherit";
                document.getElementById('count').style.borderRadius="03px";
            }
            else{
                document.getElementById('count').innerHTML="Like";   
                i=0;             
            }                
         }
         
         var modal = document.getElementById("myModal"); 
            var btn = document.getElementById("s"); 
            var span = document.getElementsByClassName("close")[0];  
            btn.onclick = function() {
            modal.style.display = "block";
            var imgName = document.getElementById("img-post").src;
            var imgName1 = document.getElementById("img-postP").src;
            var link = document.getElementById("linkPostHere");
            link.innerHTML=imgName+"<br/>"+imgName1;
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

         function cmnt(){
            document.getElementById("comment-post").style.display="inline-block";
         }
         function showComment(){
            document.getElementById("comment-post").style.display="none";
             var cmnts=document.getElementById("cbox").value;
             if(cmnts=='' || cmnts==' '||cmnts=='\s')
             {
                 alert("Please provide us your comment");
            
             }
             else if(cmnts!='' || cmnts!=' '||cmnts!='\s')
             {
             document.getElementById("comment").innerHTML="&nbsp; &#183; "+cmnts+" &#183; "+"&nbsp;";
             document.getElementById("comment").style.fontSize="larger";
             document.getElementById("comment").style.fontFamily="ubuntu";
             document.getElementById("comment").style.fontWeight="bold";
             document.getElementById("comment").style.color="cadetblue";
             document.getElementById("comment").style.backgroundColor="#F6DB6F";
             document.getElementById("comment").style.borderRadius="25px";
             var today = new Date();
                var deviceName = platform.description;
                var date = today.getFullYear()+'|'+(today.getMonth()+1)+'|'+today.getDate();
                var time = today.getHours() + ":" + today.getMinutes(); 
                var dateTime = date+' '+" @"+time;
            document.getElementById("time").innerHTML="&nbsp;"+dateTime+" Device: "+deviceName+" "+"<i>&#183; saved &#183;</i>";  
            document.getElementById("time").style.fontSize="smaller";
             document.getElementById("time").style.fontFamily="ubuntu";
             document.getElementById("time").style.fontWeight="bold";
             document.getElementById("time").style.color="green"; 
             document.getElementById('t').style.backgroundColor="cadetblue";
             document.getElementById('t').style.borderStyle="inherit";
             document.getElementById('t').style.borderRadius="03px";
             
                 
             }
             
         }