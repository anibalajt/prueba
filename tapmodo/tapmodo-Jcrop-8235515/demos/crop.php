<?php

?><!DOCTYPE html>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.Jcrop.js"></script>
  <!--<link rel="stylesheet" href="corta/main.css" type="text/css" />-->
  <!--<link rel="stylesheet" href="corta/demos.css" type="text/css" />-->
  <link rel="stylesheet" href="../css/jquery.Jcrop.css" type="text/css" />

<script type="text/javascript">

  $(function(){

    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords
      },function(){
      api = this;
      api.setSelect([150,0,0,150]);
      api.setOptions({ bgFade: true });
    });
    $("#botonRecorte").click(function(){
        var x=$('#x').val();
        var y=$('#y').val();
        var w=$('#w').val();
        var h=$('#h').val();
        alert($("#cropbox").width())
//       $.ajax({
//            type: "POST",
//            url: "resizeThumbnail.php",
//            data: {"x":x,"y":y,"w":w,"h":h},
//            cache: false,
//            success: function(html){
//                $("#cropbox").attr("src","corta/resize_1373310474.jpg");
//            }
//      });
    });
  });

  function updateCoords(c)
  {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('Por favor seleccione una región de recorte.');
    return false;
  };

</script>

    <!-- This is the image we're attaching Jcrop to -->
    <input type="button" id="crear">
    <img style="max-width: 500px;" src="corta/resize_1373310474.jpg" id="cropbox" />
    <form method="post" onsubmit="return checkCoords();">
            <input type="hidden" id="x" name="x" />
            <input type="hidden" id="y" name="y" />
            <input type="hidden" id="w" name="w" />
            <input type="hidden" id="h" name="h" />
            <input id="botonRecorte" type="button" value="Establecer como foto de perfil" class="btn btn-large btn-inverse" />
    </form>

