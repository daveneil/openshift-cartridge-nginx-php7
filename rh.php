Name: nginx-php
Cartridge-Short-Name: PHP
Display-Name: Nginx and PHP
License: MIT
Version: '7'
Versions:
- 1.11.1
- 7.0.8
Website: https://github.com/daveneil/openshift-cartridge-nginx-php7
Cartridge-Version: 1.8.2
Cartridge-Vendor: budisteikul
Categories:
- service
- php
- nginx
- web_framework
Cart-Data:
- Key: OPENSHIFT_TMP_DIR
  Type: environment
  Description: Directory to store application temporary files.
- Key: OPENSHIFT_REPO_DIR
  Type: environment
  Description: Application root directory where application files reside. This directory
    is reset every time you do a git-push
- Key: OPENSHIFT_PHP_PORT
  Type: environment
  Description: Internal port to which the web-framework binds to.
- Key: OPENSHIFT_PHP_IP
  Type: environment
  Description: Internal IP to which the web-framework binds to.
- Key: OPENSHIFT_APP_DNS
  Type: environment
  Description: Fully qualified domain name for the application.
- Key: OPENSHIFT_APP_NAME
  Type: environment
  Description: Application name
- Key: OPENSHIFT_DATA_DIR
  Type: environment
  Description: Directory to store application data files. Preserved across git-pushes.
    Not shared across gears.
- Key: OPENSHIFT_APP_UUID
  Type: environment
  Description: Unique ID which identified the application. Does not change between
    gears.
- Key: OPENSHIFT_GEAR_UUID
  Type: environment
  Description: Unique ID which identified the gear. This value changes between gears.
Provides:
- nginx-1.11.1
- nginx
- php-fpm
- php-7.0.8
- php
Scaling:
  Min: 1
  Max: -1
Publishes:
  get-doc-root:
    Type: FILESYSTEM:doc-root
  publish-http-url:
    Type: NET_TCP:httpd-proxy-info
  publish-gear-endpoint:
    Type: NET_TCP:gear-endpoint-info
Group-Overrides:
- components:
  - php-7.0.8
  - web_framework
  - web_proxy
Endpoints:
- Private-IP-Name: IP
  Private-Port-Name: PORT
  Private-Port: 8080
  Public-Port-Name: PROXY_PORT
  Mappings:
  - Frontend: ''
    Backend: ''
    Options:
      websocket: true
  - Frontend: /health
    Backend: ''
    Options:
      health: true
Source-Url: https://github.com/daveneil/openshift-cartridge-nginx-php7/archive/master.zip
