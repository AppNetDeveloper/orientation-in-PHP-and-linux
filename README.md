Determine orientation in PHP and linux</br>
Easy to use and can be adapted for all projects.</br>
</br>
It is necessary to have installed on your linux server: PDFINFO</br>
</br>
 Debian</br>
apt-get install poppler-utils</br>
 Ubuntu</br>
apt-get install poppler-utils</br>
 Alpine</br>
apk add poppler</br>
 Arch Linux</br>
pacman -S poppler</br>
 Kali Linux</br>
apt-get install poppler-utils</br>
 CentOS</br>
yum install poppler-utils</br>
 Fedora</br>
dnf install poppler-utils</br>
 OS X</br>
brew install poppler</br>
 Raspbian</br>
apt-get install poppler-utils</br>
 Docker</br>
docker run cmd.cat/pdfinfo pdfinfov</br></br></br>
It is from which page you want me to start looking for the orientation</br>
</br>
<b>-f 1</b>  to start on page 1 of the pdf</br>
<b>-f 2</b>  to start on page 2 of the pdf</br>
<b>-f 3</b>  to start on page 3 of the pdf</br>
</br>
<b>-l 1</b>  to stop on page 1 of the pdf</br>
<b>-l 2</b>  to stop on page 2 of the pdf</br>
<b>-l 3</b>  to stop on page 3 of the pdf</br>

