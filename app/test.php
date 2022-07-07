 <?php
  
// Include the qrlib file
include 'phpqrcode\qrlib.php';
  
// $text variable has data for QR 
$text = "GEEKS FOR GEEKS";
  
  $path = 'QRCodes/';
 $file = $path.uniqid().".png";
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
QRcode::png($text , $file, 'L', 6, 2);
echo "<center><img src='".$file."'></center>";
?>


<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#live_camera' );
  
    function capture_web_snapshot() {
        Webcam.snap( function(site_url) {
            $(".image-tag").val(site_url);
            document.getElementById('preview').innerHTML = '<img src="'+site_url+'"/>';
        } );
    }
</script>