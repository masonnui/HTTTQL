let idkhoa;
function xembh(idkhoa) {
    window.location.href="index.php?page_layout=Xembaihoc&id_kh="+idkhoa;
}
function xembt(idkhoa) {
    window.location.href="index.php?page_layout=Xembaitap&id_kh="+idkhoa;
}
function xemvideo(id) {
    let i=0;
    while(i<id){
        document.getElementsByTagName('iframe')[i].style="display: none;";
        i=i+1;
    }
    document.getElementsByTagName('iframe')[id].style="display: block;";
}