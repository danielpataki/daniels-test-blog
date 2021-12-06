echo "Grabbing WordPress"
git clone https://github.com/WordPress/WordPress.git ./public
echo "WordPress Downloaded"

echo "Creating Config"
cp config.php ./public/wp-config.php
