
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4000">
    <textarea id="editor1" name="editor1" cols="80" rows="10">
          <script>
 
       // Replace the <textarea id="editor1"> with an CKEditor
       // instance, using default configurations.
       CKEDITOR.replace( 'editor1', {
           uiColor: '#14B8C4',
           toolbar: [
               [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
               [ 'FontSize', 'TextColor', 'BGColor' ]
           ]
       });
 
   </script>
   </textarea>
   
</div>


   

