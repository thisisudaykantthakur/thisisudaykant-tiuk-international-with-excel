<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        h1{
            margin-bottom: 0px;
            text-align: center;
            background-color: #2874A6;
            color: #F0F3F4;
            font-family: verdana;
            width: 100%;
            font-variant: small-caps;
        }
        textarea{
            margin-bottom: 0px;
            width: 100%;
            border-color: #2874A6;
            outline:none;
            font-size: larger;
            font-family: verdana;
        }
        p{
            background-color: #2874A6;
            color: #F0F3F4;
            margin-top: 0px;
            text-align: center;
            font-size: 30px;
            font-variant: small-caps;
        }
        #space{
            color: red;
            background-color: black;
            padding-left: 06px;
            padding-right: 01px;
            margin-right: 09px;
        }
        #word{
            font-size: 30px;
            background-color: black;
            padding-left: 05px;
            padding-right: 05px;
        }
        #char{
            font-size: 30px;
            background-color: black;
            padding-left: 05px;
            padding-right: 05px;
        }
        #space{
            font-size: 30px;
        }
    </style>

            
   
</head>
<body>
    <h1>Word Count</h1>
    <textarea name="" id="textbox" cols="30" rows="10"></textarea>
    <p> |
        <span id="word">0</span>
         word |  
         <span id="char">0</span> 
         character |
         <span id="space">0 </span>
         space |
    </p>

    <script>
        let textArea = document.getElementById("textbox");
        textArea.addEventListener('input', function(){
            let text = this.value;  
            text=text.trim();
            let char=text.length;            
            let wordCount=text.split(" ");
            let spaceCount=wordCount.filter(function(element){
                return element!=" ";
            });       
            document.getElementById("word").innerHTML=spaceCount.length;    
            let sp = document.getElementById("space").innerHTML=spaceCount.length-1;
            document.getElementById("char").innerHTML=char-sp;            
            if(text=="")
            {
                document.getElementById("word").innerHTML=0;  
            }          
        });
</script>
</body>
</html>