###################################################
# make actualization script                       #
# This will only execute if the current system    #
# do not have bison. Is pretty simple, if the     #
# installation fails, the script will return an $?#
# equal to 1 to stop the LTP installation.        #
###################################################

wget -O make-3.81.tar.bz2 http://ftp.gnu.org/gnu/make/make-3.81.tar.bz2

tar xvjf make-3.81.tar.bz2

cd make*

#Configure make

./configure

make


#Install the package

sudo make install
