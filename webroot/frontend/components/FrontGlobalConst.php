<?php
namespace frontend\components;

use common\consts\GlobalConst;

interface FrontGlobalConst extends GlobalConst{
	const FRONTEND_HDPCACHE_TIME = 86400,
          FRONTEND_CATEGORYCACHE_TIME = 604800,
          FRONTEND_DOCUMENTCACHE_TIME = 3600;

    const
    	FRONTEND_COOKIE_LOGIN = 'daimagong_unique';
}
