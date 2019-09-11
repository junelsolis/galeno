<img src='https://github.com/junelsolis/medicoffice/blob/master/galeno-logo.svg' width='300'>

![](https://img.shields.io/github/languages/top/junelsolis/galeno?style=flat-square) ![](https://img.shields.io/travis/junelsolis/galeno?label=TravisCI&style=flat-square) [![StyleCI](https://github.styleci.io/repos/164389688/shield?branch=master)](https://github.styleci.io/repos/164389688)

Some medical practices are under-equipped when it comes to maintaining patient records. Many still rely on paper to keep track of their patients. This web application aims to solve that problem in the simple, easy-to-use, and open-source way.

### Demo Site
I have taken down the demo site temporarily as I clean up the code and create better unit and feature tests. Once there is enough content for a frontend, a new demo site will be made available online.

##### How to run the demo on your computer
1. Clone this repository
1. Switch to the project directory `cd galeno`
1. Run the setup script: `./setup.sh`
1. Once the script is finished running, the application will be accessible on `http://localhost:9300`

##### System Requirements
* [Docker Engine](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
* [Docker Compose](https://docs.docker.com/compose/install/)
* [Node Package Manager](https://www.npmjs.com/get-npm)

##### Expected Deployment Configuration
- NGINX reverse proxy handles SSL termination
- Application containers listening on localhost
