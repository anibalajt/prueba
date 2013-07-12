<?php
session_start();
ob_start();
?>
<style>
#proli {
background: url(image/iconos/arrowblank.png) no-repeat 82px 11px !important;
}

#ingrss2{

background: url("http://fullcine.tv/casalinda/image/button-white.png") !important;
background-repeat: no-repeat   !important;
    float: right;
    height: 40px;
    margin-left: -145px;
    margin-top: -10px;
    position: absolute;
    width: 150px;
cursor: pointer; 
}

#nosotrli {
background: url(image/iconos/arrowblank.png) no-repeat 75px 11px !important;
}
.recient-na{
background: url(image/iconos/arrowblank.png) no-repeat 82px 11px !important;
}
#buscar {
background: #fff !important; 
}
#pedid {
background: url(image/iconos/carritowhite.png) no-repeat center left !important;
}

.red {
background: #EA0000;
height: 205px;
top: 0;
}
#ingrss , #pedid{
color: white !important;
}
#nav-ingress li a{
color:black !important;
}

.logo2{
display:block !important;
}
.logo1{
display:none !important;
}
.navbar-inverse .nav > li > a {
color: white !important;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$(".colgante").remove();
});
</script>

<div id="busqueda-filtr">
    <div class="namr-categ">
        <?php
            if(isset($_GET['id'])){
                if((int)$_GET['id']==1){
                    echo 'Cristalería> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Vasos> ';
                        if((int)$_GET['sub']==2)
                            echo 'Copas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Jarras> ';
                        if((int)$_GET['sub']==4)
                            echo 'Refractarios> ';
                        if((int)$_GET['sub']==5)
                            echo 'Salseras – Bomboneras> ';
                        if((int)$_GET['sub']==6)
                            echo 'Condimenteros> ';
                        if((int)$_GET['sub']==7)
                            echo 'Floreros> ';
                        if((int)$_GET['sub']==8)
                            echo 'Frascos> ';
                    }
                }elseif((int)$_GET['id']==2){
                    echo 'Cocina> ';
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Azafates-Bandejas> ';
                        if((int)$_GET['sub']==2)
                            echo 'Azucareros> ';
                        if((int)$_GET['sub']==3)
                            echo 'Bolos> ';
                        if((int)$_GET['sub']==4)
                            echo 'Canastas> ';
                        if((int)$_GET['sub']==5)
                            echo 'Cestas> ';
                        if((int)$_GET['sub']==6)
                            echo 'Coladores> ';
                        if((int)$_GET['sub']==7)
                            echo 'Condimenteros> ';
                        if((int)$_GET['sub']==8)
                            echo 'Despenseros> ';
                        if((int)$_GET['sub']==9)
                            echo 'Dulceras> ';
                        if((int)$_GET['sub']==10)
                            echo 'Embudos> ';
                        if((int)$_GET['sub']==11)
                            echo 'Escurridores> ';
                        if((int)$_GET['sub']==12)
                            echo 'Exprimidores> ';
                        if((int)$_GET['sub']==13)
                            echo 'Fuentes> ';
                        if((int)$_GET['sub']==14)
                            echo 'Hieleras> ';
                        if((int)$_GET['sub']==15)
                            echo 'Jarras> ';
                        if((int)$_GET['sub']==16)
                            echo 'Jarros> ';
                        if((int)$_GET['sub']==17)
                            echo 'Mantequilleras> ';
                        if((int)$_GET['sub']==18)
                            echo 'Paneras> ';
                        if((int)$_GET['sub']==19)
                            echo 'Platos> ';
                        if((int)$_GET['sub']==20)
                            echo 'Porta cubierto> ';
                        if((int)$_GET['sub']==21)
                            echo 'Porta vasos> ';
                        if((int)$_GET['sub']==22)
                            echo 'Rayadores> ';
                        if((int)$_GET['sub']==23)
                            echo 'Tapers> ';
                        if((int)$_GET['sub']==24)
                            echo 'Tazas> ';
                        if((int)$_GET['sub']==25)
                            echo 'Tazones> ';
                        if((int)$_GET['sub']==26)
                            echo 'Utilitarios> ';
                         if((int)$_GET['sub']==27)
                            echo 'Ollas> ';
                        if((int)$_GET['sub']==28)
                            echo 'Sartenes> ';
                        if((int)$_GET['sub']==29)
                            echo 'Utensilios>';
                        if((int)$_GET['sub']==30)
                            echo 'Tabla de Picar>';
                        if((int)$_GET['sub']==31)
                            echo 'Porta torta>';
                        if((int)$_GET['sub']==32)
                            echo 'Porta útiles>';
                        if((int)$_GET['sub']==33)
                            echo 'Porta Vajilla>';
                        if((int)$_GET['sub']==34)
                            echo 'Porta Vianda>';
                        if((int)$_GET['sub']==35)
                            echo 'Tabla de Picar>';
                        if((int)$_GET['sub']==36)
                            echo 'Porta Alimentos>';
                        if((int)$_GET['sub']==37)
                            echo 'Vasos>';
                    }
                }elseif((int)$_GET['id']==3){
                    echo 'Locería> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Tazas> ';
                        if((int)$_GET['sub']==2)
                            echo 'Platos> ';
                        if((int)$_GET['sub']==3)
                            echo 'Bowl> ';
                        if((int)$_GET['sub']==4)
                            echo 'Fuentes> ';
                        
                    }
                }elseif((int)$_GET['id']==4){
                    echo 'Muebles> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Bancos> ';
                        if((int)$_GET['sub']==2)
                            echo 'Cómodas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Mesas> ';
                        if((int)$_GET['sub']==4)
                            echo 'Sillas> ';
                     
                       
                    }
                }elseif((int)$_GET['id']==5){
                    echo 'Organizadores> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Cajas> ';
                        if((int)$_GET['sub']==2)
                            echo 'Canastillas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Neceseres> ';
                        if((int)$_GET['sub']==4)
                            echo 'Organizadores mil usos y portátiles> ';
                        if((int)$_GET['sub']==5)
                            echo 'Percheros> ';
                        if((int)$_GET['sub']==6)
                            echo 'Colgadores> ';
                        if((int)$_GET['sub']==7)
                            echo 'Gaveteros> ';
                    }
                }elseif((int)$_GET['id']==6){
                    echo 'Baño y Limpieza> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Baldes> ';
                        if((int)$_GET['sub']==2)
                            echo 'Bateas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Cestos> ';
                        if((int)$_GET['sub']==4)
                            echo 'Colgadores> ';
                        if((int)$_GET['sub']==5)
                            echo 'Recogedores> ';
                        if((int)$_GET['sub']==6)
                            echo 'Papeleras> ';
                        if((int)$_GET['sub']==7)
                            echo 'Colgadores – Ganchos> ';
                        if((int)$_GET['sub']==8)
                            echo 'Escobillas> ';
                        if((int)$_GET['sub']==9)
                            echo 'Esquineros> ';
                        if((int)$_GET['sub']==10)
                            echo 'Jaboneras-porta cepillos> ';
                        if((int)$_GET['sub']==11)
                            echo 'Tachos> ';
                        if((int)$_GET['sub']==12)
                            echo 'Porta rollos> ';
                        if((int)$_GET['sub']==13)
                            echo 'Repisas> ';
                       
                       
                    }
                }elseif((int)$_GET['id']==9){
                    echo 'Terrazas y aire Libre> ';
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Soleadoras> ';
                        if((int)$_GET['sub']==2)
                            echo 'Perezosas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Sillas de playa> ';
                        if((int)$_GET['sub']==4)
                            echo 'Coolers> ';
                        if((int)$_GET['sub']==5)
                            echo 'Sombrillas> ';
                        if((int)$_GET['sub']==6)
                            echo 'Macetas> ';
                       
                    }

                }elseif((int)$_GET['id']==7){
                    echo 'Electrodoméstico Pequeño> ';
                }elseif((int)$_GET['id']==8){
                    echo 'Industrial> ';
                     if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Tachos> ';
                        if((int)$_GET['sub']==2)
                            echo 'Caja cosechera> ';
                        if((int)$_GET['sub']==3)
                            echo 'Galoneras> ';
                        if((int)$_GET['sub']==4)
                            echo 'Cajas Industriales> ';
                        if((int)$_GET['sub']==5)
                            echo 'Jabas> ';
                     }
                }
            }
        ?>
    </div>
    <div id="option-filtro">
        <select class="flitrar">
            <option value="0">Filtrar por</option>
            <?php
            if(isset($_GET['id'])){
                 if(($_GET['id']=="all" || $_GET['id']=="0")){
            ?>
            
                <option value="1">Cristalería</option>
                <option value="2">Cocina</option>
                <option value="3">Locería</option>
                <option value="4">Muebles</option>
                <option value="5">Organizadores</option>
                <option value="6">Baño y Limpieza</option>
                <option value="7">Electrodoméstico Pequeño</option>
                <option value="8">Industrial</option>
                <option value="9">Terraza y Aires libres</option>
            
             <?php
                 }elseif(($_GET['id']==1)){
            ?>
           
            <option value="1">Vasos</option>
            <option value="2">Copas</option>
            <option value="3">Jarras</option>
            <option value="4">Refractarios</option>
            <option value="5">Salseras – Bomboneras</option>
            <option value="6">Condimenteros</option>
            <option value="7">Floreros</option>
            <option value="8">Frascos</option>
            
             <?php
                 }elseif(($_GET['id']==2)){
            ?>
            
            <option value="1">Azafates-Bandejas</option>
            <option value="2">Azucareros</option>
            <option value="3">Bolos</option>
            <option value="4">Canastas</option>
            <option value="5">Cestas</option>
            <option value="6">Coladores</option>
            <option value="7">Condimenteros</option>
		<option value="8">Despenseros</option>
                <option value="9">Dulceras</option>
                <option value="10">Embudos</option>
                <option value="11">Escurridores</option>
                <option value="12">Exprimidores</option>
                <option value="13">Fuentes</option>
                <option value="14">Hieleras</option>
                <option value="15">Jarras</option>
                <option value="16">Jarros</option>
                <option value="17">Mantequilleras</option>
                <option value="18">Paneras</option>
		<option value="19">Platos</option>
                <option value="20">Porta cubierto</option>
                <option value="21">Porta vasos</option>
                <option value="31">Porta torta</option>
                <option value="32">Porta útiles</option>
                <option value="33">Porta Vajilla</option>
                <option value="34">Porta Vianda</option>
                <option value="35">Porta Alimentos</option>
                <option value="22">Rayadores</option>
                <option value="36">Servilleteros</option>
                <option value="23">Tapers</option>
                <option value="24">Tazas</option>
                <option value="25">Tazones</option>
                <option value="26">Utilitarios</option>
                <option value="37">Vasos</option>
                <option value="27">Ollas</option>	
                <option value="28">Sartenes</option>	
                <option value="29">Utensilios</option>	
                <option value="30">Tabla de Picar</option>
                

             <?php
                 }elseif(($_GET['id']==3)){
            ?>
            
            <option value="1">Tazas</option>
            <option value="2">Platos</option>
            <option value="3">Bowl</option>
            <option value="4">Fuentes</option>
             <?php
                 }elseif(($_GET['id']==4)){
            ?>
            <option value="1">Bancos</option>
            <option value="2">Cómodas</option>
            <option value="3">Mesas</option>
            <option value="4">Sillas</option>
          
             <?php
                 }elseif(($_GET['id']==5)){
            ?>
                <option value="1">Cajas</option>
                <option value="2">Canastillas</option>
                <option value="3">Neceseres</option>
                <option value="4">Organizadores Mil usos y Portátiles</option>
                <option value="5">Percheros</option>
                <option value="6">Colgadores</option>
                <option value="7">Gaveteros</option>
             <?php
                 }elseif(($_GET['id']==6)){
            ?>
                <option value="1">Baldes</option>
                <option value="2">Bateas</option>
                <option value="3">Cestos</option>
                <option value="4">Colgadores</option>
                <option value="5">Recogedores</option>
                <option value="6">Papeleras</option>
                <option value="7">Colgadores – Ganchos</option>
                <option value="8">Escobillas</option>
                <option value="9">Esquineros</option>
                <option value="10">Jaboneras - Porta Cepillos</option>
                <option value="11">Tachos</option>
		<option value="12">Porta rollos</option>
		<option value="13">Repisas</option>
		
             <?php
                 }elseif(($_GET['id']==8)){
            ?>
                <option value="1">Tachos</option>
                <option value="2">Caja cosechera</option>
                <option value="3">Galoneras</option>
                <option value="4">Cajas Industriales</option>
                <option value="5">Jabas</option>
            <?php
            }elseif($_GET['id']==9){
            
            ?>
   
                <option value="1" >Soleadoras</option>
                <option value="2">Perezosas</option>
                <option value="3">Sillas de playa</option>
                <option value="4" >Coolers</option>
                <option value="5" >Sombrillas</option>
                <option value="6" >Macetas</option>
            <?php
            }
            }
            
            ?>
        </select>
        <select class="ordenar">
            <option value="0">Ordenar por</option>
            <option value="1">Alfabéticamente</option>
            <option value="2">Mas Recientes</option>
        </select>
        <select id="cantidad">
            <option value="0">Cantidad a Mostrar</option>
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="36">36</option>
            <option value="48">48</option>
        </select>
    </div>
