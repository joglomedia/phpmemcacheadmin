**- Configuration file doesn't seem to work**
> Your php include\_path must have the .(dot) in it and the file must be in read and write mod for Apache

**- Configuration file is broken**
> Copy the memcache.example.ini to memcache.ini to have a fresh and clean configuration file

**- Some commands rates in live stats show 1.0 sometimes**
> It's an issue that is fixed in version 1.1.2

**- I don't get all values for server stats with PECL Memcached**
> getStats() from PECL Memcached doesn't return delete, increment, decrement and cas statistics, so avoid using it, use Server instead

**- PECL Memcached only return SUCCESS when getting key**
> You're reading a PECL Memcache stored key with PECl Memcached, you must use in admin what your scripts are using

**- Live stats doesn't refresh or doesn't work**
> Check if Apache have the right to read and write in the temp folder (default : Temp/)

**- Cache Size is displaying erroneous statistics**

![http://blog.elijaa.org/public/phpMemcachedAdmin_bug.png](http://blog.elijaa.org/public/phpMemcachedAdmin_bug.png)

This is a bug in Memcached 1.4.5 stats slabs return command : http://code.google.com/p/memcached/issues/detail?id=163