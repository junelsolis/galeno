#!/bin/bash

docker run --rm --interactive --tty \
    --volume $PWD/galeno-app:/app \
    composer install --ignore-platform-reqs --no-scripts
