# Pulled from the ECR Public mirror of Docker Hub's official image,
# which avoids Docker Hub rate limits inside CodeBuild.
FROM public.ecr.aws/docker/library/php:8.3-apache

COPY index.php /var/www/html/index.php

EXPOSE 80
