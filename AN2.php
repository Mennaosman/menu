<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
            
			function Ok()
			{
              var x=document.f1.n1.value;
              var y=document.f1.n2.value;

                 if (x==""&&y!="") 
                 	{alert("no please enter your name you /should enter the right name and email if you want to registrate any thing of our prouduct becouse if you do not we do not accept your registration");}
                 else if (y==""&&x!="") 
                 	{alert("no please enter your email you should enter the right name and email if you want to registrate any thing of our prouduct becouse if you do not we do not accept your registration");}
                 else if (x==""&&y=="") 
                 	{alert("no please enter your name and email you should enter the right name and email if you want to registrate any thing of our prouduct becouse if you do not we do not accept your registration ");}
                else{
                     document.f1.n1.value="";
                     document.f1.n2.value="";
                  alert(x+"Your are successfuly login please Enter The date that you will come to pay the initial cost  ");
                  } 
            }
                
		</script>
		
</head>
<body>
  <body style="background-image:url('images (4).jpg');background-repeat: no-repeat; border-width: 2000px;
		        background-size: 1400px; ">
        <form name="f1">
        	<h1>Welcome To Our Page For Dicoring And Furniture</h1>
        	<center >
	        	     <div id="AA"></div>
		            <b style="color:white"> please Enter Your name:</b> <input type="text" name="n1" style="margin-top: 300px"  value="">
		            <b style="color:white">please Enter your Email:</b><input type="text" name="n2" value="">
		            <br>
		           <input type="button" onclick="Ok()"  value="Send"><br>
		                  	 <select name="t">
			           <option value="1">1</option>
			           <option value="2">2</option>
			           <option value="3">3</option>
			           <option value="4">4</option>
			           <option value="5">5</option>
			           <option value="6">6</option>
			           <option value="7">7</option>
			           <option value="8">8</option>
			           <option value="9">9</option>
			           <option value="10">10</option>
			           <option value="11">11</option>
			           <option value="12">12</option>
			           <option value="13">13</option>
			           <option value="14">14</option>
			           <option value="15">15</option>
			           <option value="16">16</option>
			           <option value="17">17</option>
			           <option value="18">18</option>
			           <option value="19">19</option>
			           <option value="20">20</option>
			           <option value="21">21</option>
			           <option value="22">22</option>
			           <option value="23">23</option>
			           <option value="24">24</option>
			           <option value="25">25</option>
			           <option value="26">26</option>
			           <option value="27">27</option>
			           <option value="28">28</option>
			           <option value="29">29</option>
			           <option value="30">30</option>
			           <option value="31">31</option>
                   </select>
                   <select name="u">
			           <option value="a">1</option>
			           <option value="b">2</option>
			           <option value="c">3</option>
			           <option value="d">4</option>
			           <option value="f">5</option>
			           <option value="g">6</option>
			           <option value="e">7</option>
			           <option value="h">8</option>
			           <option value="i">9</option>
			           <option value="j">10</option>
			           <option value="k">11</option>
			           <option value="l">12</option>
			        </select>
			        <select name="p">
			           <option value="n">2019</option>
			           <option value="o">2020</option>
			           
                   </select>
                    <input type="button" onclick="Oki()"  value="Ok"><br>
                     <a href="antrihat.html"><h3>Previous Page</h3></a>

                  

        </form>
       


		          
           
        
        
        	
</body>
</html>