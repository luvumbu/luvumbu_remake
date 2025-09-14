<?php
 

/*
    'ip',
    'host',
    'port',
    'userAgent',
    'browser',
    'os',
    'language',
    'referer',
    'method',
    'serverIp',
    'serverName',
    'uri',
    'protocol',
    'https',
    'visitDate'

*/


?>

<?php
 
 

 
 
class SessionTracker {
    // Propriétés
    private $ip;
    private $host;
    private $port;
    private $userAgent;
    private $browser;
    private $os;
    private $language;
    private $referer;
    private $previousPage;
    private $method;
    private $serverIp;
    private $serverName;
    private $uri;
    private $protocol;
    private $https;
    private $visitDate;

    // Constructeur
    public function __construct() {
        $this->ip           = $this->getRealIp();
        $this->host         = @gethostbyaddr($this->ip);
        $this->port         = isset($_SERVER['REMOTE_PORT']) ? $_SERVER['REMOTE_PORT'] : 'Inconnu';
        $this->userAgent    = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Inconnu';
        $this->browser      = $this->detectBrowser($this->userAgent);
        $this->os           = $this->detectOS($this->userAgent);
        $this->language     = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'Inconnu';
        $this->referer      = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';
        $this->previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Aucune';
        $this->method       = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'Inconnu';
        $this->serverIp     = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'Inconnu';
        $this->serverName   = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'Inconnu';
        $this->uri          = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'Inconnu';
        $this->protocol     = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'Inconnu';
        $this->https        = isset($_SERVER['HTTPS']) ? 'Oui' : 'Non';
        date_default_timezone_set('Europe/Paris');
        $this->visitDate    = date('Y-m-d H:i:s');
    }

    // Récupère l'IP réelle même derrière un proxy
    private function getRealIp() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $parts = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($parts[0]);
        } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        }
        return 'Inconnu';
    }

    // Détecte le navigateur
    private function detectBrowser($ua) {
        if (stripos($ua, 'Chrome') !== false) return 'Chrome';
        if (stripos($ua, 'Firefox') !== false) return 'Firefox';
        if (stripos($ua, 'Safari') !== false) return 'Safari';
        if (stripos($ua, 'MSIE') !== false || stripos($ua, 'Trident') !== false) return 'Internet Explorer';
        if (stripos($ua, 'Edge') !== false) return 'Edge';
        if (stripos($ua, 'Opera') !== false || stripos($ua, 'OPR') !== false) return 'Opera';
        return 'Inconnu';
    }

    // Détecte le système d'exploitation
    private function detectOS($ua) {
        if (stripos($ua, 'Windows') !== false) return 'Windows';
        if (stripos($ua, 'Mac') !== false) return 'Mac OS';
        if (stripos($ua, 'Linux') !== false) return 'Linux';
        if (stripos($ua, 'Android') !== false) return 'Android';
        if (stripos($ua, 'iPhone') !== false || stripos($ua, 'iPad') !== false) return 'iOS';
        return 'Inconnu';
    }

    // -----------------------
    // Getters individuels
    public function getIp() { return $this->ip; }
    public function getHost() { return $this->host; }
    public function getPort() { return $this->port; }
    public function getUserAgent() { return $this->userAgent; }
    public function getBrowser() { return $this->browser; }
    public function getOs() { return $this->os; }
    public function getLanguage() { return $this->language; }
    public function getReferer() { return $this->referer; }
    public function getPreviousPage() { return $this->previousPage; }
    public function getMethod() { return $this->method; }
    public function getServerIp() { return $this->serverIp; }
    public function getServerName() { return $this->serverName; }
    public function getUri() { return $this->uri; }
    public function getProtocol() { return $this->protocol; }
    public function getHttps() { return $this->https; }
    public function getVisitDate() { return $this->visitDate; }

    // Retourne tout sous forme de tableau
    public function getInfoArray() {
        return array(
            'ip' => $this->ip,
            'host' => $this->host,
            'port' => $this->port,
            'userAgent' => $this->userAgent,
            'browser' => $this->browser,
            'os' => $this->os,
            'language' => $this->language,
            'referer' => $this->referer,
            'previousPage' => $this->previousPage,
            'method' => $this->method,
            'serverIp' => $this->serverIp,
            'serverName' => $this->serverName,
            'uri' => $this->uri,
            'protocol' => $this->protocol,
            'https' => $this->https,
            'visitDate' => $this->visitDate
        );
    }
}
/*
// -----------------------
// Exemple d’utilisation

$tracker = new SessionTracker();

// Affichage global sur une seule ligne
echo implode(", ", $tracker->getInfoArray());
echo "<br><br>";

// Affichage individuel
echo "IP : " . $tracker->getIp() . "<br>";
echo "Host : " . $tracker->getHost() . "<br>";
echo "Port : " . $tracker->getPort() . "<br>";
echo "User Agent : " . $tracker->getUserAgent() . "<br>";
echo "Browser : " . $tracker->getBrowser() . "<br>";
echo "OS : " . $tracker->getOs() . "<br>";
echo "Language : " . $tracker->getLanguage() . "<br>";
echo "Referer : " . $tracker->getReferer() . "<br>";
echo "Previous Page : " . $tracker->getPreviousPage() . "<br>";
echo "Method : " . $tracker->getMethod() . "<br>";
echo "Server IP : " . $tracker->getServerIp() . "<br>";
echo "Server Name : " . $tracker->getServerName() . "<br>";
echo "URI : " . $tracker->getUri() . "<br>";
echo "Protocol : " . $tracker->getProtocol() . "<br>";
echo "HTTPS : " . $tracker->getHttps() . "<br>";
echo "Visit Date : " . $tracker->getVisitDate() . "<br>";
 
*/