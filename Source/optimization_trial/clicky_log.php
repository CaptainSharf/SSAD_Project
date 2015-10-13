<?php
/*
This function allows you to log visitor actions to Clicky from an internal script. 
For example, some sites use internal redirect scripts for external links; 
Clicky would not normally be able to track these, but with this script it is possible.

This function also allows you to update sessions well after they are expired. 
You can declare goals, goal revenue, and add custom data with this option. 
Even if a goal has already been completed, you can add revenue to it later.

This is written in PHP. If you do not use PHP, it should be fairly simple to port to your language of choice. 
This code relies on PHP's file() function to make a remote call to our tracking servers. 
Most PHP setups allow file() to talk over the internet to a remote server by default, but yours may not. 
Please check with your web host or server administrator to find out if this option is enabled. 
The following page has more information: http://php.net/file

You need to edit the first few lines of the function to input the correct site ID and admin sitekey. 
Then to call it, you just need to pass in a few additional parameters, as demonstrated below. 
Most parameters are optional, and you'll only want to use some of them for certain types of requests. 
First is a list of all parameters, and after that is a list of which ones you'll want to use for each request type, 
  along with some examples.

Parameters are passed via a single array, $a, which allows you to declare only the ones you need, in any order you want. 
All parameters are automatically URL encoded so you shouldn't be doing that to any of your data outside of the function.

- type 
    Valid values are "pageview", "download", "outbound", "click", "goal", and "custom". 
    The first 4 values are used for logging actions. 
    "goal" is used for declaring a goal as completed, and "custom" is used for adding custom data to a session. 
    If left blank, or an invalid value is declared, it will default to "pageview".

- href
    Only used for logging actions. 
    Its value should be the path and/or full URL you want to log, such as /some/page or http://somesite.com. 
    Outbounds must start with http://, all others must start with either a slash / or a hash #
    /this/is/valid
    #thisIsValid
    this/is/NOT/valid

- title
    Only used for logging actions. 
    If you want to attach a title to this action, declare it here. 
    Note that any given URL for your site can only have ONE title ever attached to it. 
    So if this href has been logged before, and it already has a title, then the title you declare here will be ignored.

- ref
    The HTTP referrer for this action.
    Clicky only logs referrers if it's the very first action of a new session, and only if it's from an external domain.
    
- ua
    The user agent of this user, e.g. Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729)
    From this string, Clicky automatically extracts the browser and OS details.
    However, like the referrer, it is only logged on the first action of a new session.

- ip_address / session_id
    These parameters are related so they are documented together. 
    Clicky uses the IP address by default to automatically determine which session_id any incoming data 
      should be attached to, but this will only work if the session is still "active". 
    You can use either one for all types of requests, but unless you are logging live actions as they are happening 
      (e.g., through a redirect script), then we recommend always using the session_id to ensure that the data 
      gets attached to the place you are expecting it. 
    If both values are left blank, Clicky will use PHP's internal value for the visitor's IP - $_SERVER['REMOTE_ADDR']; 
    If both values are specified, session_id will take precedence. 
    session_id must of course be a session that actually belongs to your site. 
    Otherwise, the request will be ignored.
  
- goal
    If you are manually declaring goal completion and/or goal revenue, you need to include this variable.
    This should be an array with an "id" key (the goal's ID, available from your goal management page),
      and a "revenue" key if you need to declare that.
    For convenience, if you only need to declare the goal ID, you can pass "goal" is as just an integer.
    Examples: $a['goal'] => 1, or $a['goal'] = array( "id"=>1, "revenue"=>"49.99" );
    goal can be included in all requests with clicky_log, not just for type=goal
    
- custom
    To attach custom data to a session, send in an array of key/value pairs.
    e.g. $a['custom'] = array( "username" => "hot2trot", "email" => "hot@trot.com" );
    custom can be included in all requests with clicky_log, not just for type=custom




##### LOGGING AN ACTION

To log an action, the only required parameter is "href".
But you probably want to add "title" to make it more interesting, and you'll need to declare the type
  if you want it to be download, outbound, or click (otherwise, it defaults to pageview).

Examples: (note that parameters can be in any order)
- clicky_log( array( "title" => "Some page", "href" => "/some/path?some=query" ));
- clicky_log( array( "href" => "/some/download.zip", "type" => "download", "title" => "Some download" ));

- $a = array( "type" => "outbound", "href" => "http://somesite.com/some/path?some=query", "title" => "Some site" );
  clicky_log( $a );

- $a = array();
  $a['type'] = "outbound";
  $a['href'] = "http://somesite.com/";
  clicky_log( $a );


##### LOGGING CUSTOM DATA

Specify type=custom to add custom data to a session, without having to log an action in the process.
We recommend using session_id to ensure the data gets attached to the right session, even if it's expired.

Examples:
- clicky_log( array( "type" => "custom", "session_id" => "123", "custom" => array( "username" => "Someone", "email" => "some@one.com" )));

- $a = array();
  $a['type'] = "custom";
  $a['session_id'] = "123";
  $a['custom']['username'] = "Someone";
  $a['custom']['email'] = "some@one.com";
  clicky_log( $a );


##### LOGGING GOALS

Specify type=goal to declare a goal completion and/or revenue, without having to a log an action in the process.
The onclick goal function available in our tracking code uses the exact same parameters to log its data.
If the goal has already been flagged as completed for this visitor but you want to add revenue, that will work.
You still need to declare the goal ID, but the revenue will be added on.

Note: if there is already revenue attached to this visitor, and the revenue you're trying to add on is exactly
the same value, the new revenue will be ignored. This is because it is likely a user repeating a
behavior by mistake, such as clicking "back", or clicking an item that results in clicky.goal being
called from our tracking code more than once.

Examples:
- clicky_log( array( "type" => "goal", "session_id" => "123", "goal" => 5 ));
- clicky_log( array( "type" => "goal", "session_id" => "123", "goal" => array( "id" => 5 )));
- clicky_log( array( "type" => "goal", "session_id" => "123", "goal" => array( "id" => 5, "revenue" => "49.99" )));

- $a = array();
  $a['type'] = "goal";
  $a['session_id'] = "123";
  $a['goal']['id'] = 5;
  $a['goal']['revenue'] = "49.99";
  clicky_log( $a );
*/
include 'get_ip.inc.php';
  
