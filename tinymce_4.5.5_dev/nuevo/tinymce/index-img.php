<!DOCTYPE html>
<html>
<head>
  <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=pe0uqtbbjlg1z2wehw3rxoutfnuf3g1rfjaczhbo71gp8jqr"></script>
  <script>
    tinymce.init({
        selector: 'textarea',
        editor_selector :"mytextarea",
        height:"500px",
        width:"80%",
        paste_data_images: true,
        images_upload_url: 'postAcceptor.php',
        images_upload_base_path: '',
        images_upload_credentials: true,
        theme: 'modern',
        plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'save table contextmenu directionality emoticons template paste textcolor',
          'paste'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | paste'
      });

  </script>
</head>
<body>
    <h1>IMG _-_-_-_ UPLOAD</h1>
    <textarea id="mytextarea" name="cuznoname">Hello, World!</textarea>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</body>
</html>