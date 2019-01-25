#!/bin/bash

docker run --rm --interactive --tty \
    --volume $PWD/app:/app \
    composer install --ignore-platform-reqs --no-scripts
