<?php

/*
 * @return \Xvideos\Entities\User
 */
function currentUser()
{
    return auth()->user();
}