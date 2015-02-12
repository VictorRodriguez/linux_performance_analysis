###################################################
# autoconf installation script                    #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O autoconf-2.61.tar.bz2 ftp://ftp.gnu.org/gnu/autoconf/autoconf-2.61.tar.bz2

tar xvjf autoconf-2.61.tar.bz2

cd autoconf*

#Configure autoconf

./configure

make

#Install the package

sudo make install
