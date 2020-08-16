# Starting from debian:buster as per Subject
FROM debian:buster

# Setting a convenient place to live in
WORKDIR /usr/local/src

# Copying necessary scripts & stuff
COPY srcs/. ./

# Setting ENV to process autoindex
ENV INDEX=1

# Making a HTTP port available from outside
EXPOSE 80

# Making a HTTPS port available
EXPOSE 443

# Running configuration scripts
RUN bash initial_config.sh

# Starting nginx in foreground
CMD ["bash", "final_config.sh"]
