<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#btnLogin").click(function(){
                $.ajax({
                    url:"acceso.php",
                    type:'POST',
                    data: $("#formulario").serialize(),
                    success:function (data){
                        if(data=="OK"){
                            window.location="home.php";
                        }else{
                            alert(data)
                        }
                        
                    }
                });    
                });
            });
        </script>
        <div>
            <form id="formulario" method="post">
            <table>
                <tr>
                    <td colspan="2">Login</td>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td>
                        <input type="text"  minlength="2"
                               name="txtUsuario"
                               required="true" placeholder="ingrese usario"/>
                    </td>
                    
                </tr>
                
                <tr>
                    <td>Pass:</td>
                    <td>
                        <input type="password" name="txtPass"  minlength="2" required="true">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="button" value="Login" id="btnLogin"/>
                    </td>
                </tr>
                    
            </table>
                </form>  
        </div>
    </body>
</html>
