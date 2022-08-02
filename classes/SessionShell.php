<?php
namespace Classes;

class SessionShell
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
        return $this;
    }
    public function get($name)
    {
        return $_SESSION[$name];
    }
    public function del($name)
    {
        unset($_SESSION[$name]);
        return $this;
    }
    public function exists($name)
    {
        // проверяет переменную сессии
        return isset($_SESSION[$name]);
    }
    public function destroy()
    {
        session_destroy();
    }
}
?>