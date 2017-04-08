<?php

 ?>
<!DOCTYPE html>
<html>
<head>
  <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=pe0uqtbbjlg1z2wehw3rxoutfnuf3g1rfjaczhbo71gp8jqr"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea',
    editor_selector :"mytextarea",
    height:"500px",
    width:"100%",
    theme: 'modern',
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
  </script>
</head>
<body>
<h1>TinyMCE Quick Start Guide</h1>

  <!-- <form action="Process.php"  method="post"> -->
    <textarea id="mytextarea" name="cuznoname">Hello, World!</textarea>
    <br>
    <button type="submit" name="nombre" onclick="arrayling(window.tinyMCE.activeEditor.getContent());">Funcion1</button>
    <button type="submit" name="nombre" onclick="myFunction(window.tinyMCE.activeEditor.getContent());">Funcion2</button>
    <button type="submit" name="nombre2" onclick="limpiar();">Clean</button>

  <div class="">
    <p id="demo"></p>
  </div>
  <script type="text/javascript">
  var cosas = new Array();
  var nada = '';
    function arrayling(text){
      // var res = text.split("([<][/])\w*[>]");
      var res = text.split("([<][/])\w*[>]");
      cosas = res;
      document.getElementById("demo").innerHTML = res;
    }
    function limpiar(){
      document.getElementById("demo").innerHTML = '';
    }
    function myFunction(str){
      variable =`<\/?\w+((\s+\w+(\s*=\s*(?:".*?"|'.*?'|[\^'">\s]+))?)+\s*|\s*)\/?>`;
      cosas = str.split(variable);
      nada = str;
      document.getElementById("demo").innerHTML = str;
    }
  </script>
</body>
</html>