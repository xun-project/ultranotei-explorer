# UltraNote Explorer
Block explorer for UltraNote CryptoNote based cryptocurrency.

#### Installation

1) It takes data from daemon UltraNoted. It should be accessible from the Internet. Run UltraNoted with open port as follows:
```bash
./UltraNoted --enable-cors="*" --enable_blockexplorer --rpc-bind-ip=0.0.0.0 --rpc-bind-port=43000
```
2) Just upload to your website and change 'api' variable in config.js to point to your daemon.

### Development
Devs: @taegus @katz @devopsralf

### Note
A lot of this code is from the great Karbovanets/Karbowanec-Blockchain-Explorer
