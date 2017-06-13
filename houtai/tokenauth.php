<?php
//Copyright (c) 2016 iFeiwu.com
 class TokenAuth implements iAuthenticate { function __isAuthenticated() { $token = $_GET["\x74\157\x6b\x65\x6e"]; return $token && $token == TokenAuth::key() ? TRUE : FALSE; } function key() { return require "\x74\157\153\145\156\x2e\160\150\160"; } }
