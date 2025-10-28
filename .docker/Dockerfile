# Dockerfile for running the application and tests using PHP 8.3 CLI
FROM php:8.3-cli

# Install system dependencies and PHP extensions commonly required for Composer and testing
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        libicu-dev \
        libzip-dev \
        unzip \
        zip \
    && docker-php-ext-install zip intl \
    && rm -rf /var/lib/apt/lists/*

# Copy composer from official composer image to have composer available
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Create non-root user to run commands (optional)
# https://docs.docker.com/develop/develop-images/dockerfile_best-practices/#user
RUN useradd -m appuser || true
USER appuser

WORKDIR /app

# Default command keeps the container interactive; CI will run specific commands
CMD ["bash"]
