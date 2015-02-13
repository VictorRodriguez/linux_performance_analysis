#!/bin/bash


#Checking de minimum dependencies to install LTP


packageInstalling () {

    if [ ! hash $1 2>/dev/null ] ; then

	

    
	# This if will check if the corresponding package were correctly installed
    
	if [ ! sudo ./install_$1.sh ]; then

	    echo *****Installation of $1 failed. Quitting...
	    exit 1

	fi

    fi

}


echo "*****************************************"
echo "** Welcome to the installation of LTP  **"
echo "*****************************************"




# Packages Installing
packageInstalling make

packageInstalling bison

packageInstalling byacc

packageInstalling flex

packageInstalling automake

packageInstalling autoconf

packageInstalling m4


#Will download the LTP source on the current directory
wget wget -O ltp-full-20150119.tar.bz2 http://sourceforge.net/projects/ltp/files/latest/download?source=typ_redirect


#Decompress the archive

tar xvjf ltp-full-20150119.tar.bz2

cd ltp*

#Configure the source code using autotools
make autotools
./configure

if [ ! $? ] ; then

    exit 1

fi

#Installing LTP
make all
sudo make SKIP_IDCHECK=1 install

echo "The installation has been succesfull, try \"runalltest\" script which is located in /opt/ltp directory. Have fun!!!"
