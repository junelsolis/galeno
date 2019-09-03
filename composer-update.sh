#!/bin/bash

docker run --rm --interactive --tty \
    --volume $PWD/medicoffice-app:/app \
    composer update --ignore-platform-reqs --no-scripts
