# Setup

## Requirements

Please make sure you have the following minimum requirements on your machine. The project should function on Mac or PC.

 - Docker 

> **Docker for Mac OS Requirements installation**
>
> To get up and running on Mac OS, you can copy and paste following commands into a terminal in order.
>
> - `/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`
> - `brew cask install docker`
>
> This will install homebrew, and docker.

## Project Quick Start

After installing the requirements above, in the project directory run `docker-compose up`. This will:

 - Download and start docker container for WordPress and MySQL (MySQL accessible on `localhost:3306` - details in `docker-compose.yml`)
 - Start WordPress with a fresh install (accessable at `http://localhost/`)

At this point, you can begin your plugin development. Create a new plugin in the `src/plugins` directory and it will automatically be added to the installed WordPress plugins (though you will need to enabled from WP admin).