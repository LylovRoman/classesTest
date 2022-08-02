<?php
namespace Classes;

class CookieShell
{
    public function set($name, $value, $time)
    {
        setcookie($name, $value, time() + $time);
        $_COOKIE[$name] = $value;
        return $this;
    }
    public function get($name)
    {
        return $_COOKIE[$name];
    }
    public function del($name)
    {
        setcookie($name, null, time());
        $_COOKIE[$name] = null;
        return $this;
    }
    public function exists($name)
    {
        return isset($_COOKIE[$name]);
    }
}
?>