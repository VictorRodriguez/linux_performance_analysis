###################################################
# automake installation script                    #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O automake-1.10.2.tar.bz2 ftp://ftp.gnu.org/gnu/automake/automake-1.10.2.tar.bz2

tar xvjf automake-1.10.2.tar.bz2

cd automake*

#Configure automake

./configure

make


#Install the package

sudo make  install
