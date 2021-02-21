# DotEnv Package Project
This project consists of facilitating the use of the .env file in PHP projects, in order to protect the access information to banks and third party services such as E-mail, AWS and others.

Este projeto consiste em facilitar o uso do arquivo .env em projetos PHP, a fim de proteger as informações de acessao a banco e serviços de terceiros como E-mail, AWS e outros.

## .env file
It should preferably be in the project's root folder and should be called like this: "(new DotEnv (__ DIR __." /../. Env ")) -> load ()" so that the contents of the .env file can be obtained for $ _ENV ['KEYNAME'].
In the .env file, write, without spaces;(example: KEYNAME=key_value). Note that lines beginning with # will not be read by the class.