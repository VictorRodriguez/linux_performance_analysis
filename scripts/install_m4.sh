###################################################
# m4 installation script                          #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O m4-1.4.7.tar.bz2 http://ftp.gnu.org/gnu/m4/m4-1.4.7.tar.bz2

tar xvjf m4-1.4.7.tar.bz2

cd m4*

#Configure m4

./configure

make


#Install the package

sudo make install
