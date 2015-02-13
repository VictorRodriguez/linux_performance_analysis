###################################################
# flex installation script                        #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O flex-2.5.39.tar.bz2 http://sourceforge.net/projects/flex/files/flex-2.5.39.tar.bz2

tar xvjf flex-2.5.39.tar.bz2

cd flex*

#Configure flex

./configure

make

#Install the package

sudo make  install
