<?php
namespace Think;

interface IUserProxy
{
    function getUserName($id);
    function setUserName($id, $name);
}
