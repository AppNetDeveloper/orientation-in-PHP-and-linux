$test = shell_exec(' pdfinfo \
    -f 1 \
    -l 1 \
     sample.pdf \
| grep "Page.* size:" \
| \
 while read Page _pageno size _width x _height rest; do 
  [ "$(echo "${_width} / 1"|bc)" -gt "$(echo "${_height} / 1"|bc)" ] \
     && echo "landscape" \
    || echo "portrait"  ; \
 done');

if(trim($test)=="portrait"){
    echo "run script from portrait";
}else{
    echo"run script from landscape";
}
