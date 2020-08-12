# Modulo básico, Consola de comandos en Magento 2.3
Ejemplo de modulo con consola de comando con magento 2.3, inserta
valores en una tabla

Nombre del módulo:  labModule

- Modifcar namespace y nombre del módulo
- Comandos:
   - php bin/magento setup:upgrade
   - php bin/magento setup:di:compile
   - php bin/magento cache:flush

Después de instalar el modulo ejecute el siguiente comando:
- php bin/magento mastering:item:add "Item 3" "third description"
El comando almacenara un nuevo registro en la base de datos.
   