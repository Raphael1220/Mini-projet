FROM php:8.2-apache
# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        unzip
# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Enable necessary PHP extensions
RUN docker-php-ext-install pdo_mysql zip
# Set working directory
WORKDIR /var/www/html
# Copy application files
COPY . /var/www/html
# Expose port 80
EXPOSE 80
# pdftk
RUN mkdir -p /usr/share/man/man1 \
    && apt update && apt install pdftk default-jre -y \
    && rm -rf /var/lib/apt/lists/*