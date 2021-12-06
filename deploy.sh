echo "Grabbing WordPress"
git clone https://github.com/WordPress/WordPress.git ./public
echo "WordPress Downloaded"

echo "Creating Config"
cp config.php ./public/wp-config.php

echo "Add Theme"
cp -r blog-theme ./public/wp-content/themes/blog-theme

echo "Get S3 Offload plugin"
git clone https://github.com/deliciousbrains/wp-amazon-s3-and-cloudfront.git ./public/wp-content/plugins/amazon-s3-and-cloudfront

echo "Creating GCP Service Key"
echo $GCP_SERVICE_KEY > ./gcp-service-key.json
