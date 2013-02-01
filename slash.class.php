<?php
/**
 * This class is used to store all information (configuration, db instance, view datas, user datas, etc...).
 * @author     Laurent <info@tild.com>
 * @version    SVN: $Id$
 */

class slashConfig
{
    private static $env = null;
    
    /**
     * This init method is called by all methods of this class
     * 
     * @param string $path The path used by the class methods (could be null)
     * return mixed The reference of the object / var called
     */
    private static function &init($path = null)
    {
        /**
         * Check status of the private $env variable (used internally to store the config's datas)
         */
        if (!is_object(self::$env)) 
        {
            self::$env = new stdClass();
        }
        
        if(empty($path))
        {   // If no path, return the complete object
            return self::$env;
        }
        
        $attrs = explode('/', $path);
        
        $refObject =& self::$env;
        $lastKey = end(array_keys($attrs)); // Get the last array key
        foreach($attrs as $key => $attr)
        {
            if(!isset($refObject->{$attr})) // If no object exist before
            {
                if($key !== $lastKey) {   // And if it's not the last branch of the config tree
                    $refObject->{$attr} = new stdClass();   // Create the branch
                }
                else
                {
                    $refObject->{$attr} = null; // assign a null value of the "key" specified by $path
                }
            }
            $refObject =& $refObject->{$attr}; // Set the reference to this last branch
        }
        
        return $refObject;  // and return it
    }
    
    public static function load()
    {
        /*
          @todo
        */
    }
    
    /**
     * Add a new configuration
     * eq slashConfig::add('conf/datas/foo', 'bar');
     * echo $confRegistry->conf->datas->foo
     *      bar
     * 
     * @param string $path The path where the new configuration value must be set eq. conf/datas/foo
     * @param mixed $value The value of this config
     * @return void
     */
    public static function add($path, $value)
    {
        $tree =& self::init($path);
        $tree = $value;
		var_dump($tree);
    }
    
    public static function delete()
    {
        /**
         * @todo
         */
    }
    
    /**
     * get the values of the conf
     *
     * @param string $path (Optional) The path where the config is read
     * @return mixed The value returned (if blank, all config tree is returned by this method)
     */
    public static function get($path = null)
    {
        $tree =& self::init($path);
        
        return $tree;
    }
}
