# PHP Payment Gateway Integration POC

This project is a POC for an integration between a PHP application and an external Payment Gateway.

## Dependencies

This code has been tested under PHP 8.0 on an Ubuntu platform though there's nothing too special about it, so it should work fine in other platforms.

## Installation

Clone this repository in a directory of your choice

## Running

To run this application use the following command `sh start.sh` which will start two local php built-in webservers, one listening on port 8000 and the second on 8001.

<u>Warning</u>: if either port is already in use the application will fail to init

Once the webservers are up and running the script will open a browser window to start the workflow

## Stopping

To stop the execution of the webservers you can use the command `sh stop.sh`

## How does it work

The idea here is to simulate a purchase workflow where the user will land on the purchase page with a referrer code. They will then be redirected to an external payment gateway (represented by `http://localhost:8001`) and, at their return, the referrer code will still be present, so as to attribute the sale to the appropriate referrer

## Notes

This is, as mentioned above, a simple POC. It's not meant to be taken as a fully functional application but rather as an example of how to think about this kind of situation. In a real scenario security measures should be taken to avoid being victims of attacks.