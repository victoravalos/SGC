<?php
                    define("AJXP_EXEC", true);
                    require_once("/home/utsmaedu/public_html/sgc/core/classes/class.AJXP_Utils.php");
                    $hash = AJXP_Utils::securePath(AJXP_Utils::sanitize($_GET["hash"], AJXP_SANITIZE_ALPHANUM));
                    if(file_exists($hash.".php")){
                        require_once($hash.".php");
                    }else{
                        require_once("/home/utsmaedu/public_html/sgc/publicLet.inc.php");
                        ShareCenter::loadShareByHash($hash);
                    }
                