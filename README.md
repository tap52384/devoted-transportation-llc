# devoted-transportation-llc
Website for Devoted Transportation LLC - <http://devotedtransportllc.com>

## Color Palette

Source: [Color Hunt - Palette 168214](https://colorhunt.co/palette/168214)
[Color Hunt - Palette 7642](https://colorhunt.co/palette/7642)
[Color Hunt - Palette 166114](https://colorhunt.co/palette/166114)
[Color Hunt - Palette 1504](https://colorhunt.co/palette/1504)

Colors:
- `#48466d`
- `#3d84a8`
- `#46cdcf`
- `#abedd8`

## Setup local environment

> Before running the bash script below to make changes to this site, on
> Windows, you must install both Git for Windows and Docker Desktop first.

```bash
mkdir -p ~/code
cd ~/code
docker build --pull https://github.com/tap52384/ubi8-php-73.git -t tap52384/ubi8-php-73:latest
git clone -q https://github.com/tap52384/devoted-transportation-llc.git
app_folder=~/code/devoted-transportation-llc/
touch "$app_folder".env
s2i build \
--application-name "Devoted Transportation LLC" \
--environment-file "$app_folder"/.env \
"$app_folder" \
tap52384/ubi8-php-73:latest \
tap52384:devoted

# Stop and delete any containers based on the RedHat image
docker rm -f $(docker ps -aq --filter ancestor=registry.access.redhat.com/ubi8/php-73 --format="{{.ID}}") || true
docker rm -f devoted

# You can use the Remote Containers extension for VS Code to easily open your
# code within the Docker container. You can get it from here:
# https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers

# Create the container "devoted" with the code folder mounted
# Double quotes around ~/code/devoted-transportation-llc" fails on macOS, works in Git Bash
# Trying to use a variable containing the path to see if that helps!

docker run \
--name devoted \
--env-file "$app_folder"/.env \
-e USER=$(whoami) \
--hostname $(hostname) \
-d \
-p 8087:8080 \
-p 8447:8443 \
-v "$app_folder":/opt/app-root/src/ \
tap52384:devoted

# Install Composer packages
docker exec -it devoted bash -c 'curl -sS https://getcomposer.org/installer | php && php composer.phar install'
# Install NPM, loads NPM, and Composer NPM packages
docker exec -it devoted bash -c 'touch ~/.bash_profile && curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash && source ~/.bash_profile && command -v nvm && echo $NVM_DIR && \. $NVM_DIR/nvm.sh && nvm --version && nvm install 8.17.0 && npm -v && npm install && npm run dev'
# Generates app key for Laravel
docker exec -it devoted bash -c 'cp -fv $HOME/.env.example $HOME/.env && php artisan key:generate && echo "DOCUMENTROOT=/public/" >> $HOME/.env'
```

## Create a Laravel app for GoDaddy

> Before running the bash script below to create a laravel app from scratch, on
> Windows, you must install both Git for Windows and Docker Desktop first.

```bash
# You can build the image without having to clone the repository locally
# Uses the "master" branch for building the image
mkdir -p ~/code
cd ~/code
docker build --pull https://github.com/tap52384/ubi8-php-73.git -t tap52384/ubi8-php-73:latest

# Clone the code
git clone -q https://github.com/tap52384/devoted-transportation-llc.git

# Change this variable to update the code folder location throughout this script
app_folder=~/code/devoted-transportation-llc/
touch "$app_folder".env

if [[ "$OSTYPE" == "darwin"* ]]; then
    # Install Homebrew (https://brew.sh) and necessary libraries
    /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
    formulas=('openshift-cli' 'source-to-image')
    for formula in ${formulas[@]}; do
        brew ls --versions $formula > /dev/null
        formula_installed=$?
        if [ ! "$formula_installed" eq 0 ]; then
            echo "Installing '$formula' formula..."
            brew install $formula
        else
            echo "Formula '$formula' is already installed; skipping..."
        fi
    done
    brew cask install docker
elif [[ "$OSTYPE" == "cygwin" || "$OSTYPE" == "msys" ]]; then
    echo 'Detected that this script is running within Git Bash...'
    download_path="~/AppData/Local/Microsoft/WindowsApps"
    files=(
        # OpenShift command-line tools
        'openshift.zip'
        # Source-to-Image
        's2i.zip'
    )
    urls=(
        'https://github.com/openshift/origin/releases/download/v3.11.0/openshift-origin-client-tools-v3.11.0-0cbc58b-windows.zip'
        'https://github.com/openshift/source-to-image/releases/download/v1.2.0/source-to-image-v1.2.0-2a579ecd-windows-amd64.zip'
    )
    for key in "${#files[@]}"; do
        echo "Downloading '${urls[$key]}'..."
        curl -L -o "$download_path/${files[$key]}" "${urls[$key]}"
        echo "Unzipping '$download_path/${files[$key]}'..."
        unzip -uv "$download_path/${files[$key]}"
        echo "Deleting downloaded file '$download_path/${files[$key]}'..."
        rm "$download_path/${files[$key]}"
    done
fi

# error: Unable to load docker config: json: cannot unmarshal string into Go value of type docker.dockerConfig
# docker login fixes this

s2i build \
--environment-file "$app_folder"/.env \
"$app_folder" \
tap52384/ubi8-php-73:latest \
tap52384:devoted

# Stop and delete any containers based on the RedHat image
docker rm -f $(docker ps -aq --filter ancestor=registry.access.redhat.com/ubi8/php-73 --format="{{.ID}}") || true
docker rm -f devoted

# Create the container "devoted" with the code folder mounted
# Double quotes around ~/code/devoted-transportation-llc" fails on macOS, works in Git Bash
# Trying to use a variable containing the path to see if that helps!

docker run \
--name devoted \
--env-file "$app_folder"/.env \
-e USER=$(whoami) \
--hostname $(hostname) \
-d \
-p 8087:8080 \
-p 8447:8443 \
-v "$app_folder":/opt/app-root/src/ \
tap52384:devoted

# Install Composer & the installer for Laravel, and required packages for Laravel
docker exec -it devoted bash -c 'curl -sS https://getcomposer.org/installer | php && php composer.phar global require laravel/installer && laravel new .';
# Install NPM, loads NPM, and Composer NPM packages
docker exec -it devoted bash -c 'touch ~/.bash_profile && curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash && source ~/.bash_profile && command -v nvm && echo $NVM_DIR && \. $NVM_DIR/nvm.sh && nvm --version && nvm install 8.17.0 && npm -v && npm install && npm run dev'
# Generates app key for Laravel
docker exec -it devoted bash -c 'cp -fv $HOME/.env.example $HOME/.env && php artisan key:generate && echo "DOCUMENTROOT=/public/" >> $HOME/.env'
```

## Twitter Bootstrap Scaffolding

Add Bootstrap 4 to Laravel via the instructions [here](https://laravel.com/docs/6.x/frontend).

```bash
# Adds the "ui" command to Artisan
composer require laravel/ui --dev

php artisan ui bootstrap
```

## Laravel 6.x

### Sharing data with all views

The list of services provided are in an array in the `AppServiceProvider` class.
This allows the data to be shared with all views and updated everywhere on the
site at once. This technique is outlined in [the documentation](https://laravel.com/docs/6.x/views#sharing-data-with-all-views).

### Creating Controllers for CRUD operations

```bash
# https://laravel.com/docs/5.7/controllers#resource-controllers
# Creates the Contact model and ContactController controller classes
php artisan make:controller ContactController --resource --model=Contact -q
```

### Creating Mailables

```bash
# https://laravel.com/docs/5.7/mail#generating-mailables
php artisan make:mail ContactSubmitted
```

## Adding a foreign key constrain to MySQL in a single statement

```sql
-- https://stackoverflow.com/a/1545264/1620794
ALTER TABLE employments
ADD COLUMN position_id INT,
ADD FOREIGN KEY fk_employments_positions_position_id(position_id)
REFERENCES positions(ID) ON DELETE CASCADE;

ALTER TABLE employments
ADD COLUMN state_id INT,
ADD FOREIGN KEY fk_employments_states_state_id(state_id)
REFERENCES states(ID) ON DELETE CASCADE;
```

## Create "states" table in MySQL

```sql
CREATE TABLE `states` (
 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `initial` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
 `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `id` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci


```

## How to update site on GoDaddy with latest code

```bash
# SSH into GoDaddy's servers
# Reference URL: https://blog.netgloo.com/2015/08/06/configuring-godaddys-shared-hosting-for-laravel-and-git/
ssh username@devotedtransportllc.com

# Clone the code repo then rename the folder
cd ~
git clone https://github.com/tap52384/devoted-transportation-llc.git
cp -nv ~/devoted-transportation-llc/.env.example ~/devoted-transportation-llc/.env
mv ~/devoted-transportation-llc/ ~/code/

# Delete the public_html folder
rm -r ~/public_html
# Create a symbolic link to the ~/code/public folder
ln -s ~/code/public public_html

# Download Composer and install packages
cd ~/code
curl -sS https://getcomposer.org/installer | php
composer install
# Generate application key for Laravel
# https://laravel.com/docs/6.x/installation#configuration
php artisan key:generate

# See if node.js is already installed on the system first
which node
which npm

# Use Node Version Manager (nvm) to install NPM without root access
# https://ferugi.com/blog/nodejs-on-godaddy-shared-cpanel/
# https://github.com/nvm-sh/nvm
cd ~
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash
# Reload the PATH
source ~/.bash_profile
# Verify the installation
nvm --version
# Use nvm to install Node.js (npm, node)
# Due to missing requirements (like GLIBCXX_3.4.14), you have to install
# an older version of node, but hopefully not too old:
# https://stackoverflow.com/a/57798787/1620794
# https://nodejs.org/en/download/releases/
nvm install 8.17.0
# Verify node and npm are installed
node -v
npm -v
# Install Laravel packages via npm, update site CSS and JavaScript
cd ~/code
npm install
npm run production

# Update the code by pulling the latest changes
cd ~/code
git checkout master
git pull --rebase
npm run production
```

## Environment Variables

Please see `.env.example` for a list of environment variables that had to be
set in order for everything to work, including a few that were added, such as:

- `APP_TIMEZONE`
- `MAIL_BCC_RECIPIENTS`

`MAIL_DRIVER` had to be changed to `sendmail` in order for mail to be sent from
__GoDaddy__.

## References

- <https://laravel.com/api/6.x/Illuminate/Http/UploadedFile.html>
- [US States in JSON form](https://gist.github.com/mshafrir/2646763)
- <https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file#accept>
- <https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types>
- <https://stackoverflow.com/a/1545264/1620794>
- [The best favicon generator yet](https://realfavicongenerator.net/)
- [CSS3 Patterns Gallery](https://leaverou.github.io/css3patterns/)
- [lite-youtube-embed](https://github.com/paulirish/lite-youtube-embed)

## SVG

To style an SVG, it's best to include it inline.
Make sure the SVG has primitives (rect, circle, path) included.
