### Upgrade-Instruktionen

# Komponenten stoppen
rcgrpwise stop
rctomcat6 stop  # lb-maschinen

# Pakete deinstallieren. Ist abh. vom Update nötig. bei offiziellen Releases idR. nicht
zypper rm novell-groupwise-*
# oder einzeln 
zypper rm novell-groupwise-gwha novell-groupwise-server
zypper rm novell-groupwise-webaccess-webapp # lb-maschinen

cd INSTALL/gw-current
./install.sh
        # Server
        # Webaccess

# Komponenten starten
rcgrpwise start
rctomcat6 start  # lb-maschinen

### Groupwise-Pakete
novell-groupwise-gwha
novell-groupwise-server
novell-groupwise-gwmon                  # gwmon auf gwdom0
novell-groupwise-webaccess-webapp       # webaccess/lb-maschinen

### WebAccess/LB-Maschinen zusätzlich

cd /root/INSTALL/gw-release/
./install.sh

cd /root/INSTALL/Konfiguration
cp webaccesslogo_mlu.png gw-webapp

chkconfig apache2 off
rcapache2 stop

### Core-Dump erstellen
# Details unter https://www.novell.com/support/kb/doc.php?id=3447847
export PATH=/opt/novell/groupwise/agents/bin:$PATH
getappcore -r {SR_ID} /core[.{PID}]

# Der Dump befindet sich dann unter /var/log/nts*


