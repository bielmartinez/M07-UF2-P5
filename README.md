# M07-UF1-P5
## RECORDATORI CONVERSA A CLASSE
Tan el captcha com la recuperació amb token estan implementats, el login de Google està implementat pero si es fa servir la lógica que vas proporcionar no fa el login i si intento fer-lo amb una altra tinc un fatal error a les llibreries. Si es vol veure l'error cal comentar la linea 14 al arxiu configuracioGoogle i descomentar la 16. També van provar executant codi funcional de internet i rebia el mateix error.

## RECUPERACIÓ TOKEN
Per tal de que s'envii el correu per recuperar la contrasenya, cal que l'usuari introduït sigui un correu vàl·lid. Recomano registrar un correu vàlid com a usuari per fer totes les proves.

## RECAPTCHA
El captcha tan sols apareix després de 3 intents de login fallits. El usuari ha de ser vàl·lid i la contrasenya incorrecte, en cas de introduir un usuari inexistent no contarà per el total d'errors. 

### BD
Repassant pràctiques antigues m'he adonat que em vaig oblidar d'adjutar el sql per importar la bd, per això el últim commit és tan recent