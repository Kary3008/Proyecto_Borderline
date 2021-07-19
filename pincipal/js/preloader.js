var loader;
function loadNow(opacity) {
  if (opacity <=0) {
    dysplayContent();
  }
  else{
    loader.style.opacity= opacity;
    window.setTimeout(function(){
      loadNow(opacity -0.05)
    },100);
  }
}
function dysplayContent(){
  loader.style.dysplay ='none';
  document.getElementById('contenido').style.dysplay='block';
}
document.addEventListener("DOMContentLoaded",function(){
  loader = document.getElementById('loader');
  loadNow(2);
});
