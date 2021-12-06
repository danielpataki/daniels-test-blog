echo "Grabbing WordPress"
git clone https://github.com/WordPress/WordPress.git ./public
echo "WordPress Downloaded"

echo "Creating Config"
cp config.php ./public/wp-config.php

echo "Add Theme"
cp -r blog-theme ./public/wp-content/themes/blog-theme

echo "Extract and move plugin"
unzip amazon-s3-and-cloudfront.2.2.5.zip
mv amazon-s3-and-cloudfront ./public/wp-content/plugins/amazon-s3-and-cloudfront
