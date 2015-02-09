How to apply a patch 
====================

1. Download the kernel source from Kernel.org. A stable release is probably the best choice. Extract to a convenient place (for instance ~).

2. Once inside the source directory, copy the current kernel's configuration, with:
    ``` cat /proc/config.gz > .config```

3. Apply the patch, with:
    ```patch -p1 < foo.patch``` (if it gets rejected you should try -p0).

4. Compile the kernel with:
    ```make silentoldconfig && make```

5. Install the modules with:
    ```sudo make modules_install```

6. Install the kernel image .../linux/arch/i386/boot/bzImage to whatever location your bootloader looks in.