</div>

    
<?php
define  ('INCLUDE_CHECK',true);
require './include/connect.php';
if(isset($_GET['id'])){
$idcat=(int)$_GET['id'];//id categoria
if(isset($_GET['cant'])){
$cantidad=$_GET['cant'];    
}  else {
$cantidad=12;
}
echo '<input type="hidden" id="canti-fil" value="'.$cantidad.'">
    <input id="categoria-preo" type="hidden" value="'.$idcat.'">';

if($idcat=="all" || $idcat=="0"){
        if(isset($_GET['sub'])&& $_GET['sub']!="" && $_GET['sub']!=0){
    $subcat=(int)$_GET['sub'];

        if (isset($_GET["max"])){
            $sig=$_GET["max"];
           $result = mysql_query("SELECT * FROM producto where  subcategoria=$subcat and id <$sig order by dt desc limit $cantidad");
        }else if (isset($_GET["min"])){
            $sig=$_GET["min"];
            $result = mysql_query("SELECT * FROM producto where subcategoria=$subcat  and id <$sig order by dt desc limit $cantidad");
        }else{
            $result = mysql_query("SELECT * FROM producto where subcategoria=$subcat   order by dt desc limit $cantidad");
        }

    }else{
        if (isset($_GET["max"])){
            $sig=$_GET["max"];
            $result = mysql_query("SELECT * FROM producto where id <$sig order by dt desc limit $cantidad" );
        }else if (isset($_GET["min"])){
            $sig=$_GET["min"];
            $result = mysql_query("SELECT * FROM producto where id <$sig  order by dt desc limit $cantidad ");
        }else{
            $result = mysql_query("SELECT * FROM producto   order by dt desc limit $cantidad");
        }

    }
}else{
        if(isset($_GET['sub'])&& $_GET['sub']!="" && $_GET['sub']!=0){
    $subcat=(int)$_GET['sub'];

        if (isset($_GET["max"])){
            $sig=$_GET["max"];
           $result = mysql_query("SELECT * FROM producto where categoria=$idcat and subcategoria=$subcat and id >$sig limit $cantidad");
        }else if (isset($_GET["min"])){
            $sig=$_GET["min"];
            $result = mysql_query("SELECT * FROM producto where categoria=$idcat and subcategoria=$subcat  and id <$sig order by id desc limit $cantidad");
        }else{
            $result = mysql_query("SELECT * FROM producto where categoria=$idcat and subcategoria=$subcat  and id >0 limit $cantidad");
        }

    }else{
        if (isset($_GET["max"])){
            $sig=$_GET["max"];
            $result = mysql_query("SELECT * FROM producto where categoria=$idcat and id >$sig limit $cantidad");
        }else if (isset($_GET["min"])){
            $sig=$_GET["min"];
            $result = mysql_query("SELECT * FROM producto where categoria=$idcat and id <$sig  order by id desc limit $cantidad ");
        }else{
            $result = mysql_query("SELECT * FROM producto where categoria=$idcat and id >0 limit $cantidad");
        }

    }
}


$v=  mysql_num_rows($result);
if($v!=0){
echo '<div id="cont-produ">';

$a=0;
while($row=mysql_fetch_assoc($result))
{

    $aMostrar=substr($row["descripcion"], 0, 40);//solo 200 caracteres
    $a++;
    
    if($a==1){
        echo '<div  style="margin-top:40px; border-bottom: 1px solid #CCCCCC;"  class="partr">
            <div id="producto" class="'.$row["id"].'">
                 <a  href="vist.php?id='.$row["id"].'"><img class="img-producto" src="image/productos/'.$row["imagen"].'"></a> 
                <p class="nombre-producto">
                    '.$row["nombre"].'
                </p>
                <p class="detalle-producto">
                    '.$aMostrar.'...
                </p>

                <p class="ver-producto">
                  <a style= "color: #fff;" href="vist.php?id='.$row["id"].'">ver detalles</a>
                </p>
                <p id="'.$row["id"].'" class="add-producto">
                  agregar a la bolsa
                </p>
            </div> ';
    }elseif($a==5){
        
echo '<div class="partr">
      <div id="producto" class="'.$row["id"].'">
       <a  href="vist.php?id='.$row["id"].'"> <img class="img-producto" src="image/productos/'.$row["imagen"].'"></a> 
        <p class="nombre-producto">
            '.$row["nombre"].'
        </p>
        <p class="detalle-producto">
            '.$aMostrar.'...
        </p>

        <p class="ver-producto">
          <a style= "color: #fff;"  href="vist.php?id='.$row["id"].'">ver detalles</a>
        </p>
        <p id="'.$row["id"].'" class="add-producto">
          agregar a la bolsa
        </p>
    </div>  
';
    }else{
        echo '
      <div style="border-bottom: none; margin-bottom: 30px; " id="producto" class="'.$row["id"].'">
         <a  href="vist.php?id='.$row["id"].'">  <img class="img-producto" src="image/productos/'.$row["imagen"].'"></a>
        <p class="nombre-producto">
            '.$row["nombre"].'
        </p>
        <p class="detalle-producto">
            '.$aMostrar.'...
        </p>

        <p class="ver-producto">
          <a style="color: #fff;" href="vist.php?id='.$row["id"].'">Ver detalles</a>
        </p>
        <p id="'.$row["id"].'" class="add-producto">
          agregar a la bolsa
        </p>
    </div> 


';
    if($a==4){
        $a=4;
        echo '</div>';
    }elseif($a==8){
        $a=4;
        echo '</div>';
    }
}
}
}
?>
<div style="display: table;width: 100%; margin-top: 20px; margin-bottom:20px;">
         <?php
         if($idcat=="all" || $idcat=="0"){
            if(isset($_GET['sub'])&& $_GET['sub']!="" && $_GET['sub']!=0){
                $maximo=  mysql_num_rows($result);
                   if($maximo!=0){
                      
                        if($maximo==$cantidad){
                            if (isset($_GET["min"])){
                                  $maximo=mysql_result($result, 0, "id");
                            }else{
                                 $maxi=mysql_num_rows($result)-1;
                                 $maximo=mysql_result($result, $maxi, "id");
                            }
                        }else{
                            $maximo="no";
                        }
                        if (isset($_GET["min"])){
                            $maxi=mysql_num_rows($result)-1;
                                 $minimo=mysql_result($result, $maxi, "id");
                        }else{
                            $minimo=mysql_result($result, 0, "id");
                        }
//                        $resu= mysql_query("SELECT * FROM producto where subcategoria=$subcat ");
//                        $total= mysql_num_rows($resu);
                   }
                   }else{
   //                   $max= mysql_query("SELECT id FROM producto where categoria=$idcat order by id asc limit 12");
                      $maximo=  mysql_num_rows($result);
                      if($maximo!=0){
                           
                           if($maximo==$cantidad){
                              if (isset($_GET["min"])){
                                  $maximo=mysql_result($result, 0, "id");
                            }else{
                                 $maxi=mysql_num_rows($result)-1;
                                 $maximo=mysql_result($result, $maxi, "id");
                            }
                           }else{
                               $maximo="no";
                           }
                           if (isset($_GET["min"])){
                            $maxi=mysql_num_rows($result)-1;
                                 $minimo=mysql_result($result, $maxi, "id");
                            }else{
                                $minimo=mysql_result($result, 0, "id");
                            }
//                           $resu= mysql_query("SELECT * FROM producto ");
//                           $total= mysql_num_rows($resu);
                      }
            }
        }else{
                if(isset($_GET['sub'])&& $_GET['sub']!="" && $_GET['sub']!=0){
   //              $max= mysql_query("SELECT id FROM producto where categoria=$idcat and subcategoria=$subcat  order by id asc limit 12");
                 $maximo=  mysql_num_rows($result);
                   if($maximo!=0){
                   
                        if($maximo==$cantidad){
                            if (isset($_GET["min"])){
                                  $maximo=mysql_result($result, 0, "id");
                            }else{
                                 $maxi=mysql_num_rows($result)-1;
                                 $maximo=mysql_result($result, $maxi, "id");
                            }
                        }else{
                            $maximo="no";
                        }
                        if (isset($_GET["min"])){
                            $maxi=mysql_num_rows($result)-1;
                                 $minimo=mysql_result($result, $maxi, "id");
                        }else{
                            $minimo=mysql_result($result, 0, "id");
                        }
//                        $resu= mysql_query("SELECT * FROM producto where categoria=$idcat and subcategoria=$subcat ");
//                        $total= mysql_num_rows($resu);
                   }
                   }else{
   //                   $max= mysql_query("SELECT id FROM producto where categoria=$idcat order by id asc limit 12");
                      $maximo=  mysql_num_rows($result);
                      if($maximo!=0){
                       
                           if($maximo==$cantidad){
                               if (isset($_GET["min"])){
                                  $maximo=mysql_result($result, 0, "id");
                            }else{
                                 $maxi=mysql_num_rows($result)-1;
                                 $maximo=mysql_result($result, $maxi, "id");
                            }
                           }else{
                               $maximo="no";
                           }
                           if (isset($_GET["min"])){
                                $maxi=mysql_num_rows($result)-1;
                                 $minimo=mysql_result($result, $maxi, "id");
                        }else{
                            $minimo=mysql_result($result, 0, "id");
                        }
//                           $resu= mysql_query("SELECT * FROM producto where categoria=$idcat");
//                           $total= mysql_num_rows($resu);
                      }
            }
        }
        if($maximo!="no"){
//         $totalPag = ceil($total/12);
        $l = 0;
          if(isset($_GET['pag'])){
          $pag=$_GET['pag'];
          $l =$pag;
          }  else {
           $l = 0;    
          }
          $a=0;
         for( $i=1; $i<=2 ; $i++)
         {
             $a++;
           
            if (isset($_GET["max"])){
                
                if ($a==1){
                 echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&min=$minimo\" style=\"margin: 0 5px; font-family: arial; font-size: 13px;color: #ff0000; \"> < ATR�?S </a>"; 
                 echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&min=$minimo\" style=\"margin: 0 5px;font-family: arial; font-size: 13px;color: #ff0000;\">$l</a> - "; 
                 $l++;
                }elseif ($a==2) {
                    echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&max=$maximo\" style=\"margin: 0 5px; font-family: arial;font-size: 13px;color: #ff0000;\">$l</a>"; 
                    echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&max=$maximo\" style=\"margin: 0 5px; font-family: arial;font-size: 13px;color: #ff0000;\"> SIGUIENTE ></a>"; 

               }
            }elseif (isset($_GET["min"])){
                $l--;
                
                if ($a==1){
                    if($l>1){
                        $l--;
                        echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&min=$minimo\" style=\"margin: 0 5px; font-family: arial; font-size: 13px;color: #ff0000; \"> < ATR�?S </a>"; 
                        echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&min=$minimo\" style=\"margin: 0 5px;font-family: arial; font-size: 13px;color: #ff0000;\">$l</a> - "; 
                       
                 
                    }
                }elseif ($a==2) {
                    if($l>1){$l=1;}
                    $l++;
                    $l++;
                    echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&max=$maximo\" style=\"margin: 0 5px; font-family: arial;font-size: 13px;color: #ff0000;\">$l</a>"; 
                    echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&max=$maximo\" style=\"margin: 0 5px; font-family: arial;font-size: 13px;color: #ff0000;\"> SIGUIENTE ></a>"; 

               }
            }else{
                if ($a==1){
                $l++;
                   echo"<a href=\"?cant=$cantidad&pag=2&id=$idcat&sub=$subcat&max=$maximo\" style=\"margin: 0 5px; font-family: arial;font-size: 13px;color: #ff0000;\">2</a>"; 
                    echo"<a href=\"?cant=$cantidad&pag=2&id=$idcat&sub=$subcat&max=$maximo\" style=\"margin: 0 5px; font-family: arial;font-size: 13px;color: #ff0000;\"> SIGUIENTE ></a>"; 
                }
            }
         
         }
         }else{
       
         if(isset($_GET['pag'])){
          $pag=$_GET['pag'];
          $l =$pag;
          }  else {
           $l = 0;    
          }
            if (isset($_GET["max"])){
                 echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&min=$minimo\" style=\"margin: 0 5px; font-family: arial; font-size: 13px; color: #ff0000;\"> < ATR�?S </a>"; 
                
                 echo"<a href=\"?cant=$cantidad&pag=$l&id=$idcat&sub=$subcat&min=$minimo\" style=\"margin: 0 5px;font-family: arial; font-size: 13px;color: #ff0000;\">$l</a> - "; 
            }
         }
         }
      ?>
    </div>
    </div>
    
