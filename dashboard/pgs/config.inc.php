<?php
/*
Possible values for IPModus

HideIP
ShowFullIP
ShowLast1ByteOfIP
ShowLast2ByteOfIP
ShowLast3ByteOfIP

*/

$Service     = array();
$CallingHome = array();
$PageOptions = array();
$VNStat      = array();

$PageOptions['ContactEmail']                         = 'your_email';	// Support E-Mail address

$PageOptions['DashboardVersion']                     = '2.4.2';		// Dashboard Version

$PageOptions['PageRefreshActive']                    = true;		// Activate automatic refresh
$PageOptions['PageRefreshDelay']                     = '1000';		// Page refresh time in miliseconds

$PageOptions['NumberOfModules']                      = 26;		// Number of Modules enabled on reflector

$PageOptions['RepeatersPage'] = array();
$PageOptions['RepeatersPage']['LimitTo']             = 99;		// Number of Repeaters to show
$PageOptions['RepeatersPage']['IPModus']             = 'ShowFullIP';	// See possible options above
$PageOptions['RepeatersPage']['MasqueradeCharacter'] = '*';		// Character used for  masquerade

$PageOptions['PeerPage'] = array();
$PageOptions['PeerPage']['LimitTo']                  = 99;		// Number of peers to show
$PageOptions['PeerPage']['IPModus']                  = 'ShowFullIP';	// See possible options above
$PageOptions['PeerPage']['MasqueradeCharacter']      = '*';		// Character used for  masquerade

$PageOptions['LastHeardPage']['LimitTo']             = 39;		// Number of stations to show

$PageOptions['ModuleNames'] = array();					// Module nomination
$PageOptions['ModuleNames']['A']                     = 'Int.';
$PageOptions['ModuleNames']['B']                     = 'Regional';
$PageOptions['ModuleNames']['C']                     = 'National';
$PageOptions['ModuleNames']['D']                     = '';
$PageOptions['ModuleNames']['E']                     = '';
$PageOptions['ModuleNames']['F']                     = '';
$PageOptions['ModuleNames']['G']                     = '';
$PageOptions['ModuleNames']['H']                     = '';
$PageOptions['ModuleNames']['I']                     = '';
$PageOptions['ModuleNames']['J']                     = '';
$PageOptions['ModuleNames']['K']                     = '';
$PageOptions['ModuleNames']['L']                     = '';
$PageOptions['ModuleNames']['M']                     = '';
$PageOptions['ModuleNames']['N']                     = '';
$PageOptions['ModuleNames']['O']                     = '';
$PageOptions['ModuleNames']['P']                     = '';
$PageOptions['ModuleNames']['Q']                     = '';
$PageOptions['ModuleNames']['R']                     = '';
$PageOptions['ModuleNames']['S']                     = '';
$PageOptions['ModuleNames']['T']                     = '';
$PageOptions['ModuleNames']['U']                     = '';
$PageOptions['ModuleNames']['V']                     = '';
$PageOptions['ModuleNames']['W']                     = '';
$PageOptions['ModuleNames']['X']                     = '';
$PageOptions['ModuleNames']['Y']                     = '';
$PageOptions['ModuleNames']['Z']                     = '';

$PageOptions['MetaDescription']                      = 'XLX is a D-Star Reflector System for Ham Radio Operators.';	// Meta Tag Values, usefull for Search Engine
$PageOptions['MetaKeywords']                         = 'Ham Radio, D-Star, XReflector, XLX, XRF, DCS, REF, ';		// Meta Tag Values, usefull forSearch Engine
$PageOptions['MetaAuthor']                           = 'LX1IQ';								// Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRevisit']                          = 'After 30 Days';							// Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRobots']                           = 'index,follow';							// Meta Tag Values, usefull for Search Engine

$PageOptions['UserPage']['ShowFilter']               = true;								// Show Filter on Users page
$PageOptions['Traffic']['Show']                      = true;								// Enable vnstat traffic statistics
$PageOptions['IRCDDB']['Show']                       = true;        // Show liveircddb, set it to false if you are running your db in https 

$PageOptions['CustomTXT']                            = '';					// custom text in your header   

$Service['PIDFile']                                  = '/var/log/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = false;					// xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://your_dashboard';			// dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';		// database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;					// push delay in seconds
$CallingHome['Country']                              = "your_country";				// Country
$CallingHome['Comment']                              = "your_comment";				// Comment. Max 100 character
$CallingHome['HashFile']                             = "/xlxd/callinghome.php";			// Make sure the apache user has read and write permissions in this folder.
$CallingHome['LastCallHomefile']                     = "/xlxd/lastcallhome.php";			// lastcallhome.php can remain in the tmp folder 
$CallingHome['OverrideIPAddress']                    = "";					// Insert your IP address here. Leave blank for autodetection. No need to enter a fake address.
$CallingHome['InterlinkFile']                        = "/xlxd/xlxd.interlink";			// Path to interlink file

#$VNStat['Interfaces']                                = array();
#$VNStat['Interfaces'][0]['Name']                     = 'eth0';
#$VNStat['Interfaces'][0]['Address']                  = 'enp0s3';
#$VNStat['Binary']                                    = '/usr/bin/vnstat';

/*   
include an extra config file for people who dont like to mess with shipped config.ing.php   
this makes updating dashboard from git a little bit easier   
*/   
 
if (file_exists("../config.inc.php")) {   
 include ("../config.inc.php");  
}   

?>
