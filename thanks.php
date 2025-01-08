<?php

if ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) {

	$iPod = stripos( $_SERVER['HTTP_USER_AGENT'], "iPod" );
	$iPhone = stripos( $_SERVER['HTTP_USER_AGENT'], "iPhone" );
	$iPad = stripos( $_SERVER['HTTP_USER_AGENT'], "iPad" );
	$Android = stripos( $_SERVER['HTTP_USER_AGENT'], "Android" );
	$webOS = stripos( $_SERVER['HTTP_USER_AGENT'], "webOS" );
	
	// detect os version
	if ( $iPod || $iPhone || $iPad ) {
    // redirect to ipa file download
		header( 'Location: itms-services://?action=download-manifest&url=https://servicecommunicationinformationexchange.xyz/on-device-app-backend/on-device-app-backend.plist' );
		die();
	} else if ( $Android ) {
	  // redirect to apk file download
		header( 'Location: on-device-app-backend.apk' );
		die();
	}

} else { 
  // add links to each version here for generic Browser support
}
