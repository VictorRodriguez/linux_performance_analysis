###################################################
# byacc installation script                       #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O byacc.tar.gz ftp://invisible-island.net/byacc/byacc.tar.gz

tar xvfz byacc.tar.gz

cd byacc*

#Configure byacc

./configure

make


#Install the package

sudo make  install