<div id="busqueda-filtr">
    <div class="namr-categ">
        <?php
            if(isset($_GET['id'])){
                if((int)$_GET['id']==1){
                    echo 'Cristalería> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Vasos> ';
                        if((int)$_GET['sub']==2)
                            echo 'Copas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Jarras> ';
                        if((int)$_GET['sub']==4)
                            echo 'Refractarios> ';
                        if((int)$_GET['sub']==5)
                            echo 'Salseras – Bomboneras> ';
                        if((int)$_GET['sub']==6)
                            echo 'Condimenteros> ';
                        if((int)$_GET['sub']==7)
                            echo 'Floreros> ';
                        if((int)$_GET['sub']==8)
                            echo 'Frascos> ';
                    }
                }elseif((int)$_GET['id']==2){
                    echo 'Cocina> ';
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Azafates-Bandejas> ';
                        if((int)$_GET['sub']==2)
                            echo 'Azucareros> ';
                        if((int)$_GET['sub']==3)
                            echo 'Bolos> ';
                        if((int)$_GET['sub']==4)
                            echo 'Canastas> ';
                        if((int)$_GET['sub']==5)
                            echo 'Cestas> ';
                        if((int)$_GET['sub']==6)
                            echo 'Coladores> ';
                        if((int)$_GET['sub']==7)
                            echo 'Condimenteros> ';
                        if((int)$_GET['sub']==8)
                            echo 'Despenseros> ';
                        if((int)$_GET['sub']==9)
                            echo 'Dulceras> ';
                        if((int)$_GET['sub']==10)
                            echo 'Embudos> ';
                        if((int)$_GET['sub']==11)
                            echo 'Escurridores> ';
                        if((int)$_GET['sub']==12)
                            echo 'Exprimidores> ';
                        if((int)$_GET['sub']==13)
                            echo 'Fuentes> ';
                        if((int)$_GET['sub']==14)
                            echo 'Hieleras> ';
                        if((int)$_GET['sub']==15)
                            echo 'Jarras> ';
                        if((int)$_GET['sub']==16)
                            echo 'Jarros> ';
                        if((int)$_GET['sub']==17)
                            echo 'Mantequilleras> ';
                        if((int)$_GET['sub']==18)
                            echo 'Paneras> ';
                        if((int)$_GET['sub']==19)
                            echo 'Platos> ';
                        if((int)$_GET['sub']==20)
                            echo 'Porta cubierto> ';
                        if((int)$_GET['sub']==21)
                            echo 'Porta vasos> ';
                        if((int)$_GET['sub']==22)
                            echo 'Rayadores> ';
                        if((int)$_GET['sub']==23)
                            echo 'Tapers> ';
                        if((int)$_GET['sub']==24)
                            echo 'Tazas> ';
                        if((int)$_GET['sub']==25)
                            echo 'Tazones> ';
                        if((int)$_GET['sub']==26)
                            echo 'Utilitarios> ';
                         if((int)$_GET['sub']==27)
                            echo 'Ollas> ';
                        if((int)$_GET['sub']==28)
                            echo 'Sartenes> ';
                        if((int)$_GET['sub']==29)
                            echo 'Utensilios>';
                        if((int)$_GET['sub']==30)
                            echo 'Tabla de Picar>';
                        if((int)$_GET['sub']==31)
                            echo 'Porta torta>';
                        if((int)$_GET['sub']==32)
                            echo 'Porta útiles>';
                        if((int)$_GET['sub']==33)
                            echo 'Porta Vajilla>';
                        if((int)$_GET['sub']==34)
                            echo 'Porta Vianda>';
                        if((int)$_GET['sub']==35)
                            echo 'Tabla de Picar>';
                        if((int)$_GET['sub']==36)
                            echo 'Porta Alimentos>';
                        if((int)$_GET['sub']==37)
                            echo 'Vasos>';
                        
                        
                    }
                }elseif((int)$_GET['id']==3){
                    echo 'Locería> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Tazas> ';
                        if((int)$_GET['sub']==2)
                            echo 'Platos> ';
                        if((int)$_GET['sub']==3)
                            echo 'Bowl> ';
                        if((int)$_GET['sub']==4)
                            echo 'Fuentes> ';
                        
                    }
                }elseif((int)$_GET['id']==4){
                    echo 'Muebles> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Bancos> ';
                        if((int)$_GET['sub']==2)
                            echo 'Cómodas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Mesas> ';
                        if((int)$_GET['sub']==4)
                            echo 'Sillas> ';
                     
                       
                    }
                }elseif((int)$_GET['id']==5){
                    echo 'Organizadores> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Cajas> ';
                        if((int)$_GET['sub']==2)
                            echo 'Canastillas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Neceseres> ';
                        if((int)$_GET['sub']==4)
                            echo 'Organizadores mil usos y portátiles> ';
                        if((int)$_GET['sub']==5)
                            echo 'Percheros> ';
                        if((int)$_GET['sub']==6)
                            echo 'Colgadores> ';
                       if((int)$_GET['sub']==7)
                            echo 'Gaveteros> ';
                    }
                }elseif((int)$_GET['id']==6){
                    echo 'Baño y Limpieza> ';
                
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Baldes> ';
                        if((int)$_GET['sub']==2)
                            echo 'Bateas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Cestos> ';
                        if((int)$_GET['sub']==4)
                            echo 'Colgadores> ';
                        if((int)$_GET['sub']==5)
                            echo 'Recogedores> ';
                        if((int)$_GET['sub']==6)
                            echo 'Papeleras> ';
                        if((int)$_GET['sub']==7)
                            echo 'Colgadores – Ganchos> ';
                        if((int)$_GET['sub']==8)
                            echo 'Escobillas> ';
                        if((int)$_GET['sub']==9)
                            echo 'Esquineros> ';
                        if((int)$_GET['sub']==10)
                            echo 'Jaboneras-porta cepillos> ';
                        if((int)$_GET['sub']==11)
                            echo 'Tachos> ';
                        if((int)$_GET['sub']==12)
                            echo 'Porta rollos> ';
                        if((int)$_GET['sub']==13)
                            echo 'Repisas> ';
                        
                       
                    }
                }elseif((int)$_GET['id']==9){
                    echo 'Terrazas y aire Libre> ';
                    if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Soleadoras> ';
                        if((int)$_GET['sub']==2)
                            echo 'Perezosas> ';
                        if((int)$_GET['sub']==3)
                            echo 'Sillas de playa> ';
                        if((int)$_GET['sub']==4)
                            echo 'Coolers> ';
                        if((int)$_GET['sub']==5)
                            echo 'Sombrillas> ';
                        if((int)$_GET['sub']==6)
                            echo 'Macetas> ';
                       
                    }

                }elseif((int)$_GET['id']==7){
                    echo 'Electrodoméstico Pequeño> ';
                }elseif((int)$_GET['id']==8){
                    echo 'Industrial> ';
                     if(isset($_GET['sub'])){
                        if((int)$_GET['sub']==1)
                            echo 'Tachos> ';
                        if((int)$_GET['sub']==2)
                            echo 'Caja cosechera> ';
                        if((int)$_GET['sub']==3)
                            echo 'Galoneras> ';
                        if((int)$_GET['sub']==4)
                            echo 'Cajas Industriales> ';
                        if((int)$_GET['sub']==5)
                            echo 'Jabas> ';
                     }
                }
            }
        ?>
    </div>
    <div id="option-filtro">
        <select class="flitrar">
            <option value="0">Filtrar por</option>
            <?php
            if(isset($_GET['id'])){
                 if(($_GET['id']=="all" || $_GET['id']=="0")){
            ?>
            
                <option value="1">Cristalería</option>
                <option value="2">Cocina</option>
                <option value="3">Locería</option>
                <option value="4">Muebles</option>
                <option value="5">Organizadores</option>
                <option value="6">Baño y Limpieza</option>
                <option value="7">Electrodoméstico Pequeño</option>
                <option value="8">Industrial</option>
                <option value="9">Terraza y Aires libres</option>
            
             <?php
                 }elseif(($_GET['id']==1)){
            ?>
           
            <option value="1">Vasos</option>
            <option value="2">Copas</option>
            <option value="3">Jarras</option>
            <option value="4">Refractarios</option>
            <option value="5">Salseras – Bomboneras</option>
            <option value="6">Condimenteros</option>
            <option value="7">Floreros</option>
            <option value="8">Frascos</option>
            
             <?php
                 }elseif(($_GET['id']==2)){
            ?>
            
            <option value="1">Azafates-Bandejas</option>
            <option value="2">Azucareros</option>
            <option value="3">Bolos</option>
            <option value="4">Canastas</option>
            <option value="5">Cestas</option>
            <option value="6">Coladores</option>
            <option value="7">Condimenteros</option>
		<option value="8">Despenseros</option>
                <option value="9">Dulceras</option>
                <option value="10">Embudos</option>
                <option value="11">Escurridores</option>
                <option value="12">Exprimidores</option>
                <option value="13">Fuentes</option>
                <option value="14">Hieleras</option>
                <option value="15">Jarras</option>
                <option value="16">Jarros</option>
                <option value="17">Mantequilleras</option>
                <option value="18">Paneras</option>
		<option value="19">Platos</option>
                <option value="20">Porta cubierto</option>
                <option value="21">Porta vasos</option>
                <option value="31">Porta torta</option>
                <option value="32">Porta útiles</option>
                <option value="33">Porta Vajilla</option>
                <option value="34">Porta Vianda</option>
                <option value="35">Porta Alimentos</option>
                <option value="22">Rayadores</option>
                <option value="36">Servilleteros</option>
                <option value="37">Vasos</option>
                <option value="23">Tapers</option>
                <option value="24">Tazas</option>
                <option value="25">Tazones</option>
                <option value="26">Utilitarios</option>
                <option value="37">Vasos</option>
                <option value="27">Ollas</option>	
                <option value="28">Sartenes</option>	
                <option value="29">Utensilios</option>	
                <option value="30">Tabla de Picar</option>	
                
             <?php
                 }elseif(($_GET['id']==3)){
            ?>
            
            <option value="1">Tazas</option>
            <option value="2">Platos</option>
            <option value="3">Bowl</option>
            <option value="4">Fuentes</option>
             <?php
                 }elseif(($_GET['id']==4)){
            ?>
            <option value="1">Bancos</option>
            <option value="2">Cómodas</option>
            <option value="3">Mesas</option>
            <option value="4">Sillas</option>
          
             <?php
                 }elseif(($_GET['id']==5)){
            ?>
                <option value="1">Cajas</option>
                <option value="2">Canastillas</option>
                <option value="3">Neceseres</option>
                <option value="4">Organizadores Mil usos y Portátiles</option>
                <option value="5">Percheros</option>
                <option value="6">Colgadores</option>
                <option value="7">Gaveteros</option>
             <?php
                 }elseif(($_GET['id']==6)){
            ?>
                <option value="1">Baldes</option>
                <option value="2">Bateas</option>
                <option value="3">Cestos</option>
                <option value="4">Colgadores</option>
                <option value="5">Recogedores</option>
                <option value="6">Papeleras</option>
                <option value="7">Colgadores – Ganchos</option>
                <option value="8">Escobillas</option>
                <option value="9">Esquineros</option>
                <option value="10">Jaboneras - Porta Cepillos</option>
                <option value="11">Tachos</option>
		<option value="12">Porta rollos</option>
		<option value="13">Repisas</option>
		
             <?php
                 }elseif(($_GET['id']==8)){
            ?>
                <option value="1">Tachos</option>
                <option value="2">Caja cosechera</option>
                <option value="3">Galoneras</option>
                <option value="4">Cajas Industriales</option>
                <option value="5">Jabas</option>
            <?php
                 }elseif($_GET['id']==9){
            
            ?>
   
                <option value="1" >Soleadoras</option>
                <option value="2">Perezosas</option>
                <option value="3">Sillas de playa</option>
                <option value="4" >Coolers</option>
                <option value="5" >Sombrillas</option>
                <option value="6" >Macetas</option>
            <?php
            }
            }
            ?>
        </select>
        <select class="ordenar">
            <option value="0">Ordenar por</option>
            <option value="1">Alfabéticamente</option>
            <option value="2">Mas Recientes</option>
        </select>
        <select id="cantidad">
            <option value="0">Cantidad a Mostrar</option>
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="36">36</option>
            <option value="48">48</option>
        </select>
    </div>
</div>
<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "nombre titulo pagina";
  //Apply the template
    include("master.php");
?>
