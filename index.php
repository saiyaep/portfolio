<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Cache-control" content="private">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <title>Sai Yaep Portfolio</title>
    	<?php include "meta.php" ?>
        <link rel="stylesheet" media="(max-width:480px)" type="text/css" href="css/splash.less.than.480.css">
        <link rel="stylesheet" media="(min-width:480px) and (max-width:879px)" type="text/css" href="css/splash.more.than.480.css">
        <link rel="stylesheet" media="(min-width:880px)" type="text/css" href="css/splash.more.than.880.css">
    </head>
    <body id="scene" 
    	data-friction-x="0.1"
        data-friction-y="0.1"
        data-scalar-x="5"
        data-scalar-y="5">
    	
        <div id="splashBackground" class="layer" data-depth="0.35">
            
            <div id="cloudWrapper">
            	<div class="clouds">
                	<div class="cloud1 layer" data-depth="0.10"></div>
                    <div class="cloud2 layer" data-depth="0.20"></div>
                    <div class="cloud3 layer" data-depth="0.70"></div>
                    <div class="cloud4 layer" data-depth="0.25"></div>
                    <div class="cloud5 layer" data-depth="0.90"></div>
                    <div class="cloud6 layer" data-depth="0.80"></div>
                </div>
            </div>
            
            <div id="contentWrapper" class="layer" data-depth="0.45">
            	<div class="contentHeader"></div>
                <div class="contentBody">
                	
                	<div class="objectHeader">
                    	<a href="http://www.arborcpa.com/" target="_blank">ArborCPA - Responsive Design on Corporate Website</a>
                    </div>
                    <div class="objectImg">
                    	<a href="http://www.arborcpa.com/" target="_blank"><img src="img/arborcpa.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: HTML5, PHP, Javascript, CSS, Responsive Design, JQuery, JSSOR Image Slider, SliderBars, Google reCaptcha API, LightBox
                    </div>
                    
                    
                    
                    <div class="objectHeader">
                    	<a href="https://www.turniphill.com/" target="_blank">Turnip Hill - Another Responsive Website, Work in Progress</a>
                    </div>
                    <div class="objectImg">
                    	<a href="https://www.turniphill.com/" target="_blank"><img src="img/turniphill.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: HTML5, PHP, Javascript, CSS, Responsive Design, JQuery, JQuery.parallax.js, Google reCaptcha API, Work in Progress ( more will be used )
                    </div>
                     
                    
                    
                    <div class="objectHeader">
                    	<a href="http://www.saiyaepphotography.com/" target="_blank">Sai Yaep Photography - Personal Photography Work</a>
                    </div>
                    <div class="objectImg">
                    	<a href="http://www.saiyaepphotography.com/" target="_blank"><img src="img/syp.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: Photography, Wordpress, Design
                    </div>
                    
                    
                    
                    <div class="objectHeader">
                    	<a href="http://www.saiyaep.com/villagepersist" target="_blank">Writing Recorder - Wasnt meant to be pretty. This was mainly used to record writing coordinates and accelerometer data for analysis.</a>
                    </div>
                    <div class="objectImg">
                    	<a href="http://www.saiyaep.com/villagepersist" target="_blank"><img src="img/village.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: HTML, Javascript, CSS, JSON
                    </div>
                    
                     
                    
                    
                    <div class="objectHeader">
                    	Sample Javascript Coding - Demonstrating my use of classes, closures, callbacks, inheritance and all that other OOP stuff.</a>
                    </div>
                    <div class="objectImg">
                    	<pre>
        
        //****************************************************************************
        //Copyright (C) 2015 Sai Yaep
        //****************************************************************************
        /**
        *  LocalStorage.js
        *
        *  Author: Sai Yaep
        *  Date created: 05/4/15
        *  Description: AbstractStorage & LocalStorage data storage implementation
        *  				This is a piece of a larger set of code that expanded the 5MB peristant data storage limit on browsers.
        *				IndexedDB, WebSQL, VFS, and my own PersistN are some of the missing classes I did not show
        */
        
        var saidata = saidata || {};
        
        function AbstractStorage(){
            'use strict';
            
            var AbstractStorage = function(){};
            
            // public functions
            AbstractStorage.prototype.hasSupport = function(){
                throw new Error('Cannot call abstract method');
            };
            AbstractStorage.prototype.store = function(){
                throw new Error('Cannot call abstract method');
            };
            AbstractStorage.prototype.retrieve = function(){
                throw new Error('Cannot call abstract method');
            };
            AbstractStorage.prototype.remove = function(){
                throw new Error('Cannot call abstract method');
            };
            AbstractStorage.prototype.used = function(){
                throw new Error('Cannot call abstract method');
            };
            
            // Singleton
            AbstractStorage.getInstance = function(){
                if( !saidata.AbstractStorage )
                {
                    saidata.AbstractStorage = new AbstractStorage();
                }else{
                    console.log("AbstractStorage already initialized!");
                }
                return saidata.AbstractStorage;
            };
            
            return AbstractStorage.getInstance();
        }
        
        function LocalStorage(){
            'use strict';
            var _parent = AbstractStorage.call(this);
            // Private Methods
            
            // Checks if localStorage is supported on current browser
            // Parameter: 
            // Returns: 
            //			Success: Boolean
            function hasLocalStorage(){
                var mod = 'test';
                try {
                    localStorage.setItem(mod, mod);
                    localStorage.removeItem(mod);
                    return true;
                } catch(e) {
                    return false;
                }
            }
            
            // Writes to localStorage under index key the value
            // Parameter: 
            // 			key: Key used as index of localStorage
            // 			value: The value to be stored
            // 			callback: Callback function
            // Returns: 
            // 			success: boolean if success or not 
            function setLocalStorage(key, value, callback){
                
                try {
                    localStorage.setItem(key, value);
                    if ( !callback )
                        return true;
                    else
                        callback(true);
                }catch(e){
                    if ( !callback )
                        return false;
                    else
                        callback(false);
                }
            }
            
            // Retrieve localStorage data under key index
            // Parameter: 
            // 			key: Key used as index of localStorage
            //			callback: Callback Function
            // Returns: 
            // 			value: value of retrieved data 
            function getLocalStorage(key, callback){
                if ( !callback )
                    return localStorage.getItem(key);
                else
                    callback(localStorage.getItem(key));
            }
            
            // Retrieve All localStorage data 
            // Parameter: 
            //			callback: Callback Function
            // Returns: 
            // 			value: object of retrieved data 
            function getAllLocalStorage(callback){
                var tempLSObject = {};
                
                for ( var attr in localStorage ){
                    tempLSObject[attr] = localStorage[attr];
                }
                
                if ( !callback )
                    return tempLSObject;
                else
                    callback(tempLSObject);
            }
            
            // Revoves element from localStorage under index key
            // Parameter: 
            // 			key: Key used as index of localStorage
            // 			callback: Callback function
            // Returns: 
            // 			success: boolean if success or not 
            function removeLocalStorageItem(key, callback){
                try{
                    localStorage.removeItem(key);
                    if ( !callback )
                        return true;
                    else
                        callback(true);
                }catch(e){
                    if ( !callback )
                        return false;
                    else
                        callback(false);
                }
            }
            
            // Revoves all elements from localStorage 
            // Parameter: 
            // 			callback: Callback function
            // Returns: 
            // 			success: boolean if success or not 
            function removeAllLocalStorageItem(callback){
                try{
                    localStorage.clear();
                    if ( !callback )
                        return true;
                    else
                        callback(true);
                }catch(e){
                    if ( !callback )
                        return false;
                    else
                        callback(false);
                }
            }
            
            // Calulate  used space of localStorage 
            // Parameter: 
            //			obj: object to get size of
            // 			callback: Callback function
            // Returns: 
            // 			value: Value of localStorage used in KBs
            function getSizeOf(theObj, callback){
                var bytes = 0;
        
                function sizeOf(obj) {
                        
                    if(obj !== null && obj !== undefined) {
                        switch(typeof obj) {
                        case 'number':
                            bytes += 8;
                            break;
                        case 'string':
                            // 16 bits = 2 bytes
                            bytes += obj.length * 2;
                            break;
                        case 'boolean':
                            bytes += 4;
                            break;
                        case 'object':
                            var objClass = Object.prototype.toString.call(obj).slice(8, -1);
                
                            if(objClass === 'Object' || objClass === 'Array' || objClass === 'Storage') {
                                for(var key in obj) {
                                    if(!obj.hasOwnProperty(key)) continue;
                                    sizeOf(obj[key]);
                                }
                            } else bytes += obj.toString().length * 2;
                            break;
                        }
                    }
                    
                    return bytes;
                };
            
            
                if ( !callback )
                    return sizeOf(theObj);
                else
                    callback(sizeOf(theObj));
            }
            
            var LocalStorage = function(){};
            
            // public methods
            LocalStorage.prototype = Object.create(_parent.constructor.prototype);
            LocalStorage.prototype.constructor = LocalStorage;
            LocalStorage.prototype.hasSupport = function(){
                return hasLocalStorage();
            }
            LocalStorage.prototype.store = function(key, value, callback){
                return setLocalStorage(key, value, callback);
            }
            LocalStorage.prototype.retrieve = function(key, callback){
                return getLocalStorage(key, callback);
            }
            LocalStorage.prototype.retrieveAll = function(callback){
                return getAllLocalStorage(callback);
            }
            LocalStorage.prototype.remove = function(key, callback){
                return removeLocalStorageItem(key, callback);
            }
            LocalStorage.prototype.removeAll = function(callback){
                return removeAllLocalStorageItem(callback);
            }
            LocalStorage.prototype.used = function(callback){
                return getSizeOf(localStorage, callback);
            }
            LocalStorage.prototype.getSizeOf = function(obj, callback){
                return getSizeOf(obj, callback);
            }
            LocalStorage.prototype.getLengthOfObject = function(obj){
                var count = 0;
                for (var attr in obj) {
                    if (obj.hasOwnProperty(attr)) {
                        count++;
                    }
                }
                return count;
            }
            
            // Singleton
            LocalStorage.getInstance = function(){
                if( !saidata.LocalStorage )
                {
                    saidata.LocalStorage = new LocalStorage();
                }else{
                    console.log("LocalStorage already initialized!");
                }
                return saidata.LocalStorage;
            }
            
            return LocalStorage.getInstance();
        }
                                
                    	</pre>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: Javascript
                    </div>
                    
                    
                    
                    
                    <div class="objectHeader">
                    	<a href="http://www.saiyaep.com/DroidFlight" target="_blank">Droid Flight - An internal website to dynamically list android app files and letting the user conveniently install.</a>
                    </div>
                    <div class="objectImg">
                    	<a href="http://www.saiyaep.com/DroidFlight" target="_blank"><img src="img/droidflight.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Partial PHP Code Used:
                    </div>
                    <div class="objectImg">
                    	<pre>
	class GetContent
    {
        // Constructor
        public function __construct() {
            $this->name = "GetContent";
            
            require_once("JSON.php");
            $json = new Services_JSON();
            $this->json = $json;
        }
            
        // Checks 
        public function getDirectoryList( $relativeDirectoryPath )
        {			
            $thisID = array();
            foreach(glob(urldecode($relativeDirectoryPath).'/*',GLOB_ONLYDIR) as $file) {
                $tempObj['url'] = $file;
                $tempObj['type'] = "dir";
                $thisID[] = $tempObj;
            }
            
            if ( count($thisID) < 1 )
            {
                $thisID[0]['status'] = "invalid";
            }
            
            $encodedJSON = $this->json->encode($thisID);
            return $encodedJSON;
        }
        
        public function getFileList( $relativeDirectoryPath )
        {
            $thisID = array();
            $globArray = glob(urldecode($relativeDirectoryPath).'/*.apk');
            usort($globArray, create_function('$b,$a', 'return filemtime($a) - filemtime($b);'));
            foreach( $globArray as $file) {
                $tempObj['url'] = $file;
                $tempObj['type'] = "apk";
                $tempObj['date'] = date("F d, Y - h:i:s a",filemtime($file));
                $thisID[] = $tempObj;
            }
            
            if ( count($thisID) < 1 )
            {
                $thisID[0]['status'] = "invalid";
            }
            
            
            $encodedJSON = $this->json->encode($thisID);
            return $encodedJSON;
        }
    
        // Destructor	
        public function __destruct(){
            // Do Nothing
        }
    }
                        </pre>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: HTML, Javascript, CSS, PHP
                    </div>
                    
                    
                    
                    <div class="objectHeader">
                    	<a href="http://www.saiyaep.com/datasummit" target="_blank">Verizon Wireless Data Summit - Online Registration Website for Data Summit <br/>Flash website - Wont work on mobile</a>
                    </div>
                    <div class="objectImg">
                    	<a href="http://www.saiyaep.com/datasummit" target="_blank"><img src="img/7.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: Project Design, Development, Flash AS3, JSON, PHP, MYSQL, HTML, Javascript
                    </div>
                    
                    
                    
                    <div class="objectHeader">
                    	<a href="http://www.saiyaep.com/dataMania" target="_blank">Verizon Wireless Data Mania Contest - Internal Online Company Contest Website<br/>Flash website - Wont work on mobile</a>
                    </div>
                    <div class="objectImg">
                    	<a href="http://www.saiyaep.com/dataMania" target="_blank"><img src="img/10.jpg" width="100%"/></a>
                    </div>
                    <div class="objectRole">
                    	Technology/Skills Used: Project Design, Development, Flash AS3, JSON, PHP, MYSQL, HTML, Javascript
                    </div>
                    
                    
                    
                </div>
                <div class="contentFooter"></div>
            </div>
            
            
            <div class="clear"></div>
        </div>
       
		<?php include "splash.script.php" ?>
	</body>
</html>

