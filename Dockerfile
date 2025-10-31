# Use an official lightweight Nginx image
FROM nginx:alpine

# Remove the default Nginx web files
RUN rm -rf /usr/share/nginx/html/*

# Copy your HTML file into Nginx’s web root
COPY index.html /usr/share/nginx/html/index.html

# Expose port 80 to the outside world
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
