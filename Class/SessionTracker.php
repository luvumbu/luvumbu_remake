<?php
class SessionTracker {
    public $ip;
    public $host;
    public $port;
    public $userAgent;
    public $browser;
    public $os;
    public $language;
    public $referer;
    public $method;
    public $serverIp;
    public $serverName;
    public $uri;
    public $protocol;
    public $https;
    public $visitDate;

    public function __construct() {
        $this->ip        = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'Inconnu';
        $this->host      = @gethostbyaddr($this->ip);
        $this->port      = isset($_SERVER['REMOTE_PORT']) ? $_SERVER['REMOTE_PORT'] : 'Inconnu';
        $this->userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Inconnu';
        $this->browser   = $this->detectBrowser($this->userAgent);
        $this->os        = $this->detectOS($this->userAgent);
        $this->language  = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'Inconnu';
        $this->referer   = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';
        $this->method    = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'Inconnu';
        $this->serverIp  = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'Inconnu';
        $this->serverName= isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'Inconnu';
        $this->uri       = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'Inconnu';
        $this->protocol  = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'Inconnu';
        $this->https     = isset($_SERVER['HTTPS']) ? 'Oui' : 'Non';
        $this->visitDate = date('Y-m-d H:i:s');
    }

    private function detectBrowser($ua) {
        if (stripos($ua, 'Chrome') !== false) return 'Chrome';
        if (stripos($ua, 'Firefox') !== false) return 'Firefox';
        if (stripos($ua, 'Safari') !== false) return 'Safari';
        if (stripos($ua, 'MSIE') !== false || stripos($ua, 'Trident') !== false) return 'Internet Explorer';
        if (stripos($ua, 'Edge') !== false) return 'Edge';
        if (stripos($ua, 'Opera') !== false || stripos($ua, 'OPR') !== false) return 'Opera';
        return 'Inconnu';
    }

    private function detectOS($ua) {
        if (stripos($ua, 'Windows') !== false) return 'Windows';
        if (stripos($ua, 'Mac') !== false) return 'Mac OS';
        if (stripos($ua, 'Linux') !== false) return 'Linux';
        if (stripos($ua, 'Android') !== false) return 'Android';
        if (stripos($ua, 'iPhone') !== false || stripos($ua, 'iPad') !== false) return 'iOS';
        return 'Inconnu';
    }

    public function getInfoArray() {
        return array(
            'ip'         => $this->ip,
            'host'       => $this->host,
            'port'       => $this->port,
            'userAgent'  => $this->userAgent,
            'browser'    => $this->browser,
            'os'         => $this->os,
            'language'   => $this->language,
            'referer'    => $this->referer,
            'method'     => $this->method,
            'serverIp'   => $this->serverIp,
            'serverName' => $this->serverName,
            'uri'        => $this->uri,
            'protocol'   => $this->protocol,
            'https'      => $this->https,
            'visitDate'  => $this->visitDate
        );
    }
}

// Exemple d'utilisation
$tracker = new SessionTracker();
$info = $tracker->getInfoArray();

foreach ($info as $k => $v) {
    $GLOBALS[$k] = $v;
}


/*
// Affichage
echo "IP : $ip <br>";
echo "Nom d'hôte : $host <br>";
echo "Port : $port <br>";
echo "Navigateur : $browser <br>";
echo "OS : $os <br>";
echo "User-Agent : $userAgent <br>";
echo "Langue : $language <br>";
echo "Referer : $referer <br>";
echo "Méthode : $method <br>";
echo "Serveur IP : $serverIp <br>";
echo "Nom serveur : $serverName <br>";
echo "Page demandée : $uri <br>";
echo "Protocole : $protocol <br>";
echo "HTTPS : $https <br>";
echo "Date de visite : $visitDate <br>";


*/
?>
