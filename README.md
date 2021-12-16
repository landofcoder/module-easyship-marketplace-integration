# Magento 2 Module Lofmp Easyship

    ``landofcoder/module-seller-easyship``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Easyship integration for marketplace allow seller fulfill his orders with easyship

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Lofmp`
 - Enable the module by running `php bin/magento module:enable Lofmp_Easyship`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require landofcoder/module-seller-easyship`
 - enable the module by running `php bin/magento module:enable Lofmp_Easyship`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Is Enabled (lofmpeasyship/general/enabled)


## Specifications

 - Controller
	- frontend > easyship/webhook/index

 - GraphQl Endpoint
	- MyEasyship

 - Helper
	- Lofmp\Easyship\Helper\Data

 - Model
	- EasyshipAccount


## Attributes



