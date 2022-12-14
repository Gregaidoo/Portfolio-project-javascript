<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="assets/styles1.css" />
    <script src="assets/game.js" defer></script>
    
</head>
<style>
 body {
    background-color: rgb(48, 72, 89);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
 }
 .activated{
    background-color: rgb(48, 72, 89);
 }
 .muted{
color: #7191A5 ;
}
</style>

<script>
   

    var type = "number"  
    var players = "1" 
    var grids = "4"
    
    
        function types(value,select){
        if(select == "i1"){
            const changecolors1 =  document.querySelector('.i1').classList.add('activated')
            const changecolors2 =  document.querySelector('.n1').classList.remove('activated')
         }else{
            const changecolors1 =  document.querySelector('.i1').classList.remove('activated')
            const changecolors2 =  document.querySelector('.n1').classList.add('activated')
         }
         type = value       
        console.log(type)
        } 


        function number(value,select){
            if(select == "p2"){
            const changecolors1 =  document.querySelector('.p1').classList.remove('activated')
            const changecolors2 =  document.querySelector('.p3').classList.remove('activated')
            const changecolors3 =  document.querySelector('.p4').classList.remove('activated')
            const changecolors4 =  document.querySelector('.p2').classList.add('activated')
         }
         if(select == "p3"){
            const changecolors1 =  document.querySelector('.p2').classList.remove('activated')
            const changecolors2 =  document.querySelector('.p1').classList.remove('activated')
            const changecolors3 =  document.querySelector('.p4').classList.remove('activated')
            const changecolors4 =  document.querySelector('.p3').classList.add('activated')
         }
         if(select == "p4"){
            const changecolors1 =  document.querySelector('.p2').classList.remove('activated')
            const changecolors2 =  document.querySelector('.p3').classList.remove('activated')
            const changecolors3 =  document.querySelector('.p1').classList.remove('activated')
            const changecolors4 =  document.querySelector('.p4').classList.add('activated')
         }
         if(select == "p1"){
            const changecolors1 =  document.querySelector('.p2').classList.remove('activated')
            const changecolors2 =  document.querySelector('.p3').classList.remove('activated')
            const changecolors3 =  document.querySelector('.p4').classList.remove('activated')
            const changecolors4 =  document.querySelector('.p1').classList.add('activated')
         }
        

        players = value
        console.log(select)
        }


        function grid(value,select){
            if(select == "g2"){
            const changecolors1 =  document.querySelector('.g2').classList.add('activated')
            const changecolors2 =  document.querySelector('.g1').classList.remove('activated')
         }else{
            const changecolors1 =  document.querySelector('.g2').classList.remove('activated')
            const changecolors2 =  document.querySelector('.g1').classList.add('activated')
         }

        grids = value 
         console.log(grids) 
        }
    
        function pageload(){
          
          return location.href = "index1.php?players="+players+"&type="+type+"&grid="+grids ;
        }
      
        
    </script>
<body>
    <div>
        <h1><span class="title">memory</span></h1>
    </div>
    <div class="form-body">
        <div class="one">
            <h3><span class=" muted"> Select Theme</span> </h3>
        </div>
        <div class="two">
            <button onclick="types('number','n1')" class="dark n1">Numbers</button>
            <button onclick="types('icons','i1')" class="dark i1">Icons</button>
        </div>

        <div class="one">
            <h3><span class=" muted">Number of Players</span> </h3>
        </div>
        <div class="two">
            <button onclick="number('1','p1')" class="dark p1 numero">1</button>
            <button onclick="number('2','p2')" class="new p2 numero" >2</button>
            <button  onclick="number('3','p3')"class="dark p3 numero">3</button>
            <button onclick="number('4','p4')" class="new p4 numero">4</button>
        </div>

        <div class="one">
            <h3><span class="muted">Grid Size</span> </h3>
        </div>
        <div class="two">
            <button onclick="grid('4','g1')" class="dark g1">4x4</button>
            <button onclick="grid('6','g2')" class="new g2">6x6</button>
        </div>
        <div class="two mt">
            <button onclick="pageload()" class="reset">Start Game</button>
        </div>
    </div>

</body>
<script>
     const changecolors1 =  document.querySelector('.n1').classList.add('activated')
    const changecolors2 =  document.querySelector('.p1').classList.add('activated')
    const changecolors3 =  document.querySelector('.g1').classList.add('activated')

</script>

</html>