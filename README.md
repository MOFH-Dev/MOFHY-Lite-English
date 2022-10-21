## MOFHY Lite

### WARNING!
At this time, both Client and Admin account can be hacked within secconds. PLEASE DO NOT USE MOFHY FOR NON-DEVELOPMENT REASONS! MOFHY Developers are not resposible for any damage caused by hackers. Take a look at [this](https://github.com/mahtab2003/Xera) instead.

MOFHY Lite is a priceless MyOwnFreeHost Client Area for account management, ticket support system and a free ssl service. It has easy to use features much like the WHMCS Digit UI interface. 

Spanish and Multi-Lang version will be released after all security issues have been patched.

![AppVeyor](https://img.shields.io/badge/Licence-MIT-lightgrey)
![AppVeyor](https://img.shields.io/badge/Version-v1.0.5-lightgrey)
![AppVeyor](https://img.shields.io/badge/Build-passed-lightgreen)
![AppVeyor](https://img.shields.io/badge/Dependencies-php-lightgrey)
![AppVeyor](https://img.shields.io/badge/Dependencies-mysql-lightgrey)
![AppVeyor](https://img.shields.io/badge/Interface-Digit-lightgrey)

## Table of Content 
- [Features](#features)
- [Requirements](#requirements) 
- [Installation](#installation)
- [Dependencies](#dependencies)
- [Contributer](#contributer)
- [Copyright](#copyright)

## Features
MOFHY Lite features are listed below:
- Sign up / Login 
- Password Reset Functionality
- eMail Validation / Verification 
- Account Management 
- Account Settings 
- GoGetSSL Api Integration 
- MOFH Api Integration 
- Ticket Support System 
- Custom Template System 
- Knowledgebase System
- Admin Settings
- Day/Night Mode
- Standalone Setup 
- SMTP Support 
- Extra Tools For Clients
  - WHOIS Lookup
  - DNS Lookup
  - CSR Generator
  - CSR Decoder

## Requirements
Your server need to met minimal requirements to run MOFHY Lite:
- PHP v5.6 or above.
- MySQL v5.2 or above.
- OpenSSL v1.1 or above. 

## Installation 
Installation of MOFHY Lite is much eaiser then you think!
- Download the zip file from GitHub
- Extract the .zip file to the root folder of your domain (You may have to extract it on your computer before uploading)
- Create a new and empty database for the project
- Open your browser and type ```http://yourdomain.com/``` an installation page will be appear
- After clicking "install" you have to fill out your database details and click on validate to connect to the database 
- Fill out the clientarea name, clientarea URL:```http://example.com/``` (The trailing slash is important), and clientarea email. Then click "next"
- Register the Admin account
- Rename or remove the "installation" directory form src directory (This is super important!)
- Access the admin panel at ```http://example.com/admin/``` 
- Set callback url to ```http://example.com/callback/Callback.php``` in the MOFH Reseller panel (panel.myownfreehostnet)
- Set up the API in "API Settings" in the admin area (```http://example.com/admin/```)
- Set up the Domain Extensions (Free subdomains) in the admin panel (```http://example.com/admin/```)
- All done! 

## Extra Setup Steps
- Create Knowledgebase articles for your webhost (```http://example.com/admin/```).

## Dependencies
The following libraries are required to run MOFHY Lite:
- phpmailer
- mofh-client
- guzzlehttp
- composer
- user info
- gogetssl

## SMTP
Here are some widely used SMTP services. They have a free plan with some limitations, although they are compatible with MOFHY-Lite.
- [Mailgun](https://www.mailgun.com/)
- [Sendinblue](https://sendinblue.com/)
- [SendClean](https://sendclean.com/)
- [Mailjet](https://mailjet.com/)
- [Yandex 360](https://360.yandex.com)
- [SendGrid](https://sendgrid.com/free/)
- [SendPulse](https://sendpulse.com/features/smtp)
- [ServersSMTP](https://serversmtp.com/get-free-emails/)

## Extensions
- [MOFHY PRO](https://getmofhy.eu.org)
- [MOFHY PLUS](https://mofhyplus.rf.gd)

## Contributer
This a community version, origonal code by [Mahtab Hassan](https://github.com/mahtab2003). 
Maintance and updates provided by the MOFHY community.

## Copyright
Code ©️ Copyright 2021 MOFHY Developers. Code released under the MIT license.
