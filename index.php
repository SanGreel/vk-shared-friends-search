<!DOCTYPE html>
<html>

<head>
	<meta name="description" content="Найти общих друзей разных людей">
	<meta name="keywords" content="общие друзья, вконтакте друзья, друзья разных людей">
	<meta name="author" content="Найти общих друзей разных людей">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
</head>

<body>

	<div id="main">
		<div id="inp">
			<form id="myForm">
	
			    <input type="text" name="u1" id="u1" placeholder="User ID" onClick="this.select();">
				<input type="text" name="u2" id="u2" placeholder="User ID" onClick="this.select();" class="right">

			</form>
		</div>
		
		<div id="res">		
				<div id="content"></div>
		</div>		
	</div>
	
    <script>      
        $(document).ready(function(){          
            $('#u1,#u2').on('blur change focus focusin  mouseenter mouseleave', function() {  
            var msg   = $('#myForm').serialize();
                $.ajax({  
                    type: "POST",  
                    url: "main.php",  
                    data: msg,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                });  
                return false;  
            });  
        });  
    </script>  
    	
</body>
</html>
