var filePath = 'frm_captura_cat.php?'+ecommerce_params;
// Setup the iframe target
var iframe='<iframe id="frame" name="widget" src ="#" width="100%" height="1" marginheight="0" marginwidth="0" frameborder="no" scrolling="no"></iframe>';
// Write the iframe to the page
document.write(iframe);
console.log(ecommerce_params);
 
var myIframe = parent.document.getElementById("frame");
// Setup the width and height
myIframe.height = 100;
myIframe.width = 600;
 
myIframe.src = filePath;
// set the style of the iframe
myIframe.style.border = "0px";
myIframe.style.padding = "4px";

