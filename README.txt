CONTENTS OF THIS FILE
---------------------

* Introduction
* Installation


INTRODUCTION
------------

Provides a way to connect to the Expedia Affiliate Network.

I wanted a way to display hotels on my pages and there wasn't any module for 
that, so I wrote the EAN module. It is loosely based on the Amazon module, and
as such it provides similar functionality.

* It has the main API which contains configuration settings to interact with 
  the EAN API.
* It has a search box, in which you can type cities for example and the module
  will display hotels in that city.
* It has a EAN hotel module in which you give it a hotel id and the module will
  display information about that hotel.

EAN module:
The EAN module provides the interface to the EAN API. So you may enter a 
hotelid and it returns an associative array containing the info about that 
hotel. You may also give it a string like 'New york', or 'Groningen', or any 
other city and it returns a list of all hotels found in that city.

EAN search:
Provides a hook into the Drupal search system. It lets you enter any city and
the result will be a list of hotels found in that city.

EAN hotel:
This module provides a customm field in which you may enter an EAN hotelid. 
And it will format the hotel with that id nicely. It also has it's own template
in case you don't like the default one. 


INSTALLATION
------------

The EAN suite of modules are like any other Drupal module. Just download them
place them in you sites/all/modules/ directory and enable them.

After you have done this head to admin/config/services/ean and give the CID and
key given to you when you registered on http://developer.ean.com/


