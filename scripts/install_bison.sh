###################################################
# bison installation script                       #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O bison-2.4.1.tar.gz http://ftp.gnu.org/gnu/bison/bison-2.4.1.tar.gz

tar xvfz bison-2.4.1.tar.gz

cd bison*

#Configure Bison

./configure

make


#Install the package

sudo make  install