function clicky_log( $a ) {
  
  # ATTENTION! you need to change the following 2 values for the site you are going to use this with!
  # these are all available on the main preferences page for any web site!
  $site_id = "100876280";
  $sitekey_admin = "20fec71b60fbdbf0";
  
  $type = $a['type'];
  if( !in_array( $type, array( "pageview", "download", "outbound", "click", "custom", "goal" ))) $type = "pageview";
  
  $file = "http://in.getclicky.com/in.php?site_id=".$site_id."&sitekey_admin=".$sitekey_admin."&type=".$type;
  
  # referrer and user agent - will only be logged if this is the very first action of this session
  if( $a['ref'] ) $file .= "&ref=".urlencode( $a['ref'] );
  if( $a['ua']  ) $file .= "&ua=". urlencode( $a['ua']  );
  
  # we need either a session_id or an ip_address...
  if( is_numeric( $a['session_id'] )) {
    $file .= "&session_id=".$a['session_id'];
  }
  else {

    if( !$a['ip_address'] ) $a['ip_address'] = get_ip(); # automatically grab IP that PHP gives us.
    if( !preg_match( "#^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$#", $a['ip_address'] )) return false;
    $file .= "&ip_address=".$a['ip_address'];
  }
  
  # goals can come in as integer or array, for convenience
  if( $a['goal'] ) {
    if( is_array( $a['goal'] )) {
      foreach( $a['goal'] as $key => $value ) $file .= "&goal[".urlencode( $key )."]=".urlencode( $value );
    }
    else {
      $file .= "&goal[id]=".$a['goal'];
    }
  }
  
  # custom data, must come in as array of key=>values
  foreach( $a['custom'] as $key => $value ) $file .= "&custom[".urlencode( $key )."]=".urlencode( $value );
  
  
  if( $type == "goal" || $type == "custom" ) {
    # dont do anything, data has already been cat'd
  }
  else {
    if( $type == "outbound" ) {
      if( !preg_match( "#^(https?|telnet|ftp)#", $a['href'] )) return false;
    }
    else {
      # all other action types must start with either a / or a #
      if( !preg_match( "#^(/|\#)#", $a['href'] )) $a['href'] = "/" . $a['href'];
    }
    
    $file .= "&href=".urlencode( $a['href'] );
    if( $a['title'] ) $file .= "&title=".urlencode( $a['title'] );
  }
  
  return file( $file ) ? true:false;
}
?>