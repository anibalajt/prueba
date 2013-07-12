<?php 
session_start();
if(isset($_SESSION['name_a_user'])){
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="include/jquery.mousewheel.js"></script>
        <script>
       $(document).ready(function() {
            $('img#view').click(function(){
                $('#output').addClass('out');
                $('#output').css('display','block');
                $('.content').css('display','none');
                var src=this.src;
                $('#o_p_c-view').attr("src",src);
            });            
            $('#close').click(function(){
                $('#output').removeClass('out');
                
                $('#o_p_c-view').attr("src","");
                $('#output').css('display','none');
                $('.content').css('display','block');
            });    
            $('#textarea').blur(function(){
               var n= document.getElementById('textarea') 
               if(n.value.length>0){
                   $('#textarea').css("height","170px")
               }else{
                   $('#textarea').css("height","30px")
               }
            })
            $('#textarea').focus(function(){
                   $('#textarea').css("height","170px")
            })
         });           
       
        </script>
    </head>
    <body>
         <div class="main">
                  <div>
                        <div style="position:relative;" >
                            <div style="position: fixed;height: 8px;background: #00C481;width: 100%;min-width: 940px;z-index: 12;" >
                                    <div class="cofg" style="position: absolute;right: 14px;width: 50px;height: 50px;">
                                        <div class="i-confg" style="width: 64px;height: 50px;
                                         position: fixed;background-color: #00C481;border-bottom-left-radius: 54px;">
                                            <div class="confg" style="height: 37px;width: 30px;background: url('img/1.png')-6px -134px;right: -22px;position: relative;
                                              top: 1px;">
                                                <div class="nav_confg" style="width: 151px;height: 100px;padding: 10px;background: #00C481;position: absolute;color: white">
                                                    <ul>
                                                        <li style="color: white;font-size: 14px;">
                                                              <?php
                                                              if (isset($_SESSION["nombre_usuario"])) 
                                                                {
                                                                }else{
                                                               echo '<a style="color: white;text-decoration: none;
                                                                  " href="include/logout.php" title="Cerrar sesión">Cerrar sesión</a>';
                                                                 }   
                                                              ?>
                                                        </li>
                                                    </ul>
                                                </div> 
                                            </div>
                                      </div>
                                    </div>
                            </div>
                              <div class="h_ti">
                                     <div>
                                        <div class="na_pa">
                                              xxxxxxxxxx         
                                         </div>
<!--                                         <div style="background: rgba(0, 196, 129, 0.93); width: 50px;height: 8px;   position: relative;
                                         top: 46px; z-index: 12;"></div>-->
                                   </div>     
                             </div>
                        </div>
                        <div class="cont_header"> 
                            <div class="c_h_h">
                                <div class="ch_h_d">
                                    <div class="header">
                                        
                                        <div style="padding: 0px;">
                                           
                                            <div style="display: none;float: left;left: 110px;position: relative;">
                                            <input id="cb" class="cb" name="b" type="text" autocomplete="on" value="" placeholder="Buscar...">
                                            </div>
                                            <div  style=" top: 17px;position: relative;padding: 5px;height: 31px;">
                                                 <?php
                                                    include('include/menu.php');
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                            </div> 
                        </div>
                      <div>
                        <div class="content">
                       <?php
                            include('include/left.php');
                       ?>
                        <?php
                           echo $pagemaincontent;
                        ?> 
                        </div>
                     </div>
                         <div id="output" >
                             <div style="position: relative;min-width: 990px;min-height: 500px;width: 100%;height: 100%;display: table;">
                                        <div class="o_p_c-left" style="text-align: center;height: 100%;position: relative;width: 72%;display: table-cell;  vertical-align: middle;  position: relative;">
                                            <img id="o_p_c-view" src=""
                                                 style="margin: 0px; padding: 0px; border: 0px; 
                                                 outline: rgb(0, 0, 0); font-style: inherit; position: relative;  
                                                 overflow: hidden;  width: auto;height: auto;">
                                        </div>
                                        <div class="o_p_c_right" style="
                                            position: absolute;height: 100%;width: 28%;background: white;
                                            right: 0;float: right;-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
                                            -moz-box-shadow: 0 0 10px rgba(0,0,0,0.4);
                                             box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
                                        ">
                                        <div id="close" style="
                                                                       position: absolute;right: 0;font-size: 42px; margin: 14px;
                                                                        cursor: pointer;width: 34px;height: 34px;text-align: center;
                                                                    ">x</div>
                                        </div>
                                    
                             </div>
                         </div>
                        
                      <div class="right">
                            <?php
//                            include('include/right.php');
                            ?>
                        </div>
                        <div class="footer">
                
                        </div>
                </div>        
            </div>
    </body>
</html>
<?php
}else{
header ("Location: login/"); 
exit;
}
 
?>