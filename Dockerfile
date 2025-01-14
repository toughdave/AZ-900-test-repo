# Use an official Nginx image as the base
FROM nginx:alpine

# Copy your website's HTML files to the Nginx container
COPY . /usr/share/nginx/html
