Apaga y enciende un Led con NodeJS y Arduino.

Librerias usadas: Socket.io y Duino

Consideraciones: En este caso se ha usado una placa Arduino UNO bajo Ubuntu. La conexión establecida en la carpeta /dev/ fué ttyACM0. Si en tu caso, la conexión es diferente, modifica el siguiente fichero:

Cambia ls /dev | grep ACM node_modules/duino/lib/board.js en línea 75.