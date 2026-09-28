# Portfolio Deployment Guide

This project is already structured for PHP hosting and is ready to be uploaded to a live server.

## Files to upload
Upload the contents of this folder to your hosting root/public directory:

- index.php
- portfolio-data.php
- styles.css
- script.js
- resumepic.jpg
- any other assets used by the page

## Recommended hosting options
For this portfolio, use one of these:

1. Shared PHP hosting
   - Best for simple deployment
   - Usually supports PHP and static files

2. VPS hosting
   - Better if you want full control and a custom setup
   - Good for future scale and domains

3. Cloud hosting
   - Good if you want more reliability

## Suggested providers
- Hostinger
- SiteGround
- Namecheap shared hosting
- DigitalOcean VPS
- Linode VPS

## Deployment steps
1. Sign up for a PHP hosting plan.
2. Create a domain or use the provider subdomain.
3. Upload the project folder content to the web root.
4. Ensure PHP is enabled on the server.
5. Open the site in the browser using the hosting URL.

## Important notes
- This project uses PHP, so it will not work on purely static hosts like GitHub Pages without conversion.
- The image uses the local file resumepic.jpg, so upload it together with the HTML/PHP files.
- The site is already compatible with PHP’s built-in server for local testing.

## Local test command
From the project folder:

php -S 0.0.0.0:8000

Then open:

http://localhost:8000/

## For public access
To make it visible publicly, you need a hosting account plus either:
- a domain name, or
- a free provider subdomain

Without a hosting account, no machine on your local network can publish the site to the public internet.
