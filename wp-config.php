/** # BLOQUEAR ATAQUE DE HttpOnly # */
/ ** # BLOCK HttpOnly ATTACK # * /

header('X-Frame-Options: SAMEORIGIN');

@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
